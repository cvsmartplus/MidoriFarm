<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{
    DB,
    Hash,
};
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Nazwha',
            'email' =>  'nazwhaawa1864@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
            'id_greenhouse' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Sultan',
            'email' =>  'sultanurulloh08@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
            'id_greenhouse' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            ]);

        DB::table('users')->insert([
            'name' => 'Agan',
            'email' =>  'reyfhan58@gmail.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
            'id_greenhouse' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' =>  fake()->unique()->safeEmail(),
                'password' => Hash::make('456'),
                'role' => 'owner',
                'id_greenhouse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('users')->insert([
                'name' => $faker->name,
                'email' =>  fake()->unique()->safeEmail(),
                'password' =>Hash::make('789'),
                'role' => 'petani',
                'id_greenhouse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('users')->insert([
                'name' => $faker->name,
                'email' =>  fake()->unique()->safeEmail(),
                'password' =>Hash::make('012'),
                'role' => 'akuntan',
                'id_greenhouse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
