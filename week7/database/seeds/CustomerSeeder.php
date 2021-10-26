<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'nama' => 'Ana',
            'alamat' => 'ana@gmail.com',
        ]);
        DB::table('customers')->insert([
            'nama' => 'Baba',
            'alamat' => 'baba@gmail.com',
        ]);
        DB::table('customers')->insert([
            'nama' => 'Caca',
            'alamat' => 'caca@gmail.com',
        ]);
        DB::table('customers')->insert([
            'nama' => 'Dasa',
            'alamat' => 'dasaa@gmail.com',
        ]);
    }
}
