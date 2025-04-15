<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $id_cat_exp = $faker->numberBetween(1, 3);
        //
        DB::table('expenses')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'id_cat_exp' => $id_cat_exp,
            'subtotal' => $faker->numberBetween(1, 100),
            'description' => $faker->sentence(),
            'date' => $faker->date(),
        ]);
        }
    }
}
