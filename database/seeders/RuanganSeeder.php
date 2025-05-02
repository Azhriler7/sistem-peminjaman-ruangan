<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruangan;

class RuanganSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_ruangan' => 'Ruang Meeting 1',
                'gedung' => 'Gedung A',
                'kapasitas' => 30,
                'fasilitas' => 'AC, Proyektor, Whiteboard',
                'deskripsi' => 'Ruangan untuk meeting resmi.',
                'gambar' => null, // atau isi dengan path gambar default jika perlu
            ],
            [
                'nama_ruangan' => 'Ruang Seminar 2',
                'gedung' => 'Gedung B',
                'kapasitas' => 100,
                'fasilitas' => 'Mic, LCD, Kursi Lipat',
                'deskripsi' => 'Cocok untuk acara seminar atau workshop.',
                'gambar' => null,
            ],
        ];

        foreach ($data as $ruangan) {
            Ruangan::create($ruangan);
        }
    }
}
