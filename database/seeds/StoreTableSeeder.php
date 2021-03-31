<?php

use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Store::class, 40)->create();

        $stores = Store::all();



        foreach($stores as $store)
        {
            $store->products()->save(factory(Product::class)->make());

        }
    }
}
