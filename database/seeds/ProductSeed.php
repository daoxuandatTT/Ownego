<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->id = 1;
        $product->name = "Royal Milk Tea";
        $product->price = "4.8";
        $product->toppings = "Milk foam,white pearl";
        $product->save();

        $product = new Product();
        $product->id = 2;
        $product->name = "Green Milk Tea";
        $product->price = "4.6";
        $product->toppings = "pearl";
        $product->save();

        $product = new Product();
        $product->id = 3;
        $product->name = "Oolong Milk Tea";
        $product->price = "5,1";
        $product->toppings = "Pearl, milk foam";
        $product->save();

        $product = new Product();
        $product->id = 4;
        $product->name = "Blueberry Milk Tea";
        $product->price = "5.1";
        $product->toppings = "Pearl, milk foam";
        $product->save();

        $product = new Product();
        $product->id = 5;
        $product->name = "Mango Milk Tea";
        $product->price = "5.1";
        $product->toppings = "Aloe, Pearl";
        $product->save();
    }
}
