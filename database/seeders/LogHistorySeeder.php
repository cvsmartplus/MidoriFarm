<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class LogHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $userId = $faker->numberBetween(1, 11);
        //
        DB::table('loghistories')->insert([
            'user_id' => $userId,
            'id_greenhouse' => 1,
            'action' => $faker->word,
            'module' => $faker->word,
            'details' => $faker->paragraph,
            'ip_address' => $faker->ipv4,
            'created_at' => $faker->dateTimeBetween('-30 days', 'now'),
            'updated_at' => $faker->dateTimeBetween('-30 days', 'now'),
        ]);

        }
    }
}
