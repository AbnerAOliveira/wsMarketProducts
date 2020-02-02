<?php

use Illuminate\Database\Seeder;
use App\Models\OrderProducts;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderProducts::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 1
        ]);
        OrderProducts::create([
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 1
        ]);
    }
}
