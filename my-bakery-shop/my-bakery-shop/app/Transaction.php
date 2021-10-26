<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user() {
        // user = kasir
        return $this->belongsTo('App\User', 'user_id');
    }
    public function customer() {
        return $this->belongsTo('App\Customer', 'customer_id');
    }
    public function product() {
        return $this->belongsToMany('App\Product'
                                , 'product_transaction'
                                , 'transaction_id'
                                , 'product_id')->withPivot('quantity', 'harga_produk');
    }
}
