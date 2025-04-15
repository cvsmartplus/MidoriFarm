<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 10; $i++) {
        //
        DB::table('customers')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'name'=> $faker->name,
            'address' => $faker->address,
            'email'=> $faker->unique()->safeEmail,
            'phone_number' => $faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        }
    }
}
