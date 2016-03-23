<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:07
 */

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('language')->delete();

        DB::table('language')->insert([
            'id' => 1,
            'name' => 'Français'
        ]);

    }
}