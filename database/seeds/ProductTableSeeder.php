<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://bit.ly/2JklgO0',
            'name' => 'Pasta',
            'description' => 'Heel lekker',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://bit.ly/2JklgO0',
            'name' => 'Pasta',
            'description' => 'Heel lekker',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://bit.ly/2JklgO0',
            'name' => 'Pasta',
            'description' => 'Heel lekker',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://bit.ly/2JklgO0',
            'name' => 'Pasta',
            'description' => 'Heel lekker',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://bit.ly/2JklgO0',
            'name' => 'Pasta',
            'description' => 'Heel lekker',
            'price' => 12
        ]);
        $product->save();
    }
}
