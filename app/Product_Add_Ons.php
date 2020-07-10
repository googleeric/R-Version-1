<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Add_Ons extends Model
{
    protected $table='product_add_ons';
    public $primaryKey = 'id';
    public $timestamp = true;

    public function products(){
        return $this->hasMany('App\Product','product_id');
    }

}
