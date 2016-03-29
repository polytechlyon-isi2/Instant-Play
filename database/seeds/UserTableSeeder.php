<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 29/03/2016
 * Time: 15:27
 */

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin123',
            'email' => 'admin123',
            'password' => bcrypt('admin123'),
            'remember_token' => NULL,
            'created_at' => time(),
            'updated_at' => time()
        ]);

    }
}