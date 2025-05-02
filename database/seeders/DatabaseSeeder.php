<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder UserSeeder
        $this->call([
            UserSeeder::class,
            RuanganSeeder::class,
            PeminjamanSeeder::class,
        ]);
    }
}
