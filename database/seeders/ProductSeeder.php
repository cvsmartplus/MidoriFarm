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
            $id_cat_product= $faker->numberBetween(1, 10);
        //

        DB::table('products')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'id_cat_product' => $id_cat_product,
            'name_product' => $faker->word,
            'selling_price'=> $faker->randomFloat(2, 1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        }
    }
}
