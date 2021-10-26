<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function transactions(){
        return $this->hasMany('App\Transaction','transaction_id','id');
    }
}
