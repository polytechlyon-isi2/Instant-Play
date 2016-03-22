<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_game', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('game_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')
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
        Schema::table('category_game', function(Blueprint $table) {
            $table->dropForeign('category_game_category_id_foreign');
            $table->dropForeign('category_game_game_id_foreign');
        });

        Schema::drop('category_game');
    }
}
