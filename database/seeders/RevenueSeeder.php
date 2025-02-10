<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RevenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        $id_sale = $faker->numberBetween(1,10);
        $id_user = $faker->numberBetween(1,10);
        //
        DB::table('revenues')->insert([
            'id_sale' => $id_sale,
            'id_user' => $id_user,
            'id_greenhouse' => 1,
            'date' => $faker->date,
            'total_price' => $faker->randomFloat(2, 0, 100),
            'total_discount' => $faker->randomFloat(2, 1, 0.5),
            'revenue' => $faker->randomFloat(2, 0,100),
        ]);

        }
    }
}
