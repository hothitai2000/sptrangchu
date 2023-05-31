<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_products extends Model
{
    use HasFactory;
    protected $table="type_products";//call ten bang

    public function products(){
        return $this->hasMany('App\product');//nawmf trong thuw mucj app 
    }

    
}

