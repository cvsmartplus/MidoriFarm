<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //
        DB::table('articles')->insert([
            'title' => $faker->sentence,
            'slug'=> $faker->slug,
            'content' => $faker->paragraph,
            'category_id' => $faker->numberBetween(1, 3),
            'author_id' => $faker->numberBetween(1, 3),
            'thumbnail' => $faker->imageUrl(640, 480, 'nature', true, 'Faker'),
            'tags' => implode(',', $faker->words(5)),
            'status' => $faker->randomElement(['published', 'draft']),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'slug'=> $faker->slug,
                'content' => $faker->paragraph,
                'category_id' => $faker->numberBetween(1, 3),
                'author_id' => $faker->numberBetween(1, 3),
                'thumbnail' => $faker->imageUrl(640, 480, 'nature', true, 'Faker'),
                'tags' => implode(',', $faker->words(5)),
                'status' => $faker->randomElement(['published', 'draft']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
