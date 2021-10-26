<?php

use Illuminate\Database\Seeder;

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
            'id' => 10,
            'nama_produk' => 'Donat Gula',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 1,
            'supplier_id' => 1,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); 
        DB::table('products')->insert([
            'id' => 11,
            'nama_produk' => 'Donat Kentang',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 1,
            'supplier_id' => 1,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); 
        DB::table('products')->insert([
            'id' => 12,
            'nama_produk' => 'Donat Meses',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 1,
            'supplier_id' => 1,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); 


        DB::table('products')->insert([
            'id' => 13,
            'nama_produk' => 'Roti Selai Kacang',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 2,
            'supplier_id' => 2,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); 
        DB::table('products')->insert([
            'id' => 14,
            'nama_produk' => 'Roti Keju',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 2,
            'supplier_id' => 2,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
        DB::table('products')->insert([
            'id' => 15,
            'nama_produk' => 'Roti Sosis',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 2,
            'supplier_id' => 2,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); 

        DB::table('products')->insert([
            'id' => 16,
            'nama_produk' => 'Kue Spikoe',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 3,
            'supplier_id' => 3,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); 
        DB::table('products')->insert([
            'id' => 17,
            'nama_produk' => 'Kue Cucur',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 3,
            'supplier_id' => 3,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); 
        DB::table('products')->insert([
            'id' => 18,
            'nama_produk' => 'Kue Brownies',
            'stok' => rand(10,100),
            'harga_jual' => rand(6000,9999),
            'harga_produksi' => rand(1000,5000),
            'category_id' => 3,
            'supplier_id' => 3,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]); 

         
    }
}
