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
            $table->unsignedBigInteger('user_id')->comment('user id');
            $table->char('type', 16)->comment('game type');
            $table->string('player1_name')->nullable()->comment('player1 name');
            $table->string('player2_name')->nullable()->comment('player2 name');
            $table->integer('player1_point')->default(0)->comment('player1 point');
            $table->integer('player2_point')->default(0)->comment('player2 point');
            $table->string('player1_grand_strategy')->nullable()->comment('player1 Grand Strategy');
            $table->string('player2_grand_strategy')->nullable()->comment('player2 Grand Strategy');

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
