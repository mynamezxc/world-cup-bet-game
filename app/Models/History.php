<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = 'history';
    protected $fillable = [
        'player_id',
        'game_id',
        'vote_id',
        'add_score',
        'use_lucky_star',
        'status'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function vote()
    {
        return $this->belongsTo(Voting::class, 'vote_id');
    }

}
