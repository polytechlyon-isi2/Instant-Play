<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_language', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('language_id')->unsigned();
            $table->integer('game_id')->unsigned();

            $table->foreign('language_id')->references('id')->on('language')
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
        Schema::table('game_language', function(Blueprint $table) {
            $table->dropForeign('game_language_language_id_foreign');
            $table->dropForeign('game_language_game_id_foreign');
        });

        Schema::drop('game_language');
    }
}
