<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spec', function(Blueprint $table) {
            $table->increments('id');
            $table->string('os', 100);
            $table->string('cpu', 100);
            $table->string('gpu', 100);
            $table->string('ram', 100);
            $table->decimal('hdd', 5, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('spec');
    }
}
