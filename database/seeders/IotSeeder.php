<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        //
        DB::table('iots')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'sensor_id'=> $faker->numberBetween(1,3),
            'value' => $faker->randomFloat(2,0,100),
            'id_cat_notif' => $faker->numberBetween(1, 3),
            'log' => $faker->sentence,
            'created_at' => $faker->dateTimeBetween('-30 days', 'now'),
            'updated_at' => $faker->dateTimeBetween('-30 days', 'now'),
        ]);
        }
    }
}
