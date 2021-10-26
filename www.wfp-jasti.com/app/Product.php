<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //--Set Requirement Table--
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    //--Set Fillable Attribute--
    protected $fillable = [
        'name', 'product_price', 'product_price_sell', 'stock',
    ];

    //--Set Relation
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function suppliers()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'product_transaction', 'product_id', 'transaction_id');
    }
    
}
