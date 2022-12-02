<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;
use App\Models\Player;

class TeamManager extends Controller
{
    public function remove_team(Request $request)
    {
        $current_player = false;

        if (!$current_player && $request->session()->has("access_key")) {
            $current_player = Player::where("key", $request->session()->get("access_key", ""))->first();
        }

        if ($current_player && @$current_player->is_manager) {
            $team_id = $request->post("team_id", false);
            $team = Team::findOrFail($team_id);
            if ($team && @$team->id) {
                $team->is_out = true;
                $team->save();
            }
        }
        return redirect("/");
    }
}
