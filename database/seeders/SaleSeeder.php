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
            $id_user = $faker->numberBetween(1, 3);
            $id_product = $faker->numberBetween(1, 3);
        //
        DB::table('sales')->insert([
            'id_user' => $id_user,
            'id_product' => $id_product,
            'subtotal' => $faker->numberBetween(2, 100),
            'pay' => $faker->numberBetween(1000, 100000000),
            'payment_methods' => $faker->numberBetween(1, 5),
            'date' => $faker->date(),
        ]);

        }
    }
}
