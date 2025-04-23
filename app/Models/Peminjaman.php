<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = [
        'iduser', 'tanggal_acara', 'id_ruang', 
        'nama_acara', 'status_acara', 'waktu_mulai', 'waktu_selesai'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruang');
    }
    
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_acara');
    }
}
