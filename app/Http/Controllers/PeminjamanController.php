<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeminjamanRequest;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function store(StorePeminjamanRequest $request)
    {
        $validated = $request->validated();

        $peminjaman = Peminjaman::create($validated);

        return response()->json([
            'message' => 'Peminjaman berhasil disimpan',
            'data' => $peminjaman
        ], 201);
    }

    public function index()
    {
        $data = Peminjaman::with(['user', 'ruangan', 'status'])->get();
        return response()->json($data);
    }
}
