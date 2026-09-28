<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Jalankan Seeder Kategori
        $this->call(CategorySeeder::class);

        // 2. Buat 50 data dummy produk
        \App\Models\Product::factory(50)->create();

        // 3. Jalankan Seeder Supplier
        $this->call(SupplierSeeder::class);

        // 4. Jalankan Seeder User
        $this->call(UserSeeder::class);
    }
}