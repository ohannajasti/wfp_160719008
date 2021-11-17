<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => "Nana U",
            'role' => 'owner',
            'email' => 'nana@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        DB::table('users')->insert([
            'id' => 2,
            'name' => "Mena U",
            'role' => 'staff',
            'email' => 'mena@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => "Felia U",
            'role' => 'staff',
            'email' => 'felia@gmail.com',
            'password' => Hash::make('password'),
        ]);

    }
}
