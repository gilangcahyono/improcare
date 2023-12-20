<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\StockIn;
use App\Models\StockOut;
use App\Models\Supplier;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        Product::factory(100)->create();
        Category::factory(20)->create();
        Unit::factory(10)->create();
        Supplier::factory(10)->create();
        Customer::factory(20)->create();
        StockIn::factory(10)->create();
        StockOut::factory(10)->create();

        User::factory()->create([
            'name' => 'Muhammad Dava Irfansyah',
            'username' => 'dava',
            'password' => bcrypt('123456'),
            'role' => 'Administrator',
            'phone' => fake()->phoneNumber(),
        ]);

        User::factory()->create([
            'name' => fake()->name(),
            'username' => fake()->userName(),
            'password' => bcrypt('123456'),
            'role' => 'Operasional Manager',
            'phone' => fake()->phoneNumber(),
        ]);

        User::factory()->create([
            'name' => fake()->name(),
            'username' => fake()->userName(),
            'password' => bcrypt('123456'),
            'role' => 'Sales Manager',
            'phone' => fake()->phoneNumber(),
        ]);

        User::factory()->create([
            'name' => fake()->name(),
            'username' => fake()->userName(),
            'password' => bcrypt('123456'),
            'role' => 'Service Operator',
            'phone' => fake()->phoneNumber(),
        ]);
    }
}
