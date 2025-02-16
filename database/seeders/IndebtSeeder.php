<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IndebtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //
        DB::table('indebts')->insert([
            'id_greenhouse' => 1,
            'id_supplier' => $faker->numberBetween(1, 3),
            'amount' => $faker->randomFloat(2, 0, 1000),
            'status' => $faker->numberBetween(0, 1),
            'date' => $faker->date,
            'due_date' => $faker->date,
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('indebts')->insert([
                'id_greenhouse' => 1,
                'id_supplier' => $faker->numberBetween(1, 3),
                'amount' => $faker->randomFloat(2, 0, 1000),
                'status' => $faker->numberBetween(0, 1),
                'date' => $faker->date,
                'due_date' => $faker->date,
            ]);
        }
    }
}
