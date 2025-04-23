<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeminjamanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // boleh semua user kirim request ini
    }

    public function rules(): array
    {
        return [
            'id_user' => 'required|exists:users,id',
            'id_ruang' => 'required|exists:ruangan,id',
            'tanggal_acara' => 'required|date',
            'nama_acara' => 'required|string|max:255',
            'status_acara' => 'required|exists:status,id',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_selesai' => 'required|date_format:H:i|after:waktu_mulai',
        ];
    }
}
