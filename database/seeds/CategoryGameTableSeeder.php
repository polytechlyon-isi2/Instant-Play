<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:19
 */

use Illuminate\Database\Seeder;

class CategoryGameTableSeeder extends Seeder {

    public function run()
    {
        DB::table('category_game')->delete();

        DB::table('category_game')->insert([
            'id' => 1,
            'category_id' => 1,
            'game_id' => 1
        ]);

        DB::table('category_game')->insert([
            'id' => 2,
            'category_id' => 2,
            'game_id' => 2
        ]);

    }
}