<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            GreenHouseSeeder::class,
            RolesSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            SensorSeeder::class,
            SupplierSeeder::class,
            CustomerSeeder::class,
            CategoryProductSeeder::class,
            ProductSeeder::class,
            CategoryAssetSeeder::class,
            AssetSeeder::class,
            ArticleSeeder::class,
            SaleSeeder::class,
            OrderSaleSeeder::class,
            CategoryExpenseSeeder::class,
            ExpenseSeeder::class,
            SupplierDebtSeeder::class,
            CustomerDebtSeeder::class,
            CategoryNotificationSeeder::class,
            NotificationSeeder::class,
            IotSeeder::class,
            IsOutputEnableSeeder::class,
            // SensorConfigSeeder::class,
        ]);
    }
}
