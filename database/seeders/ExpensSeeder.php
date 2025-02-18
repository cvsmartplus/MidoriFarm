<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ExpensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        //
        DB::table('expenses')->insert([
            'id_greenhouse' => 1,
            'id_buy' => $faker->numberBetween(1, 3),
            'id_user' => $faker->numberBetween(1,3),
            'date' => $faker->date,
            'total_price' => $faker->numberBetween(2,5000),
        ]);

        }
    }
}
