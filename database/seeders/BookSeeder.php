<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $categories = \App\Models\Category::pluck('id')->toArray();
        $authors = \App\Models\Author::pluck('id')->toArray();


        for ($index = 1; $index <= 20; $index++) {
            \App\Models\Book::create([
                'book_name' => $faker->sentence(3),
//                'author_id' => $faker->randomElement($authors),
//                'author_name' => $faker->name,
                'average_rating' => $faker->randomFloat(2, 0, 5),
                'voters' => $faker->numberBetween(10, 1000),
                'category_id' => $faker->randomElement($categories),
                'author_id' => $faker->randomElement($authors),
            ]);
        }

    }
}
