<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->unique();

            // game
            $table->integer('game_id')->unsigned();
            $table->foreign('game_id')
                ->references('id')
                ->on('game')
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
        Schema::table('photo', function(Blueprint $table) {
            $table->dropForeign('photo_game_id_foreign');
        });
        Schema::drop('photo');
    }
}
