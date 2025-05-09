<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
        //
        DB::table('notifications')->insert([
            'id_greenhouse' => $faker->numberBetween(1,5),
            'id_cat_notif' => $faker->numberBetween(1, 3),
            'content' => $faker->sentence,
        ]);
        }
    }
}
