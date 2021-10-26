<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'nama_kategori' => 'Donut'
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'nama_kategori' => 'Roti'
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'nama_kategori' => 'Kue'
        ]);
    }
}
