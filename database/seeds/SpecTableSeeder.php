<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:09
 */

use Illuminate\Database\Seeder;

class SpecTableSeeder extends Seeder {

    public function run()
    {
        DB::table('spec')->delete();


        DB::table('spec')->insert([
            'id' => 1,
            'os' => 'Win 7',
            'cpu' => 'Core i3-2100 3.1GHz / APU A8-3870K Quad-Core',
            'gpu' => 'GeForce GTX 750 / Radeon HD 6870',
            'ram' => '4 GB',
            'hdd' => '14 GB'
        ]);

        DB::table('spec')->insert([
            'id' => 2,
            'os' => 'Win 7 64',
            'cpu' => 'Core i5-4670 3.1GHz / APU A8-3870K Quad-Core',
            'gpu' => 'GeForce GTX 760 / Radeon HD 6870',
            'ram' => '4 GB',
            'hdd' => '20 GB'
        ]);

    }
}