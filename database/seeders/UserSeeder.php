<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'nama' => 'Admin Sistem',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'nim' => '333333333',
            'jurusan' => 'Teknik Informatika',
            'foto_profil' => 'default.jpg', // Atau biarkan null jika nullable
        ]);

        // User biasa
        User::create([
            'nama' => 'Pengguna Biasa',
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
            'nim' => '222222222',
            'jurusan' => 'Sistem Informasi',
            'foto_profil' => 'default.jpg',
        ]);
    }
}