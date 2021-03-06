<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'id' => 1,
            'customer_id' => 1,
            'user_id' => 1,
            'date' => Carbon::now(),
        ]);
        DB::table('transactions')->insert([
            'id' => 2,
            'customer_id' => 2,
            'user_id' => 2,
            'date' => Carbon::now(),
        ]);
        DB::table('transactions')->insert([
            'id' => 3,
            'customer_id' => 3,
            'user_id' => 3,
            'date' => Carbon::now(),
        ]);

        DB::table('product_transaction')->insert([
            'product_id' => 1,
            'transaction_id' => 1,
            'quantity' => 5,
            'price' => 50000,
        ]);
        
        DB::table('product_transaction')->insert([
            'product_id' => 2,
            'transaction_id' => 1,
            'quantity' => 4,
            'price' => 48000,
        ]);

        DB::table('product_transaction')->insert([
            'product_id' => 1,
            'transaction_id' => 2,
            'quantity' => 3,
            'price' => 30000,
        ]);

        DB::table('product_transaction')->insert([
            'product_id' => 3,
            'transaction_id' => 3,
            'quantity' => 1,
            'price' => 14000,
        ]);
    }
}
