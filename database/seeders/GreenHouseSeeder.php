<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class GreenHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        //
        DB::table('green_houses')->insert([
            'name' => 'Green House 1',
            'type_of_plant' => 'potato',
            'location' => 'Location 1',
            'status' => 1, // 1 untuk 'Active'
            'longitude' => $faker->longitude($min = -180, $max = 180),
            'altitude' => $faker->latitude($min = -90, $max = 90),

        ]);

        DB::table('green_houses')->insert([
            'name' => 'Green House 2',
            'type_of_plant' => 'potato',
            'location' => 'Location 2',
            'status' => 0, // 0 untuk 'Inactive'
            'longitude' => $faker->longitude($min = -180, $max = 180),
            'altitude' => $faker->latitude($min = -90, $max = 90),

        ]);

        DB::table('green_houses')->insert([
            'name' => 'Green House 3',
            'type_of_plant' => 'potato',
            'location' => 'Location 3',
            'status' => 1, // 0 untuk 'Inactive'
            'longitude' => $faker->longitude($min = -180, $max = 180),
            'altitude' => $faker->latitude($min = -90, $max = 90),

        ]);

            // DB::table('green_houses')->insert([
            //     'name' => fake()->company(),
            //     'location' => fake()->address(),
            //     'status' => fake()->randomElement([0, 1]),
            // ]);
        }
    }
}
