<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cache spatie
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // Buat role
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $owner = Role::firstOrCreate(['name' => 'owner']);
        $petani = Role::firstOrCreate(['name' => 'petani']);        
        $akuntan = Role::firstOrCreate(['name' => 'akuntan']);
    }
}
