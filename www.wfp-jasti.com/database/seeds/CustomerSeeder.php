<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            'id' => 1,
            'name' => "Mustofa",
            'address' => "Jalan. M ".Str::random(10),
        ]);
        DB::table('customers')->insert([
            'id' => 2,
            'name' => "Kenji",
            'address' => "Jalan. K ".Str::random(10),
        ]);
        DB::table('customers')->insert([
            'id' => 3,
            'name' => "Tan Tan",
            'address' => "Jalan. T ".Str::random(10),
        ]);
    }
}
