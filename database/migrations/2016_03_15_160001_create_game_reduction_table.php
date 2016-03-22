<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameReductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_reduction', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('reduction_id')->unsigned();
            $table->integer('game_id')->unsigned();

            $table->foreign('reduction_id')->references('id')->on('reduction')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('game_id')->references('id')->on('game')
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
        Schema::table('game_reduction', function(Blueprint $table) {
            $table->dropForeign('game_reduction_reduction_id_foreign');
            $table->dropForeign('game_reduction_game_id_foreign');
        });

        Schema::drop('game_reduction');
    }
}
