<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start');
            $table->integer('strong_team');
            $table->integer('weak_team');
            $table->integer('strong_team_score')->default(0);
            $table->integer('weak_team_score')->default(0);
            $table->float('deviant')->default(0);
            $table->float('over_under')->default(0);
            $table->boolean('game_done')->default(false);
            $table->boolean('disabled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
