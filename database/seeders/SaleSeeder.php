<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $id_product = $faker->numberBetween(2, 10);
            $price = $faker->numberBetween(50000, 200000);
            $quantity = $faker->numberBetween(1, 100);
        //
        DB::table('sales')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'id_product' => $id_product,
            'price' => $price,
            'quantity' => $quantity,
            'subtotal' => $price * $quantity,
            'date' => $faker->date(),
        ]);

        }
    }
}
