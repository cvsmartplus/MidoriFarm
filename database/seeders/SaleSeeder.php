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
            $id_product = $faker->numberBetween(1, 11);
            $id_customer = $faker->numberBetween(1, 3);
        //
        DB::table('sales')->insert([
            'id_product' => $id_product,
            'id_customer' => $id_customer,
            'quantity' => $faker->numberBetween(1, 50),
            'subtotal' => $faker->randomFloat(2, 1, 100),
            'discount' => $faker->randomFloat(2, 0, 0.5)
        ]);
        
        }
    }
}
