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
        'name', 'price_production', 'price_sell','filename', 'stock','category_id','supplier_id'
    ];

    //--Set Relation
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'product_transaction', 'product_id', 'transaction_id');
    }
    
}
