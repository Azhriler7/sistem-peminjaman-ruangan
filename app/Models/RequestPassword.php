<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestPassword extends Model
{
    use HasFactory;

    protected $table = 'request_password';

    protected $fillable = [
        'username',
        'email',
        'new_password',
        'status',
    ];
}
