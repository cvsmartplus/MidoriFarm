<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Penjualan;      // alias model sales
use App\Models\PenjualanItem; 

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Misal kita buat 10 transaksi
        for ($i = 0; $i < 10; $i++) {
            // 1) Prepare header data
            $headerData = [
                'id_greenhouse' => $faker->numberBetween(1, 5),
                'id_customer'   => $faker->numberBetween(1, 10),
                'subtotal'      => 0, // akan diupdate setelah detail dibuat
                'total'         => 0,
                'created_at'    => $created = $faker->dateTimeThisYear(),
                'updated_at'    => $created,
            ];

            // 2) Insert header dan ambil instance model
            $sale = Penjualan::create($headerData);

            // 3) Buat detail items untuk transaksi ini
            $grandTotal = 0;
            $productCount = $faker->numberBetween(1, 5); // 1–5 item per transaksi

            for ($j = 0; $j < $productCount; $j++) {
                $price    = $faker->randomElement([25000, 30000, 35000]);
                $quantity = $faker->numberBetween(1, 5);
                $subtotal = $price * $quantity;

                PenjualanItem::create([
                    'id_greenhouse' => $sale->id_greenhouse,
                    'id_sale'       => $sale->id,
                    'id_product'    => $faker->numberBetween(1, 10),
                    'id_customer'   => $sale->id_customer,
                    'price'         => $price,
                    'quantity'      => $quantity,
                    'subtotal'      => $subtotal,
                    'created_at'    => $created,
                    'updated_at'    => $created,
                ]);

                $grandTotal += $subtotal;
            }

            // 4) Update total di header
            $sale->update([
                'subtotal' => $grandTotal,
                'total'    => $grandTotal,
            ]);
        }
    }
}
