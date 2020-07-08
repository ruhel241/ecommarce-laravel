<?php

use Illuminate\Database\Seeder;
use App\User;  

class UserTableSeeder1 extends Seeder
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
                'name'     => 'Admin',
                'email'    => 'admin@gmail.com',
                'mobile'   => '01546825450',
               	'password' => '$2y$10$1MYHLVV6q.BJNRO5QNvfBOS8cXuDVEakJebP4BL4qS3AO09/ZrQd.',
                'admin'    =>  '1',
            ]
        ];

        foreach($data as $data)
        {
           User::forceCreate($data);
        }
    }
}
