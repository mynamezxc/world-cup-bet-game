<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->integer("player_id");
            $table->integer("game_id");
            $table->integer("vote_id")->default(null);
            $table->boolean("use_lucky_star")->default(false);
            $table->integer("add_score")->default(-1);
            $table->string("status")->default("no_vote"); // no_vote, win, draw, loss
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
        Schema::dropIfExists('history');
    }
}
