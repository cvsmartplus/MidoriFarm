<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $categoryId = $faker->numberBetween(1, 11);
        //

        DB::table('products')->insert([
            'id_greenhouse' => 1,
            'name_product' => $faker->word,
            'cost_price' => $faker->randomFloat(2, 1, 100),
            'selling_price'=> $faker->randomFloat(2, 1, 100),
            'stock' => $faker->randomFloat(0, 100),
            'id_category' => $categoryId,
            'discount'=> $faker->randomFloat(2, 0, 0.5),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        }
    }
}
