<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:06
 */

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('category')->delete();

        DB::table('category')->insert([
            'id' => 1,
            'name' => 'RPG'
        ]);

        DB::table('category')->insert([
            'id' => 2,
            'name' => 'FPS'
        ]);

    }
}