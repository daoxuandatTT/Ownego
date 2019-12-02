<?php

use App\Store;
use Illuminate\Database\Seeder;

class   StoreSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = new Store();
        $store->id = 1;
        $store->name = "Ding Tea";
        $store->save();

        $store = new Store();
        $store->id = 2;
        $store->name = "Tocotoco";
        $store->save();

        $store = new Store();
        $store->id = 3;
        $store->name = "Gongcha";
        $store->save();

        $store = new Store();
        $store->id = 4;
        $store->name = "LeeTea";
        $store->save();
    }
}
