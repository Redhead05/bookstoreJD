<?php

namespace Database\Seeders;


use App\Models\Author;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        Author::create([
            'name' => 'Vincent',
        ]);

        Author::create([
            'name' => 'Edo',
        ]);

        Author::create([
            'name' => 'Cullen',
        ]);

    }
}
