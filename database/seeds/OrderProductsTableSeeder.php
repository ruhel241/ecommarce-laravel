<?php

use Illuminate\Database\Seeder;
use App\Order_Product;

class OrderProductsTableSeeder extends Seeder
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
                
                'product_id'   =>  '1',
                'order_id'     =>  '1',
                'qty'   	     =>  '5',
                'total'   	   =>  '12000',
            ]
        ];

        foreach($data as $data)
        {
           Order_Product::forceCreate($data);
        }


    }
}
