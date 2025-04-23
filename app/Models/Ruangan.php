<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $fillable = ['id_ruang', 'nama_ruang', 'kapasitas', 'deskripsi'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_ruang');
    }

    public function akses()
    {
        return $this->hasMany(Akses::class, 'id_ruang');
    }
}
