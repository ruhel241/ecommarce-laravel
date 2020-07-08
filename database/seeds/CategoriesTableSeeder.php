<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
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
				'title' => 'Nokia',
        	],

        	[
				'title' => 'Samsung',
        	],

        	[
				'title' => 'Symphony',
        	],

        ];

        foreach ($data as $data) {
        	Category::forceCreate($data);
        }


    }
}

