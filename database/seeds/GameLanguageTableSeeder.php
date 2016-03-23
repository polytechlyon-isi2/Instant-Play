<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:23
 */

use Illuminate\Database\Seeder;

class GameLanguageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('game_language')->delete();

        DB::table('game_language')->insert([
            'id' => 1,
            'language_id' => 1,
            'game_id' => 1
        ]);

        DB::table('game_language')->insert([
            'id' => 2,
            'language_id' => 2,
            'game_id' => 2
        ]);

    }
}