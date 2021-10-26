<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // nama tabel bukan Categories
    protected $table = "categories"; 
    
    public function products()
    {
                // model Product   nama field di products
        return $this->hasMany('App\Product', 'category_id', 'id');
    }
}
