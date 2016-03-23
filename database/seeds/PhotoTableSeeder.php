<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:23
 */

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder {

    public function run()
    {
        DB::table('photo')->delete();

        DB::table('photo')->insert([
            'id' => 1,
            'name' => 'DarkSouls2_photo1.jpg',
            'game_id' => 1
        ]);

        DB::table('photo')->insert([
            'id' => 2,
            'name' => 'Battlefield3.jpg',
            'game_id' => 2
        ]);

    }
}