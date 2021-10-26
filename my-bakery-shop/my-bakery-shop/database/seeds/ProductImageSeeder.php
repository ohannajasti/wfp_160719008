<?php

use Illuminate\Database\Seeder;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$products = DB::table('products')->get();
    	foreach ($products as $r) {
	        DB::table('products')
	        	->where('id', $r->id)
	        	->update([
	            'image' => $r->id.'.jpg'
	        ]);
    	}
    }
}
