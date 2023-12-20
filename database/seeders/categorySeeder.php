<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Eye Shadow', 'slug'=>'eye-shadow', 'description' => 'Mata Menawan', 'image' => 'categories-images/blush.png'],
            ['name' => 'Cushion', 'slug'=>'cushion', 'description' => 'Kulit Glowing', 'image' => 'categories-images/powder.png'],
            ['name' => 'Lipstick', 'slug'=>'lipstick', 'description' => 'Bibir Berwarna', 'image' => 'categories-images/lipstick.png'],
        ];
        DB::table('categories')->insert($data); 
    }
}
