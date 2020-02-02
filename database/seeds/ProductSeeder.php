<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
           'name' => 'Chicken',
            'price' => 2.98
        ]);
        Product::create([
            'name' => 'Beef',
            'price' => 5.75
        ]);
    }
}
