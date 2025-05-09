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
            'phone_number' => $faker->phoneNumber,
            'email'=> $faker->unique()->safeEmail,
            'type_of_plant' => 'potato',
            'location' => $faker->streetAddress,
            'status' => 1, // 1 untuk 'Active'
            'longitude' => $faker->longitude($min = -180, $max = 180),
            'latitude' => $faker->latitude($min = -90, $max = 90),

        ]);

        DB::table('green_houses')->insert([
            'name' => 'Green House 2',
            'phone_number' => $faker->phoneNumber,
            'email'=> $faker->unique()->safeEmail,
            'type_of_plant' => 'tomato',
            'location' => $faker->streetAddress,
            'status' => 0, // 0 untuk 'Inactive'
            'longitude' => $faker->longitude($min = -180, $max = 180),
            'latitude' => $faker->latitude($min = -90, $max = 90),

        ]);

        DB::table('green_houses')->insert([
            'name' => 'Green House 3',
            'phone_number' => $faker->phoneNumber,
            'email'=> $faker->unique()->safeEmail,
            'type_of_plant' => 'corn',
            'location' => $faker->streetAddress,
            'status' => 1,
            'longitude' => $faker->longitude($min = -180, $max = 180),
            'latitude' => $faker->latitude($min = -90, $max = 90),

        ]);

        DB::table('green_houses')->insert([
            'name' => 'Green House 4',
            'phone_number' => $faker->phoneNumber,
            'email'=> $faker->unique()->safeEmail,
            'type_of_plant' => 'potato',
            'location' => $faker->streetAddress,
            'status' => 0,
            'longitude' => $faker->longitude($min = -180, $max = 180),
            'latitude' => $faker->latitude($min = -90, $max = 90),

        ]);

        DB::table('green_houses')->insert([
            'name' => 'Green House 5',
            'phone_number' => $faker->phoneNumber,
            'email'=> $faker->unique()->safeEmail,
            'type_of_plant' => 'tomato',
            'location' => $faker->streetAddress,
            'status' => 1,
            'longitude' => $faker->longitude($min = -180, $max = 180),
            'latitude' => $faker->latitude($min = -90, $max = 90),

        ]);

        }
    }
}
