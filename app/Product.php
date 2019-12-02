<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function ShopProduct()
    {
        return $this->belongsTo('App\ShopProduct');
    }

}
