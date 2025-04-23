<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $id_cat_asset = $faker->numberBetween(1,3);
        //
        DB::table('assets')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'id_cat_asset' => $id_cat_asset,
            'name_product' => $faker->word,
            'purchase' => $faker->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        }
    }
}
