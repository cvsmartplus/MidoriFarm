<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        //
$type = $faker->randomElement(['Sensor Air', 'Sensor Tanah', 'Sensor Udara']);
$name = match ($type) {
    'Sensor Air' => $faker->randomElement(['pH','Temperature','TDS','Level']),
    'Sensor Tanah' => $faker->randomElement(['pH','Moisture','Temperature','Nitrogen','Phospate','Potassium','EC']),
    'Sensor Udara' => $faker->randomElement(['Temperature','Humidity','UV','Rain','Gas']),
};
$unit = match ($name) {
    'Temperature' => $faker->randomElement(['Celsius', 'Fahrenheit']),
    'Humidity' => $faker->randomElement(['Percentage']),
    'Moisture' => $faker->randomElement(['Percentage']),
    'pH' => 'pH',
    'Nitrogen' => $faker->randomElement(['mg/L', 'ppm']),
    'Phosphate' => $faker->randomElement(['mg/L', 'ppm']),
    'Level' => $faker->randomElement(['ft', 'in']),
    'Potassium' => $faker->randomElement(['mg/L', 'ppm']),
    'EC' => 'µS/cm',
    'TDS' => $faker->randomElement(['mg/L', 'ppm']),
    'UV' => 'mW/cm²',
    'Rain' => $faker->randomElement(['mm', 'in']),
    'Gas' => $faker->randomElement(['ppm', 'percentage']),
    default => 'Unknown',
};

DB::table('sensors')->insert([
    'name' => $name,
    'type' => $type,
    'unit' => $unit,
    'created_at' => now(),

]);

        }
    }
}
