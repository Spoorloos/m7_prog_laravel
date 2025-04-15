<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('movies')->insert([
            'name'               => $faker->text(40),
            'preview_image_url' => $faker->imageUrl(),
            'description'        => $faker->text(1000),
        ]);
    }
}
