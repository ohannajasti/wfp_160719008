<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    public function category()
    {
                            // model Category   nama field di products
        return $this->belongsTo('App\Category', 'category_id');
    }

    public static function get_data_donut()
    {
        $data_donut = Product::where('nama_produk', 'Donat upS0SNqGmZ')->get();

        return $data_donut;
    }
}
