<?php

use App\ShopProduct;
use Illuminate\Database\Seeder;

class ShopProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopProduct = new ShopProduct();
        $shopProduct->id = 1;
        $shopProduct->storeId = 1;
        $shopProduct->productId = 1;
        $shopProduct->save();

        $shopProduct = new ShopProduct();
        $shopProduct->id = 2;
        $shopProduct->storeId = 1;
        $shopProduct->productId = 2;
        $shopProduct->save();

        $shopProduct = new ShopProduct();
        $shopProduct->id = 3;
        $shopProduct->storeId = 2;
        $shopProduct->productId = 2;
        $shopProduct->save();

        $shopProduct = new ShopProduct();
        $shopProduct->id = 4;
        $shopProduct->storeId = 1;
        $shopProduct->productId = 3;
        $shopProduct->save();

        $shopProduct = new ShopProduct();
        $shopProduct->id = 5;
        $shopProduct->storeId = 3;
        $shopProduct->productId = 3;

        $shopProduct = new ShopProduct();
        $shopProduct->id = 6;
        $shopProduct->storeId = 1;
        $shopProduct->productId = 1;
        $shopProduct->save();

        $shopProduct = new ShopProduct();
        $shopProduct->id = 7;
        $shopProduct->storeId = 3;
        $shopProduct->productId = 1;
        $shopProduct->save();

        $shopProduct = new ShopProduct();
        $shopProduct->id = 8;
        $shopProduct->storeId = 3;
        $shopProduct->productId = 5;
        $shopProduct->save();

        $shopProduct = new ShopProduct();
        $shopProduct->id = 9;
        $shopProduct->storeId = 1;
        $shopProduct->productId = 4;
        $shopProduct->save();

        $shopProduct = new ShopProduct();
        $shopProduct->id = 10;
        $shopProduct->shtoreId = 2;
        $shopProduct->productId = 5;
        $shopProduct->save();

    }
}
