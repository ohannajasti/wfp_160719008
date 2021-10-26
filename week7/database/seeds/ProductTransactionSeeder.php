<?php

use Illuminate\Database\Seeder;

class ProductTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_transaction')->insert([
            'product_id' => 1,
            'transaction_id' => 1,
            'quantity'=>1,
            'harga_produk'=>5000
        ]);
        DB::table('product_transaction')->insert([
            'product_id' => 2,
            'transaction_id' => 1,
            'quantity'=>1,
            'harga_produk'=> 4000,
        ]);
        DB::table('product_transaction')->insert([
            'product_id' => 1,
            'transaction_id' => 2,
            'quantity'=>1,
            'harga_produk'=>5000
        ]);
        DB::table('product_transaction')->insert([
            'product_id' => 3,
            'transaction_id' => 3,
            'quantity'=>14,
            'harga_produk'=>6000
        ]);
    }
}
