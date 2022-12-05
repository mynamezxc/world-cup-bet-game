<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\History;
use App\Models\Game;
use App\Models\Voting;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    
    public function index(Request $request)
    {
        $access_key_post = $request->post("access_key");
        $current_player = false;

        // var_dump($access_key_post);
        // die;

        if ($access_key_post) {
            // echo 1234;
            $request->session()->put('access_key', $access_key_post);
            $current_player = Player::where("key", $access_key_post)->first();
        }

        if (!$current_player && $request->session()->has("access_key")) {
            // echo $request->session()->get("access_key", "");
            $current_player = Player::where("key", $request->session()->get("access_key", ""))->first();
        }
        // var_dump($current_player);
        // die;
        $players = Player::orderBy('score', 'desc')->get();

        $available_games = Game::where("disabled", false)->where("game_done", false)->orderBy("start", "asc")->get();
        $disabled_games = Game::where("disabled", true)->where("game_done", false)->orderBy("start", "asc")->get();
        $expired_games = Game::where("game_done", true)->orderBy("start", "desc")->get();
        $all_games = Game::orderBy("start", "desc")->get();
        $voting_list = Voting::where("vote_done", false)->orderBy("player_id", "desc")->get();

        $teams_available = Team::where("is_out", false)->get();
        $teams = Team::orderBy("is_out", "asc")->get();

        // var_dump($disabled_games);die;

        $win_rate = 0;
        $current_ranking = 0;
        if ($current_player && count($all_games) >= 1) {

            $played_game = array_filter($all_games->toArray(), function ($game) {
                return (@$game["game_done"] == true);
            });

            $win = $current_player->win_count();
            $win_rate = 100 / count($played_game) * $win;
            foreach ($players as $counter => $player) {
                if ($player->id == $current_player->id) {
                    $current_ranking = $counter+1;
                }
            }
        }

        return view('home.index', [
            "players" => $players, 
            "available_games" => $available_games, 
            "disabled_games" => $disabled_games, 
            "expired_games" => $expired_games,
            "teams_available" => $teams_available,
            "voting_list" => $voting_list,
            "teams" => $teams,
            "current_player" => $current_player, 
            "win_rate" => (int) $win_rate,
            "current_ranking" => $current_ranking,
            "all_games" => $all_games
        ]);
    }

    public function vote_winner(Request $request)
    {
        $current_player = false;

        if (!$current_player && $request->session()->has("access_key")) {
            $current_player = Player::where("key", $request->session()->get("access_key", ""))->first();
        }
        $team_1st = $request->post("team_1st", false);
        $team_2nd = $request->post("team_2nd", false);
        if ($current_player && time() < strtotime("03-12-2022 21:30:00")) {
            if ($team_1st && is_numeric($team_1st)) {
                $current_player->team_1st = $team_1st;
            }
            if ($team_2nd && is_numeric($team_2nd)) {
                $current_player->team_2nd = $team_2nd;
            }
            $current_player->save();
        }
        return redirect("/");
    }

    public function game($id)
    {

    }

    public function vote($player_key, $game_id, $vote) 
    {

    }

    public function init()
    {
        $players_default = ["Mr.Châu", "Mr.Nhân", "Mr.Khánh", "Mr.Thái", "Mr.Minh", "Mr.Luân", "Mr.Hiệp", "Mr.Lucin", "Mr.Long", "Mr.Duy", "Mr.Nguyên", "Mr.Thơ"];
        
        $teams_default = [
            "Hà Lan" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/NED?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Senegal" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/SEN?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Ecuador" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/ECU?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Qatar" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/QAT?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Anh" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/ENG?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Hoa Kỳ" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/USA?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Iran" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/IRN?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Wales" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/WAL?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Ba lan" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/POL?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Argentina" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/ARG?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Ả Rập Xê Út" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/KSA?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Mexico" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/MEX?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Pháp" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/FRA?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Úc" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/AUS?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Đan Mạch" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/DEN?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Tunisia" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/TUN?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Tây Ban Nha" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/ESP?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Nhật Bản" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/JPN?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Costa Rica" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/CRC?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Đức" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/GER?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Croatia" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/CRO?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Maroc" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/MAR?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Bỉ" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/BEL?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Canada" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/CAN?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Brazil" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/BRA?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Thụy Sĩ" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/SUI?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Cameroon" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/CMR?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Serbia" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/SRB?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Bồ Đào Nha" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/POR?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Ghana" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/GHA?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Hàn Quốc" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/KOR?tx=c_fill,g_auto,q_auto,w_94,h_62",
            "Uruguay" => "https://cloudinary.fifa.com/api/v3/picture/flags-sq-4/URU?tx=c_fill,g_auto,q_auto,w_94,h_62",
        ];

        if (Player::count() == 0) {
            foreach ($players_default as $default_name)
            {
                $player = new Player();
                $player->name = $default_name;
                $player->score = 0;
                $player->key = $this->generateRandomString(50);
                $player->is_manager = false;
                $player->team_1st = false;
                $player->team_2nd = false;
                if ($default_name == "Mr.Hiệp") {
                    $player->is_manager = true;
                }
                $player->save();
            }
        }
        if (Team::count() == 0) {
            foreach ($teams_default as $team_name => $team_logo)
            {
                $team = new Team();
                $team->name = $team_name;
                $team->logo = $team_logo;
                $team->is_out = false;
                $team->save();
            }
        }
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
