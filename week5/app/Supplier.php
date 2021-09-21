<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function products(){
        return $this->hasMany('App/Product','product_id','id');
    }
}
