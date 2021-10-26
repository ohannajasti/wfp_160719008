<?php

use Illuminate\Database\Seeder;

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
            'customer_id' => 3,
            'user_id' => 1,
            'transaction_date'=>'2020/07/10'
        ]);
        DB::table('transactions')->insert([
            'customer_id' => 1,
            'user_id' => 2,
            'transaction_date'=>'2020/07/10'
        ]);
        DB::table('transactions')->insert([
            'customer_id' => 2,
            'user_id' => 1,
            'transaction_date'=>'2020/07/10'
        ]);
        DB::table('transactions')->insert([
            'customer_id' => 1,
            'user_id' => 2,
            'transaction_date'=>'2020/07/10',
        ]);
    }
}
