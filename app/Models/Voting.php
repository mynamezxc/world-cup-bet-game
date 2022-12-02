<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    use HasFactory;
    
    protected $table = 'voting';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'player_id',
        'game_id',
        'vote_type',
        'vote_value',
        'vote_done',
        'use_lucky_star'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }
}
