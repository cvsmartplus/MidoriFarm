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
            UserSeeder::class,
            CategorySeeder::class,
            SensorSeeder::class,
            SupplierSeeder::class,
            CustomerSeeder::class,
            CategoryProductSeeder::class,
            ProductSeeder::class,
            AssetSeeder::class,
            ArticleSeeder::class,
            LogHistorySeeder::class,
            SaleSeeder::class,
            RevenueSeeder::class,
            BuySeeder::class,
            ExpensSeeder::class,
            IndebtSeeder::class,
            OutdebtSeeder::class,
            IotSeeder::class,
            NotificationSeeder::class,
            IsOutputEnableSeeder::class,
            SensorConfigSeeder::class,
        ]);
    }
}
