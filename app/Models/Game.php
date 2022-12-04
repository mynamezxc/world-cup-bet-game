<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = 'games';
    protected $fillable = [
        'start',
        'strong_team',
        'weak_team',
        'strong_team_score',
        'weak_team_score',
        'deviant',
        'over_under',
        'disabled',
        'game_done',
        'final_weak_team_score',
        'final_strong_team_score'
    ];

    public function get_strong_team()
    {
        return $this->belongsTo(Team::class, 'strong_team');
    }

    public function get_weak_team()
    {
        return $this->belongsTo(Team::class, 'weak_team');
    }

    public function votings()
    {
        return $this->hasMany(Voting::class, "game_id");
    }
}
