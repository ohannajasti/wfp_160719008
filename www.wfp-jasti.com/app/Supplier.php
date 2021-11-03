<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //--Set Requirement Table--
    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    //--Set Fillable Attribute--
    protected $fillable = [
        'name', 'address'
    ];

    //--Set Relation
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
