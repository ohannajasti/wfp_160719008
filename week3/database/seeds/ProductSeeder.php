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
            'nama_produk' => 'Roti Tawar',
            'harga_produk'=> 10000,
            'harga_jual'=>12000,
            'stok'=>'50',
            'category_id'=>1,
            'supplier_id'=>1
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Roti Sosis',
            'harga_produk'=> 7000,
            'harga_jual'=>10000,
            'stok'=>'25',
            'category_id'=>1,
            'supplier_id'=>1
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Roti Tawar',
            'harga_produk'=> 10000,
            'harga_jual'=>12000,
            'stok'=>'20',
            'category_id'=>1,
            'supplier_id'=>1
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Pannacota',
            'harga_produk'=> 20000,
            'harga_jual'=>25000,
            'stok'=>'10',
            'category_id'=>2,
            'supplier_id'=>2
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Pudding Fla',
            'harga_produk'=> 10000,
            'harga_jual'=>15000,
            'stok'=>'5',
            'category_id'=>2,
            'supplier_id'=>2
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Pudding Mix Buah',
            'harga_produk'=> 12000,
            'harga_jual'=>20000,
            'stok'=>'9',
            'category_id'=>2,
            'supplier_id'=>2
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Cheese Cake',
            'harga_produk'=> 25000,
            'harga_jual'=>30000,
            'stok'=>'5',
            'category_id'=>3,
            'supplier_id'=>1
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Strawberry Cake',
            'harga_produk'=> 28000,
            'harga_jual'=>20000,
            'stok'=>'3',
            'category_id'=>3,
            'supplier_id'=>2
        ]);

        DB::table('products')->insert([
            'nama_produk' => 'Lava Cake',
            'harga_produk'=> 20000,
            'harga_jual'=>23000,
            'stok'=>'8',
            'category_id'=>3,
            'supplier_id'=>1
        ]);
    }
}
