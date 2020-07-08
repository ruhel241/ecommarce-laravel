<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressTableSeeder extends Seeder
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
                'name' 		=> 'Admin',
                'email'  	=> 'admin@gmail.com',
                'mobile' 	=> '01546825450',
               	'address'	=> 'USA',
                'user_id'   =>  '1',
            ]
        ];

        foreach($data as $data)
        {
           Address::forceCreate($data);
        }
    }
}
