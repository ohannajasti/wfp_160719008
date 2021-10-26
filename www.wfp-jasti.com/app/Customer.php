<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //--Set Requirement Table--
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    //--Set Fillable Attribute--
    protected $fillable = [
        'name', 'address'
    ];

    //--Set Relation
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}
