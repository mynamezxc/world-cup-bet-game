<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Game;
// use App\Http\Controllers\;
use App\Http\Controllers\Player;
use App\Http\Controllers\Voting;
use App\Http\Controllers\History;
use App\Http\Controllers\GameManager as GameManager;
use App\Http\Controllers\TeamManager as TeamManager;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/init', [Home::class, 'init']);
Route::match(['get', 'post'], '/', [Home::class, 'index']);
Route::get('/game/{id}', [Home::class, 'game'])->whereNumber('id');

Route::post('/vote', [GameManager::class, 'vote']);
Route::post('/create-match', [GameManager::class, 'create_match']);
Route::post('/remove-match', [GameManager::class, 'remove_match']);

Route::post('/update-game', [GameManager::class, 'update']);
Route::post('/disable-game', [GameManager::class, 'disable']);
Route::post('/enable-game', [GameManager::class, 'enable']);
Route::post('/remove-team', [TeamManager::class, 'remove_team']);
Route::post('/vote-winner', [Home::class, 'vote_winner']);

Route::resources([
    'game' => Game::class,
    'player' => Player::class,
    'voting' => Voting::class,
    'history' => History::class,
]);