<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'tony',
            'email' => 'tony@agileb.it',
            'password' => 'abc.xyz',
            'api_token' => '1234567890',
        ]);
    }
}
