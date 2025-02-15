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
        //
        DB::table('assets')->insert([
            'id_greenhouse' => 1,
            'name_product' => $faker->word,
            'purchase' => $faker->numberBetween(1, 100),
            'stock' => $faker->numberBetween(1, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        }
    }
}
