<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HistoryPeminjaman extends Model
{
    use HasFactory;

    protected $table = 'history_peminjaman';

    protected $fillable = [
        'peminjaman_id',
        'status_final',
        'waktu_konfirmasi',
    ];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }
}
