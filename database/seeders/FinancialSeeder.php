<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FinancialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $id_product = $faker->numberBetween(1, 3);
            $id_asset = $faker->numberBetween(1, 3);
            $id_supplier = $faker->numberBetween(1, 3);
            $id_user = $faker->numberBetween(1,3);
            $id_category = $faker->numberBetween(1,3);
        //
        DB::table('financials')->insert([
            'id_product' => $id_product,
            'id_asset' => $id_asset,
            'id_supplier' => $id_supplier,
            'id_user' => $id_user,
            'id_category' => $id_category,
            'quantity' => $faker->numberBetween(1, 100),
            'subtotal' => $faker->numberBetween(1, 100),
            'total_price' => $faker->numberBetween(),
            'date' => $faker->date(),

        ]);

        }
    }
}
