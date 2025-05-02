<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KalenderAcara extends Model
{
    use HasFactory;

    protected $table = 'kalender_acara';

    protected $fillable = [
        'ruangan_id',
        'nama_acara',
        'waktu_mulai',
        'waktu_selesai',
    ];

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
