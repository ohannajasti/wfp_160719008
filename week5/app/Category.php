<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
        return $this->hasMany('App\Product','category_id','id');
        //fl default : table_id; 
        //localkey -> id; harus didekalarasikan localkey nya karena ada kemungkinan format id beda2
    }
}
