<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->text(25),
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fsnapshot.canon-asia.com%2Fvn%2Farticle%2Fviet%2F5-simple-ways-to-take-the-world-8217-s-best-photos&psig=AOvVaw2U5Dv7xyKLjL8hCi1DaztE&ust=1719737447206000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCJCkzLG3gIcDFQAAAAAdAAAAABAE',
                'description'=>$faker->text(50),
                'content'=>$faker->text(),
                'view'=>rand(1,1000),
                'cate_id'=>rand(1,4),
            ]);
        }
    }
}
