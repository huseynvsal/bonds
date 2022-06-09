<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = [
            [
                'bond_id'=> 1,
                'order_date'=> '2021-11-23',
                'bonds_quantity'=> 10,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'bond_id'=> 2,
                'order_date'=> '2021-11-23',
                'bonds_quantity'=> 10,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ],
            [
                'bond_id'=> 3,
                'order_date'=> '2021-11-23',
                'bonds_quantity'=> 10,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]
        ];

        Order::insert($orders);
    }
}
