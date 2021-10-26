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
            'id' => 1,
            'name' => "BojoSup",
            'address' => "Jalan Bojo no 17, Surabaya.",
        ]);
        DB::table('suppliers')->insert([
            'id' => 2,
            'name' => "KokSup",
            'address' => "Jalan Kok no 17, Surabaya..",
        ]);
        DB::table('suppliers')->insert([
            'id' => 3,
            'name' => "SitompulSup",
            'address' => "Jalan Nana no 17, Surabaya.",
        ]);
    }
}
