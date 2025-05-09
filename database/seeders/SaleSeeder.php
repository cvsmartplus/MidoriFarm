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
        $total = 0;
        $items = [];

        // Buat ID transaksi yang sama untuk semua item dalam transaksi ini
        $transaction_id = Str::uuid();

        $product_count = 3;

        for ($j = 0; $j < $product_count; $j++) {
            $id_product = $faker->numberBetween(1, 10);
            $price = $faker->randomElement([25000, 30000, 35000]);
            $quantity = $faker->numberBetween(1, 5);
            $subtotal = $price * $quantity;

            $total += $subtotal;

            $items[] = [
                'id_greenhouse' => $faker->numberBetween(1, 5),
                'id_product' => $id_product,
                'transaction_id' => $transaction_id,
                'price' => $price,
                'quantity' => $quantity,
                'subtotal' => $subtotal,
                'date' => $faker->date(), // optional
                // 'total' belum diisi dulu
            ];
        }

        // Assign total ke semua item
        foreach ($items as &$item) {
            $item['total'] = $total;
        }

        DB::table('sales')->insert($items);
    }
}

}
