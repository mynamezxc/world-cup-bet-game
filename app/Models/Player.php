<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'player';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'key',
        'name',
        'score',
        'is_manager',
        'lucky_stars'
    ];

    public function votings()
    {
        return $this->hasMany(Voting::class, "player_id");
    }

    public function get_vote_by_game($game_id)
    {
        return Voting::where("player_id", $this->id)->where("game_id", $game_id)->first();
    }

    public function win_count()
    {
        return $this->histories()->where("status", "win")->count();
    }

    public function loss_count()
    {
        return $this->histories()->where("status", "loss")->count();
    }

    public function draw_count()
    {
        return $this->histories()->where("status", "draw")->count();
    }

    public function no_vote_count()
    {
        return $this->histories()->where("status", "no_vote")->count();
    }

    public function histories()
    {
        return $this->hasMany(History::class, "player_id");
    }

    public function obj_team_1st()
    {
        return $this->belongsTo(Team::class, 'team_1st');
    }
    
    public function obj_team_2nd()
    {
        return $this->belongsTo(Team::class, 'team_2nd');
    }

    public function get_team_1st()
    {
        return $this->obj_team_1st()->first();
    }

    public function get_team_2nd()
    {
        return $this->obj_team_2nd()->first();
    }
}
