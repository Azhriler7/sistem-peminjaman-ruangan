<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'nama',
        'nim',
        'jurusan',
        'foto_profil',
        'role',
    ];

    protected $hidden = ['password', 'remember_token'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
