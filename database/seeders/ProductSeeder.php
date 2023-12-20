<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Lipstick 1', 'slug'=>'lipstick-1', 'category_id'=> '3', 'price'=> '12.99', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/lip1.jpg'],
            ['name' => 'Lipstick 2', 'slug'=>'lipstick-2', 'category_id'=> '3', 'price'=> '12.99', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/lip2.jpg'],
            ['name' => 'Lipstick 3', 'slug'=>'lipstick-3', 'category_id'=> '3', 'price'=> '12.99', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/lip3.jpg'],
            ['name' => 'Cushion 1', 'slug'=>'cushion-1', 'category_id'=> '2', 'price'=> '10.00', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/cushion1.jpg'],
            ['name' => 'Cushion 2', 'slug'=>'cushion-2', 'category_id'=> '2', 'price'=> '10.00', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/cushion2.jpg'],
            ['name' => 'Cushion 3', 'slug'=>'cushion-3', 'category_id'=> '2', 'price'=> '10.00', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/cushion3.jpg'],
            ['name' => 'Eyeshadow 1', 'slug'=>'eyeshadow-1', 'category_id'=> '1', 'price'=> '11.00', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/eyeshadow-1.jpeg'],
            ['name' => 'Eyeshadow 2', 'slug'=>'eyeshadow-2', 'category_id'=> '1', 'price'=> '11.00', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/eyeshadow-2.jpeg'],
            ['name' => 'Eyeshadow 3', 'slug'=>'eyeshadow-3', 'category_id'=> '1', 'price'=> '11.00', 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit voluptates reprehenderit cum enim veniam ad! Et dolore suscipit repudiandae labore.', 'image'=> 'products-images/eyeshadow-3.jpg'],
        ];
        DB::table('products')->insert($data);        
    }
}
