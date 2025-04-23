<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['username', 'email', 'password'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'iduser');
    }

    public function akses()
    {
        return $this->hasMany(Akses::class, 'id_user');
    }
}
