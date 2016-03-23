<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:04
 */

use Illuminate\Database\Seeder;

class PlatformTableSeeder extends Seeder {

    public function run()
    {
        DB::table('platform')->delete();

        DB::table('platform')->insert([
            'id' => 1,
            'name' => 'Steam'
        ]);

    }
}