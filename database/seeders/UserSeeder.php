<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // === Admins ===
        $admins = [
            ['name' => 'Nazwha', 'email' => 'nazwhaawa1864@gmail.com', 'password' => '123'],
            ['name' => 'Sultan', 'email' => 'sultanurulloh08@gmail.com', 'password' => '123'],
            ['name' => 'Agan',   'email' => 'reyfhan58@gmail.com',     'password' => '123'],
        ];

        foreach ($admins as $admin) {
            User::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'password' => Hash::make($admin['password']),
                'role' => 'admin',
                'id_greenhouse' => $faker->numberBetween(1, 5),
            ])->assignRole('admin');
        }

        // === Owners ===
        $owners = [
            ['name' => 'Naz', 'email' => 'waw@gmail.com'],
            ['name' => 'Sul', 'email' => 'sul@gmail.com'],
            ['name' => 'Rey', 'email' => 'gan@gmail.com'],
        ];

        foreach ($owners as $owner) {
            User::create([
                'name' => $owner['name'],
                'email' => $owner['email'],
                'password' => Hash::make('456'),
                'role' => 'owner',
                'id_greenhouse' => $faker->numberBetween(1, 5),
            ])->assignRole('owner');
        }

        // === Dummy Users ===
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('456'),
                'role' => 'owner',
                'id_greenhouse' => 1,
            ])->assignRole('owner');

            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('789'),
                'role' => 'petani',
                'id_greenhouse' => 1,
            ])->assignRole('petani');

            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail(),
                'password' => Hash::make('012'),
                'role' => 'akuntan',
                'id_greenhouse' => 1,
            ])->assignRole('akuntan');
        }
    }
}
?>
