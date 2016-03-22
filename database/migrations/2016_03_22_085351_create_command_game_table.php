<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_game', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned();
            $table->integer('command_id')->unsigned();

            $table->foreign('game_id')->references('id')->on('game')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('command_id')->references('id')->on('command')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('command_game', function(Blueprint $table) {
            $table->dropForeign('command_game_game_id_foreign');
            $table->dropForeign('command_game_command_id_foreign');
        });

        Schema::drop('command_game');
    }
}
