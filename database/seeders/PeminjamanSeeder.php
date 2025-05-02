<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Peminjaman;
use Carbon\Carbon;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        $tanggalMulai = Carbon::now()->subDays(10); // histori lama 10 hari lalu

        for ($i = 1; $i <= 5; $i++) {
            $tanggal = $tanggalMulai->copy()->addDays($i);

            Peminjaman::create([
                'user_id' => 1,
                'ruangan_id' => 1,
                'nama_peminjam' => 'User ' . $i,
                'nama_ruangan' => 'Ruang A' . $i,
                'tanggal_peminjaman' => $tanggal->toDateString(),
                'kontak' => '0812345678' . $i,
                'nama_acara' => 'Acara Seminar ' . $i,
                'waktu_mulai' => $tanggal->copy()->setTime(8 + $i, 0),   // 09:00 dst
                'waktu_selesai' => $tanggal->copy()->setTime(10 + $i, 0), // 11:00 dst
                'surat_permohonan' => null,
                'catatan' => 'Catatan peminjaman ke-' . $i,
                'status' => $i % 3 === 0 ? 'ditolak' : ($i % 2 === 0 ? 'diterima' : 'pending'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
