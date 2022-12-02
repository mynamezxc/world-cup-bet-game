<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voting', function (Blueprint $table) {
            $table->id();
            $table->integer("player_id");
            $table->integer("game_id");
            $table->string("vote_type")->default("deviant");
            $table->string("vote_value")->default("no_vote");
            $table->boolean("vote_done")->default(0); // Đã đá xong trận vote
            $table->boolean("use_lucky_star")->default(false);
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
        Schema::dropIfExists('voting');
    }
}
