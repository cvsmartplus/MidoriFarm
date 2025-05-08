<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomerDebtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        //
        DB::table('customer_debts')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'id_customer' =>$faker->numberBetween(1,5),
            'created_at' =>now(),
            'updated_at' =>now(),
            'amount' => $faker->randomFloat(2, 10, 1000),
            'status' => $faker->randomElement(['Lunas', 'Belum Lunas', 'Tenggat Waktu']),
            'date' => $faker->date,
            'due_date' => $faker->date,
        ]);
        }
    }
}
