<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //--Set Requirement Table--
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    //--Set Fillable Attribute--
    protected $fillable = [
        'name'
    ];

    //--Set Relation
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
