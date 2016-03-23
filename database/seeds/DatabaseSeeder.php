<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->call('StudioTableSeeder');
        $this->call('PlatformTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('LanguageTableSeeder');
        $this->call('SpecTableSeeder');
        $this->call('GameTableSeeder');
    }
}
