<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function userDashboard()
    {
        $peminjaman = Peminjaman::where('user_id', Auth::id())->get();
        return view('user.dashboard', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ruangan_id' => 'required',
            'nama_peminjam' => 'required',
            'nama_ruangan' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'kontak' => 'required|string',
            'nama_acara' => 'required',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date|after:waktu_mulai',
            'surat_permohonan' => 'nullable|file|mimes:pdf,doc,docx',
            'catatan' => 'nullable|string',
        ]);

        if ($request->hasFile('surat_permohonan')) {
            $validated['surat_permohonan'] = $request->file('surat_permohonan')->store('surat', 'public');
        }

        $validated['user_id'] = Auth::id();

        Peminjaman::create($validated);

        return redirect()->back()->with('success', 'Permintaan peminjaman berhasil dikirim.');
    }
}