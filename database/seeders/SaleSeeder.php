<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $transaction_id = Str::uuid();
            $total = 0;
            $items = [];

            $product_count = rand(2, 5);

            for ($i = 0; $i < $product_count; $i++) {
                $id_product = $faker->numberBetween(1, 10);
                $price = $faker->randomElement([25000, 30000, 35000]);
                $quantity = $faker->numberBetween(1, 5);
                $subtotal = $price * $quantity;

                $total += $subtotal;

                $items[] = [
                    'id_greenhouse' => $faker->numberBetween(1,5),
                    'id_product' => $id_product,
                    'transaction_id' => $transaction_id,
                    'price' => $price,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal,
                    'total' => 0,
                    'date' => $faker->date(),
                ];
            }

            foreach ($items as &$item) {
                $item['total'] = $total;
            }

        //
        DB::table('sales')->insert($items);
        }
    }
}
