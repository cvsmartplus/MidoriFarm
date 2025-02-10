<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IsOutputEnableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //
        DB::table('is_output_enables')->insert([
            'id_greenhouse' => 1,
            'pump_waters' => $faker->boolean,
            'pump_waterdrops' => $faker->boolean,
            'updated_at' => now(),
        ]);

        for ($i = 0; $i < 10; $i++) {
        DB::table('is_output_enables')->insert([
            'id_greenhouse' => 1,
            'pump_waters' => $faker->boolean,
            'pump_waterdrops' => $faker->boolean,
            'updated_at' => now(),
        ]);
        }
    }
}
