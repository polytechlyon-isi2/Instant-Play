<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->date('release_date');
            $table->decimal('price', 5, 2);
            $table->integer('stock');
            $table->longText('description');

            // platform
            $table->integer('platform_id')->unsigned();
            $table->foreign('platform_id')
                ->references('id')
                ->on('platform')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            // studio
            $table->integer('studio_id')->unsigned();
            $table->foreign('studio_id')
                ->references('id')
                ->on('studio')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            // video
            $table->integer('video_id')->unsigned();
            $table->foreign('video_id')
                ->references('id')
                ->on('video')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            // spec
            $table->integer('spec_id')->unsigned();
            $table->foreign('spec_id')
                ->references('id')
                ->on('spec')
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
        Schema::table('game', function(Blueprint $table) {
            $table->dropForeign('game_platform_id_foreign');
            $table->dropForeign('game_studio_id_foreign');
            $table->dropForeign('game_video_id_foreign');
            $table->dropForeign('game_spec_id_foreign');
        });
        Schema::drop('game');
    }
}
