<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $id_product = $faker->numberBetween(1, 10);
            $id_sale = $faker->numberBetween(1, 10);
        //
        DB::table('order_sales')->insert([
            'name' => $faker->name,
            'id_greenhouse' => $faker->numberBetween(1,5),
            'id_product' => $id_product,
            'id_sale' => $id_sale,
            'quantity' => $faker->numberBetween(1, 10),
            'subtotal' => $faker->numberBetween(1, 10),
            'status' => $faker->randomElement(['paid']),
            'date' => $faker->date,
        ]);
        }
    }
}
