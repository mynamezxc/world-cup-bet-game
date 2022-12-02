<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;
use App\Models\Game;
use App\Models\History;
use App\Models\Voting;
use Exception;

class GameManager extends Controller
{
    
    public function create_match(Request $request)
    {
        $game_start = $request->post("game_start");
        $strong_team_id = $request->post("strong_team");
        $weak_team_id = $request->post("weak_team");
        $deviant = $request->post("deviant");
        $over_under = $request->post("over_under");

        try {
            $game = new Game();
            if (strlen($game_start) >= 1) {
                $game->start = date("Y-m-d h:i:s", strtotime($game_start));
            } else {
                $game->start = date("Y-m-d h:i:s", time() + 60*60*24);
            }
            $game->strong_team = $strong_team_id;
            $game->weak_team = $weak_team_id;
            $game->deviant = $deviant;
            $game->over_under = $over_under;
            $game->strong_team_score = 0;
            $game->weak_team_score = 0;
            $game->disabled = false;
            $game->game_done = false;
            $game->save();
            return redirect("/");
        } catch(Exception $e) {
            return abort(400, "Invalid field input");
        }
    }

    public function vote(Request $request) {
        $current_player = false;

        if (!$current_player && $request->session()->has("access_key")) {
            $current_player = Player::where("key", $request->session()->get("access_key", ""))->first();
        }

        if ($current_player && $current_player->id)
        {
            $game_id = $request->post("game_id", false);
            $vote = $request->post("vote", false);
            $use_lucky_star = $request->post("use_lucky_star", false) == "on" ? true : false;
            // var_dump($use_lucky_star);
            // die;
            if ($game_id && $vote) {
                $game = Game::where("id", $game_id)->first();
                
                if ($game && !$game->disabled && !$game->game_done && in_array($vote, ["over", "under", "strong", "weak"])) {
                    
                    // Check is vote or not
                    $vote_type = $vote == "over" || $vote == "under" ? "over_under" : "normal";
                    // Chưa check điều kiện loại vote => 1 game chỉ có thể vote taixiu hoặc thangthua vote_type
                    $voted = Voting::where("game_id", $game_id)->where("player_id", $current_player->id)->where("vote_done", false)->first();
                    // Đã vote 1 lần
                    if (!$voted || empty($voted)) {
                        
                        $voting = new Voting;
                        $voting->player_id = $current_player->id;
                        $voting->game_id = $game->id;
                        $voting->vote_type = $vote_type;
                        $voting->vote_value = $vote;
                        $voting->vote_done = 0;
                        if ($current_player->lucky_stars > 0 && $use_lucky_star) {
                            $voting->use_lucky_star = true;
                            $current_player->lucky_stars -= 1;
                            $current_player->save();
                        } else {
                            $voting->use_lucky_star = false;
                        }
                        $voting->save();
                    } else {
                        // Đã vote thì cập nhật
                        $voted->vote_type = $vote_type;
                        $voted->vote_value = $vote;
                        if ($use_lucky_star) {
                            
                            if (!$voted->use_lucky_star && $current_player->lucky_stars > 0) {
                                $current_player->lucky_stars -= 1;
                                $current_player->save();
                                $voted->use_lucky_star = true;
                            } else {
                                $voted->use_lucky_star = false;
                            }
                            
                        } else {
                            if ($voted->use_lucky_star) { //Đã sử dụng ngôi sao may mắn trước đó
                                // Cancel use lucky star
                                $current_player->lucky_stars += 1;
                                $current_player->save();
                            }
                            $voted->use_lucky_star = false;
                        }
                        $voted->save();
                    }
                    return redirect("/");
                }
            }
        }
        return abort(400, "Can not modify your selection game");
    }

