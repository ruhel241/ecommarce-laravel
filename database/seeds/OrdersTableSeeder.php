<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

        $data = [
            [
                'user_id'     =>  '1',
                'total'   	  =>  '5000',
                'delivered'   =>  '1',
            ],
        ];

        foreach($data as $data)
        {
           Order::forceCreate($data);
        }


    }
}
