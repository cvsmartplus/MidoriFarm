<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SensorConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //
        DB::table('sensor_configs')->insert([
            'sensor_id' => $faker->numberBetween(1, 3),
            'greenhouse_id' => $faker->numberBetween(1, 3),
            'low_treshold' => $faker->randomFloat(2, 0, 50),
            'high_treshold' => $faker->randomFloat(2, 50, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('sensor_configs')->insert([
                'sensor_id' => $faker->numberBetween(1, 3),
                'greenhouse_id' => $faker->numberBetween(1, 3),
                'low_treshold' => $faker->randomFloat(2, 0, 50),
                'high_treshold' => $faker->randomFloat(2, 50, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
