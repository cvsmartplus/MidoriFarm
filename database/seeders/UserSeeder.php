<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{
    DB,
    Hash,
};
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail,
                'password' => Hash::make('123'),
                'role' => 'admin',
                'id_greenhouse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make('456'),
                'role' => 'owner',
                'id_greenhouse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make('789'),
                'role' => 'petani',
                'id_greenhouse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make('012'),
                'role' => 'akuntan',
                'id_greenhouse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        
        for ($i = 0; $i < 10; $i++) {
            $role = fake()->randomElement(['admin', 'owner', 'petani', 'akuntan']);
            $password = match ($role) {
                'admin' => Hash::make('123'),
                'owner' => Hash::make('456'),
                'petani' => Hash::make('789'),
                'akuntan' => Hash::make('012'),
            };
            DB::table('users')->insert([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail,
                'password' => $password,
                'role' => $role,
                'id_greenhouse' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
