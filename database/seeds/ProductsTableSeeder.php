<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
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
        		'title' => 'Lava Grand 2 - Smartphone - 5.5" - 16GB ROM - 3GB RAM - 13MP Camera - White',
                'description' => '<p><strong>&nbsp;Key Features:</strong></p>
				<p>5.5" HD IPS Screen</p>
				<p>1.3GHz Quad-core, 64Bit</p>
				<p>Memory: 16GB ROM + 3GB RAM</p>
				<p>Camera: 8.0MP FF Front and 13.0MP AF Rear Camera</p>
				<p>OS: V5.1</p>
				<p>Network: GSM: 850/900/1800/1900MHz</p>',
				'product_img' => '1.jpg',
				'price' => '2500',
        		'quantity' => '200',
        		'category_id' => '1',
        		'user_id' => '1',
			],
			[
        		'title' => 'Nokia - Smartphone - 5.5" - 16GB ROM - 3GB RAM - 13MP Camera - White',
                'description' => '<p><strong>&nbsp;Key Features:</strong></p>
				<p>5.5" HD IPS Screen</p>
				<p>1.3GHz Quad-core, 64Bit</p>
				<p>Memory: 16GB ROM + 3GB RAM</p>
				<p>Camera: 8.0MP FF Front and 13.0MP AF Rear Camera</p>
				<p>OS: V5.1</p>
				<p>Network: GSM: 850/900/1800/1900MHz</p>',
				'product_img' => '1510821597Nokia 100.jpg',
				'price' => '1200',
        		'quantity' => '400',
        		'category_id' => '2',
        		'user_id' => '1',
			],
			[
        		'title' => 'Lava Grand 3 - Smartphone - 5.5" - 16GB ROM - 3GB RAM - 13MP Camera - White',
                'description' => '<p><strong>&nbsp;Key Features:</strong></p>
				<p>5.5" HD IPS Screen</p>
				<p>1.3GHz Quad-core, 64Bit</p>
				<p>Memory: 16GB ROM + 3GB RAM</p>
				<p>Camera: 8.0MP FF Front and 13.0MP AF Rear Camera</p>
				<p>OS: V5.1</p>
				<p>Network: GSM: 850/900/1800/1900MHz</p>',
				'product_img' => 'item_XL_22476020_33252875.jpg',
				'price' => '15000',
        		'quantity' => '200',
        		'category_id' => '3',
        		'user_id' => '1',
			],
			[
        		'title' => 'Samsung - Smartphone - 5.5" - 16GB ROM - 3GB RAM - 13MP Camera - White',
                'description' => '<p><strong>&nbsp;Key Features:</strong></p>
				<p>5.5" HD IPS Screen</p>
				<p>1.3GHz Quad-core, 64Bit</p>
				<p>Memory: 16GB ROM + 3GB RAM</p>
				<p>Camera: 8.0MP FF Front and 13.0MP AF Rear Camera</p>
				<p>OS: V5.1</p>
				<p>Network: GSM: 850/900/1800/1900MHz</p>',
				'product_img' => '151177585010.jpg',
				'price' => '20000',
        		'quantity' => '200',
        		'category_id' => '2',
        		'user_id' => '1',
			],
			[
        		'title' => 'Lava Grand 3 - Smartphone - 5.5" - 16GB ROM - 3GB RAM - 13MP Camera - White',
                'description' => '<p><strong>&nbsp;Key Features:</strong></p>
				<p>5.5" HD IPS Screen</p>
				<p>1.3GHz Quad-core, 64Bit</p>
				<p>Memory: 16GB ROM + 3GB RAM</p>
				<p>Camera: 8.0MP FF Front and 13.0MP AF Rear Camera</p>
				<p>OS: V5.1</p>
				<p>Network: GSM: 850/900/1800/1900MHz</p>',
				'product_img' => 'item_XL_22476020_33252875.jpg',
				'price' => '15000',
        		'quantity' => '200',
        		'category_id' => '3',
        		'user_id' => '1',
			],
			[
        		'title' => 'Symphony - Smartphone - 5.5" - 16GB ROM - 3GB RAM - 13MP Camera - White',
                'description' => '<p><strong>&nbsp;Key Features:</strong></p>
				<p>5.5" HD IPS Screen</p>
				<p>1.3GHz Quad-core, 64Bit</p>
				<p>Memory: 16GB ROM + 3GB RAM</p>
				<p>Camera: 8.0MP FF Front and 13.0MP AF Rear Camera</p>
				<p>OS: V5.1</p>
				<p>Network: GSM: 850/900/1800/1900MHz</p>',
				'product_img' => '1511776898jpg.jpg',
				'price' => '25000',
        		'quantity' => '200',
        		'category_id' => '3',
        		'user_id' => '1',
        	]
 		]; 

        foreach ($data as $data) {
        	Product::forceCreate($data); 
        }



    }
}
