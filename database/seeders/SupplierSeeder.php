<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        //
        DB::table('suppliers')->insert([
            'id_greenhouse' => 1,
            'name' => $faker->company,
            'address' => $faker->address,
            'email' => $faker->unique()->safeEmail,
            'phone_number' => $faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        }
    }
}
