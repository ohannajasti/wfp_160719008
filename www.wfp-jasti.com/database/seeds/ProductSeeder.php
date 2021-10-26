<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'name' => 'Roti Tawar',
            'price_production' => 8000,
            'price_sell' => 10000,
            'stock'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
            'filename' => "rotitawar.png",
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'name' => 'Roti Gandum',
            'price_production' => 12000,
            'price_sell' => 8000,
            'stock'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
            'filename' => "rotigandum.png",
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'name' => 'Roti Coklat',
            'price_production' => 14000,
            'price_sell' => 8000,
            'stock'=> 50,
            'category_id' => 1,
            'supplier_id' => 1,
            'filename' => "roticoklat.png",
        ]);

        // Pudding

        DB::table('products')->insert([
            'id' => 4,
            'name' => 'Pudding Pannacotta',
            'price_production' => 15000,
            'price_sell' => 8000,
            'stock'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
            'filename' => "puddingpannacotta.png",
        ]);


        DB::table('products')->insert([
            'id' => 5,
            'name' => 'Pudding Fla',
            'price_production' => 10000,
            'price_sell' => 8000,
            'stock'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
            'filename' => "puddingfla.png",
        ]);

        DB::table('products')->insert([
            'id' => 6,
            'name' => 'Pudding Buah',
            'price_production' => 10000,
            'price_sell' => 8000,
            'stock'=> 50,
            'category_id' => 2,
            'supplier_id' => 2,
            'filename' => "puddingbuah.png",
        ]);

        // Sup
        
        DB::table('products')->insert([
            'id' => 7,
            'name' => 'Strawberry Cake',
            'price_production' => 20000,
            'price_sell' => 8000,
            'stock'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
            'filename' => "strawberrycake.png",
        ]);

        DB::table('products')->insert([
            'id' => 8,
            'name' => 'Cheese Cake',
            'price_production' => 10000,
            'price_sell' => 8000,
            'stock'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
            'filename' => "cheesecake.png",
        ]);

        DB::table('products')->insert([
            'id' => 9,
            'name' => 'Black Forest',
            'price_production' => 18000,
            'price_sell' => 8000,
            'stock'=> 50,
            'category_id' => 3,
            'supplier_id' => 3,
            'filename' => "blackforest.png",
        ]);
    }
}
