<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('manga')->insert([
                'title' => $faker->text(20), 
                'introduce' => rand(10, 50), 
                'price' => rand(100000, 500000),  
                'sold' => rand(10,50), 
                'image_url' => $faker->imageUrl(), // Tạo URL hình ảnh ngẫu nhiên
                'category_id' => rand(1,5),
            ]);
        }
    }
}
