<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $table = "shop_products";

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function stores(){
        return $this->hasMany('App\Store');
    }

}
