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
        

            DB::table('categories')->insert([
                ['name' => 'Thể thao'],
                ['name' => 'Sức khỏe'],
                ['name' => 'Thư viện'],
                ['name' => 'Khoa học'],
                ['name' => 'Thông tin'],
                ['name' => 'Kinh doanh'],
            ]);
    }

}
