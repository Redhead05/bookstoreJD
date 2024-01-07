<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Category::create([
            'name' => 'Fiction',
        ]);

        Category::create([
            'name' => 'Non-Fiction',
        ]);

        Category::create([
            'name' => 'Science Fiction',
        ]);

       
    }
}
