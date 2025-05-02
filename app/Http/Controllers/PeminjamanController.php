<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PeminjamanController extends Controller
{
    public function create()
    {
        return view('pages.user.pengajuan'); // ganti sesuai path blade kamu
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'nama_acara' => 'required|string|max:255',
            'ruangan_id' => 'required|string',
            'nama_ruangan' => 'required|string',
            'kontak' => 'required|string|max:255',
            'tanggal_peminjaman' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required|after:waktu_mulai',
            'surat_permohonan' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'catatan' => 'nullable|string',
        ]);

        $filePath = null;
        if ($request->hasFile('surat_permohonan')) {
            $filePath = $request->file('surat_permohonan')->store('surat_permohonan', 'public');
        }

        $peminjaman = Peminjaman::create([
            'user_id' => Auth::id(),
            'ruangan_id' => $validated['ruangan_id'],
            'nama_peminjam' => $validated['nama_peminjam'],
            'nama_ruangan' => $validated['nama_ruangan'],
            'tanggal_peminjaman' => $validated['tanggal_peminjaman'],
            'kontak' => $validated['kontak'],
            'nama_acara' => $validated['nama_acara'],
            'waktu_mulai' => $validated['waktu_mulai'],
            'waktu_selesai' => $validated['waktu_selesai'],
            'surat_permohonan' => $filePath,
            'catatan' => $validated['catatan'] ?? null,
            'status' => 'pending',
        ]);

        return redirect()->route('user.data-pinjaman')->with('success', 'Peminjaman berhasil diajukan!');

    }

    public function dataPinjaman()
    {
        $pinjaman = Peminjaman::with('ruangan')
            ->where('user_id', Auth::id())
            ->orderBy('tanggal_peminjaman', 'desc')
            ->get();

        return view('pages.user.data_pinjaman_user', compact('pinjaman'));
    }
}
