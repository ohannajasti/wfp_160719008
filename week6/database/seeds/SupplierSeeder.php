<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'nama' => 'Toko Pudding Jaya',
            'address' => 'Jl. Permata Sari 27'
        ]);

        DB::table('suppliers')->insert([
            'nama' => 'Toko Roti Tori',
            'address' => 'Jl. Tori 23'
        ]);
    }
}
