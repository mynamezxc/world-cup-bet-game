<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
            $table->id();
            $table->string("key")->default("");
            $table->string("name")->default("");
            $table->integer("score")->default(0);
            $table->boolean("is_manager")->default(false);
            $table->integer("lucky_stars")->default(3);
            $table->integer("team_1st")->default(false);
            $table->integer("team_2nd")->default(false);
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
        Schema::dropIfExists('player');
    }
}
