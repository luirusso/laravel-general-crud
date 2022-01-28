<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('products-data');

        foreach ($products as $product) {
            $new_product = new Product();

            $new_product->title = $product['title'];
            $new_product->slug = Str::slug($new_product->title, '-');
            $new_product->description = $product['description'];
            $new_product->thumb = $product['thumb'];
            $new_product->price = $product['price'];

            $new_product->save();
        }
    }
}
