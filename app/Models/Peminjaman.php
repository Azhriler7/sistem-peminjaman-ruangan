<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'user_id',
        'ruangan_id',
        'nama_peminjam',
        'tanggal_peminjaman',
        'kontak',
        'nama_acara',
        'waktu_mulai',
        'waktu_selesai',
        'surat_permohonan',
        'catatan',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function history()
    {
        return $this->hasOne(HistoryPeminjaman::class);
    }
}

