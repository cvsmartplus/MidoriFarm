<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Penjualan;      // Model untuk tabel sales
use App\Models\PenjualanItem;  // Model untuk tabel sale_items

class SaleItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Ambil semua ID sale yang ada
        $existingSales = Penjualan::pluck('id')->all();

        if (empty($existingSales)) {
            $this->command->info('Tidak ada data Sale (sales) – jalankan SalesSeeder dulu!');
            return;
        }

        // Untuk setiap sale, kita buat antara 1–5 item
        foreach ($existingSales as $saleId) {
            $sale = Penjualan::find($saleId);

            // Buat random number of items per sale
            $itemsCount = $faker->numberBetween(1, 5);

            for ($i = 0; $i < $itemsCount; $i++) {
                $price    = $faker->randomElement([25000, 30000, 35000]);
                $quantity = $faker->numberBetween(1, 5);

                $sale->items()->create([
                    'id_greenhouse' => $sale->id_greenhouse,
                    'id_customer'   => $sale->id_customer,
                    'id_product'    => $faker->numberBetween(1, 10),
                    'price'         => $price,
                    'quantity'      => $quantity,
                    'subtotal'      => $price * $quantity,
                ]);
            }

            // Setelah membuat items, update total di header
            $grandTotal = $sale->items->sum(fn($it) => $it->subtotal);
            $sale->update([
                'subtotal' => $grandTotal,
                'total'    => $grandTotal,
            ]);
        }
    }
}