    public function update(Request $request)
    {

        $current_player = false;

        if (!$current_player && $request->session()->has("access_key")) {
            $current_player = Player::where("key", $request->session()->get("access_key", ""))->first();
        }

        $game_id = $request->post("game_id", false);
        $strong_team_score = $request->post("strong_team_score", false);
        $weak_team_score = $request->post("weak_team_score", false);

        $game = Game::findOrFail($game_id);
        if (@$game && @$game->id && is_numeric($weak_team_score) && is_numeric($strong_team_score)) {
            $votes_of_this_game = Voting::where("game_id", $game_id)->get();
            $player_list = Player::all();
            if ($votes_of_this_game->count() >= 1) {
                
                // Update game
                $game->strong_team_score = $strong_team_score;
                $game->weak_team_score = $weak_team_score;
                $game->game_done = true;
                $game->disabled = true;
                $game->save();

                // Calc score for player
                foreach($player_list as $player) {

                    $history = new History();
                    $history->game_id = $game_id;
                    $history->player_id = $player->id;
                    

                    // Calc per Player
                    $voted = $player->get_vote_by_game($game_id);

                    if (!$voted) {
                        // No vote
                        $history->add_score = -1;
                        $history->status = "no_vote";
                        $history->vote_id = false;

                    } else {

                        $history->vote_id = $voted->id;
                        $history->use_lucky_star = $voted->use_lucky_star;

                        if ($voted->vote_type == "over_under") {
                            // Over / Under game
                            $total_score = $strong_team_score + $weak_team_score;

                            if ($total_score == $game->over_under) {
                                $history->add_score = 1;
                                $history->status = "draw";
                            } else if ($total_score > $game->over_under && $voted->vote_value == "over") {
                                // Voted over
                                $history->add_score = 3;
                                $history->status = "win";
                            } else if ($total_score < $game->over_under && $voted->vote_value == "under") {
                                // Voted under
                                $history->add_score = 3;
                                $history->status = "win";
                            } else {
                                $history->add_score = -3;
                                $history->status = "loss";
                            }
                        } else {
                            // Normal game
                            if ($strong_team_score == $weak_team_score + $game->deviant) {
                                $history->add_score = 1;
                                $history->status = "draw";
                            } else if ($strong_team_score >= $weak_team_score + $game->deviant && $voted->vote_value == "strong") {
                                // voted strong
                                $history->add_score = 3;
                                $history->status = "win";
                            } else if ($strong_team_score <= $weak_team_score + $game->deviant && $voted->vote_value == "weak") {
                                // voted weak
                                $history->add_score = 3;
                                $history->status = "win";
                            } else {
                                $history->add_score = -3;
                                $history->status = "loss";
                            }
                        }

                        $voted->vote_done = true;
                        $voted->save();
                        
                    }

                    if ($history->use_lucky_star) {
                        $history->add_score *= 2;
                    }
                    $player->score = $player->score + $history->add_score;
                    $player->save();
                    $history->save();
                }

            }
        }
        
        return redirect("/");

    }

    public function disable(Request $request)
    {
        $current_player = false;

        if (!$current_player && $request->session()->has("access_key")) {
            $current_player = Player::where("key", $request->session()->get("access_key", ""))->first();
        }

        if ($current_player && @$current_player->is_manager) {
            $game_id = $request->post("game_id", false);
            $game = Game::findOrFail($game_id);
            if ($game && @$game->id) {
                $game->disabled = true;
                $game->save();
            }
        }
        return redirect("/");
    }

    public function enable(Request $request)
    {
        $current_player = false;

        if (!$current_player && $request->session()->has("access_key")) {
            $current_player = Player::where("key", $request->session()->get("access_key", ""))->first();
        }

        if ($current_player && @$current_player->is_manager) {
            $game_id = $request->post("game_id", false);
            $game = Game::findOrFail($game_id);
            if ($game && @$game->id) {
                $game->disabled = false;
                $game->save();
            }
        }
        return redirect("/");
    }

    public function remove_match(Request $request)
    {
        $current_player = false;

        if (!$current_player && $request->session()->has("access_key")) {
            $current_player = Player::where("key", $request->session()->get("access_key", ""))->first();
        }

        if ($current_player && @$current_player->is_manager) {
            $game_id = $request->post("game_id", false);
            $game = Game::findOrFail($game_id);
            if ($game && @$game->id) {

                $voting_list = Voting::where("game_id", $game_id)->get();
                if ($voting_list->count() >= 1) {
                    foreach ($voting_list as $vote) {
                        $vote->delete();
                    }
                }
                $game->delete();
            }
        }
        return redirect("/");
    }

}
