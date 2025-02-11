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
        //
$type = $faker->randomElement(['Temperature', 'Humidity', 'Moisture', 'pH', 'Nitrogen', 'Phosphate', 'Potassium', 'EC', 'TDS', 'UV', 'Rain', 'Gas']);
$unit = match ($type) {
    'Temperature' => $faker->randomElement(['Celsius', 'Fahrenheit']),
    'Humidity' => $faker->randomElement(['Percentage']),
    'Moisture' => $faker->randomElement(['Percentage']),
    'pH' => 'pH',
    'Nitrogen' => $faker->randomElement(['mg/L', 'ppm']),
    'Phosphate' => $faker->randomElement(['mg/L', 'ppm']),
    'Potassium' => $faker->randomElement(['mg/L', 'ppm']),
    'EC' => 'µS/cm',
    'TDS' => $faker->randomElement(['mg/L', 'ppm']),
    'UV' => 'mW/cm²',
    'Rain' => $faker->randomElement(['mm', 'in']),
    'Gas' => $faker->randomElement(['ppm', 'percentage']),
    default => 'Unknown',
};

DB::table('sensors')->insert([
    'name' => $faker->word,
    'type' => $type,
    'unit' => $unit,
]);

        for ($i = 0; $i < 10; $i++) {
            $type = $faker->randomElement(['Temperature', 'Humidity', 'Moisture', 'pH', 'Nitrogen', 'Phosphate', 'Potassium', 'EC', 'TDS', 'UV', 'Rain', 'Gas']);
$unit = match ($type) {
    'Temperature' => $faker->randomElement(['Celsius', 'Fahrenheit']),
    'Humidity' => $faker->randomElement(['Percentage']),
    'Moisture' => $faker->randomElement(['Percentage']),
    'pH' => 'pH',
    'Nitrogen' => $faker->randomElement(['mg/L', 'ppm']),
    'Phosphate' => $faker->randomElement(['mg/L', 'ppm']),
    'Potassium' => $faker->randomElement(['mg/L', 'ppm']),
    'EC' => 'µS/cm',
    'TDS' => $faker->randomElement(['mg/L', 'ppm']),
    'UV' => 'mW/cm²',
    'Rain' => $faker->randomElement(['mm', 'in']),
    'Gas' => $faker->randomElement(['ppm', 'percentage']),
    default => 'Unknown',
};

DB::table('sensors')->insert([
    'name' => $faker->word,
    'type' => $type,
    'unit' => $unit,
]);
        }
    }
}
