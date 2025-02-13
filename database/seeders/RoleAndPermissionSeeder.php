<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'view Beranda',
            'view Artikel',
            'view Produk dan Barang',
            'view Hutang',
            'view Pelanggan',
            'view Pemasok',
            'view Manajemen Akses',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }

        $adminRole = Role::create(['name' => 'admin']);
        $ownerRole = Role::create(['name' => 'owner']);
        $akuntanRole = Role::create(['name' => 'akuntan']);
        $farmerRole = Role::create(['name' => 'farmer']);

        $adminRole->givePermissionTo(Permission::all());
        $ownerRole->givePermissionTo(Permission::all());
        $akuntanRole->givePermissionTo(['view Hutang']);
        $farmerRole->givePermissionTo(['view Beranda']);

        $adminUser = User::create([
            'email' => 'admin@example.com',
            'name' => 'Admin',
            'password' => bcrypt('password123'),
            'id_greenhouse' => 1,
        ]);
        $adminUser->assignRole('admin');

        $ownerUser = User::create([
            'name' => 'Owner',
            'email' => 'owner@example.com',
            'password' => bcrypt('password123'),
            'id_greenhouse' => 1,
        ]);
        $ownerUser->assignRole('owner');

        $akuntanUser = User::create([
            'name' => 'Akuntan',
            'email' => 'akuntan@example.com',
            'password' => bcrypt('password123'),
            'id_greenhouse' => 1,
        ]);
        $akuntanUser->assignRole('akuntan');

        $farmerUser = User::create([
            'name' => 'Farmer',
            'email' => 'farmer@example.com',
            'password' => bcrypt('password123'),
            'id_greenhouse' => 1,
        ]);
        $farmerUser->assignRole('farmer');
    }
}
