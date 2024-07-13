<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => fake()->text(25),
                'thumbnail'=> 'https://i.pinimg.com/originals/dc/2c/aa/dc2caaafb268b7596da2eabd152d9fcd.jpg',
                'author'=> $fake->name,
                'publisher'=> $fake->company,
                'publication'=> $fake->date,
                'price'=> $fake->randomFloat(2, 1, 200),
                'quantity'=> $fake->numberBetween(1, 100),
                'category_id'=>rand(1,5),
            ]);

    }
}
}