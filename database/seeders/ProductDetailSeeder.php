<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $faker = Faker::create();
        for ($i = 1; $i < 51; $i++) {
            DB::table('product_details')->insert([
                [
                    'product_id' => $i,
                    'price' => rand(1000000, 20000000),
                    'introduce' => rand(1, 100),
                ],
                [
                    'product_id' => $i,
                    'price' => rand(1000000, 20000000),
                    'introduce' => rand(1, 100),
                ],
                [
                    'product_id' => $i,
                    'price' => rand(1000000, 20000000),
                    'introduce' => rand(1, 100),
                ],
                [
                    'product_id' => $i,
                    'price' => rand(1000000, 20000000),
                    'introduce' => rand(1, 100),
                ],
            ]);
        }
    }
}
