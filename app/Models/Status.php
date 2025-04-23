<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['status'];

    public function status()
    {
    return $this->belongsTo(Status::class, 'status_acara');
    }
}
