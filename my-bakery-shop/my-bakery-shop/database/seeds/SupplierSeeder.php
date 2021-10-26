<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Khongguan',
            'address' => 'Rungkut'
        ]);
        DB::table('suppliers')->insert([
            'id' => 2,
            'name' => 'Sams',
            'address' => 'Pucang'
        ]);
        DB::table('suppliers')->insert([
            'id' => 3,
            'name' => 'Kampoeng Roti',
            'address' => 'Wiyung'
        ]);
    }
}
