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
        //
        DB::table('green_houses')->insert([
            'name' => 'Green House 1',
            'location' => 'Location 1',
            'status' => 1, // 1 untuk 'Active'
        ]);

        DB::table('green_houses')->insert([
            'name' => 'Green House 2',
            'location' => 'Location 2',
            'status' => 0, // 0 untuk 'Inactive'
        ]);

        DB::table('green_houses')->insert([
            'name' => 'Green House 3',
            'location' => 'Location 3',
            'status' => 1, // 0 untuk 'Inactive'
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('green_houses')->insert([
                'name' => $faker->company,
                'location' => $faker->address,
                'status' => $faker->randomElement([0, 1]),
            ]);
        }
    }
}
