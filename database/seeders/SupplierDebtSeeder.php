<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SupplierDebtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        //
        DB::table('supplier_debts')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'id_supplier' => $faker->numberBetween(1, 3),
            'name' => $faker->name,
            'amount' => $faker->randomFloat(2, 0, 1000),
            'status' => $faker->numberBetween(0, 1),
            'date' => $faker->date,
            'due_date' => $faker->date,
            'debt_date' => $faker->date,
        ]);
        }
    }
}
