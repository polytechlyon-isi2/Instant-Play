<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:02
 */

use Illuminate\Database\Seeder;

class StudioTableSeeder extends Seeder {

    public function run()
    {
        DB::table('studio')->delete();

        DB::table('studio')->insert([
            'id' => 1,
            'name' => 'From Software'
        ]);

       DB::table('studio')->insert([
            'id' => 2,
            'name' => 'Dice'
        ]);

    }
}