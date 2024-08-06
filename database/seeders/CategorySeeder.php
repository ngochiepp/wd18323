<?php

namespace Database\Seeders;


use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        

        $faker = Faker::create();
        DB::table('categories')->insert([
            ['name' => 'Trinh thám'],
            ['name' => 'Cổ tích'],
            ['name' => 'Thám hiểm'],
            ['name' => 'Thần thoại'],
            ['name' => 'Truyện tranh'],
        ]);
    }

}
