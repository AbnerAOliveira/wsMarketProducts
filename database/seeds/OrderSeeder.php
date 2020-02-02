<?php

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'customer_id' => 1,
            'pay_method' => 'Card',
            'price_total' => 2.98
        ]);
        Order::create([
            'customer_id' => 2,
            'pay_method' => 'Cash',
            'price_total' => 5.75
        ]);
    }
}
