<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PeminjamanController extends Controller
{
    // Halaman user: menampilkan semua peminjaman milik user yang login
    public function dataPeminjamanUser()
{
    $peminjamans = Peminjaman::with('ruangan')->latest()->get();

    return view('pages.user.data_pinjaman_user', compact('peminjamans'));
}

    // Halaman admin: menampilkan semua peminjaman
    public function dataPinjamanAdmin()
    {
        $peminjamans = Peminjaman::with('ruangan')->orderBy('tanggal_peminjaman', 'desc')->get();
        return view('pages.admin.data_pinjaman_admin', compact('peminjamans'));
    }

    // Halaman form pengajuan
    public function create()
    {
        return view('pages.user.pengajuan');
    }

    // Menyimpan pengajuan baru
    public function storePengajuan(Request $request)
    {
        $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'nama_acara' => 'required|string|max:255',
            'ruangan_id' => 'required|integer',
            'kontak' => 'required|string|max:255',
            'tanggal_peminjaman' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'surat_permohonan' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'catatan' => 'nullable|string',
        ]);

        $filePath = null;
        if ($request->hasFile('surat_permohonan')) {
            $filePath = $request->file('surat_permohonan')->store('surat_permohonan', 'public');
        }

        Peminjaman::create([
            'user_id' => Auth::id(),
            'nama_peminjam' => $request->nama_peminjam,
            'nama_acara' => $request->nama_acara,
            'ruangan_id' => $request->ruangan_id,
            'kontak' => $request->kontak,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'surat_permohonan' => $filePath,
            'catatan' => $request->catatan,
            'status' => 'menunggu',
        ]);

        return redirect()->route('user.data_pinjaman')->with('success', 'Pengajuan berhasil dikirim.');
    }

    // Setujui pengajuan
    public function approve(Peminjaman $peminjaman)
    {
        $peminjaman->update(['status' => 'diterima']);
        return redirect()->route('admin.peminjaman')->with('success', 'Peminjaman disetujui.');
    }

    // Tolak pengajuan
    public function reject(Peminjaman $peminjaman)
    {
        $peminjaman->update(['status' => 'ditolak']);
        return redirect()->route('admin.peminjaman')->with('success', 'Peminjaman ditolak.');
    }

    // Menampilkan histori peminjaman yang telah diproses
    public function history()
    {
        $peminjamans = Peminjaman::whereIn('status', ['diterima', 'ditolak'])
            ->orderBy('tanggal_peminjaman', 'desc')
            ->get();

        return view('pages.admin.history_peminjaman', compact('peminjamans'));
    }
}
