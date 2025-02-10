<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BuySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //
        DB::table('buys')->insert([
            'id_product' => $faker->numberBetween(1, 3),
            'id_asset' => $faker->numberBetween(1, 3),
            'id_supplier' => $faker->numberBetween(1, 3),
            'quanity' => $faker->randomFloat(1, 100),
            'subtotal' => $faker->randomFloat(2, 0, 1000),
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('buys')->insert([
                'id_product' => $faker->numberBetween(1, 3),
                'id_asset' => $faker->numberBetween(1, 3),
                'id_supplier' => $faker->numberBetween(1, 3),
                'quanity' => $faker->randomFloat(1, 100),
                'subtotal' => $faker->randomFloat(2, 0, 1000),
            ]);
        }
    }
}
