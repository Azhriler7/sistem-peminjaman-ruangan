<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan';

    protected $fillable = [
        'nama_ruangan',
        'gedung',
        'kapasitas',
        'fasilitas',
        'deskripsi',
        'gambar',
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }

    public function kalenderAcara()
    {
        return $this->hasMany(KalenderAcara::class);
    }
}
