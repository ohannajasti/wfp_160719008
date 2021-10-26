<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //--Set Requirement Table--
    protected $table = 'transactions';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $dateFormat = 'U';

    //--Set Fillable Attribute--
    protected $fillable = [
        'customer_id', 'user_id', 'transaction_date',
    ];

    //--Set Relations
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_transaction', 'transaction_id', 'product_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
