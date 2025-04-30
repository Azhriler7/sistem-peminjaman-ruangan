<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Ruangan;
use App\Models\RequestPassword;
use App\Models\KalenderAcara;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Dashboard admin
    public function adminDashboard()
    {
        $totalPeminjaman = Peminjaman::count();
        $pendingRequests = Peminjaman::where('status', 'menunggu')->count();
        $totalRuangan = Ruangan::count();
        $ruangan = Ruangan::all();

        return view('pages.admin.dashboard', compact(
            'totalPeminjaman',
            'pendingRequests',
            'totalRuangan',
            'ruangan'
        ));
    }

    // Tampilkan semua peminjaman
    public function dataPeminjaman()
    {
        $peminjaman = Peminjaman::latest()->get();
        return view('pages.admin.peminjaman.index', compact('peminjaman'));
    }

    // Verifikasi peminjaman (terima/tolak)
    public function verifikasiPeminjaman(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:diterima,ditolak',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->status = $request->status;
        $peminjaman->save();

        // Tambah ke kalender jika diterima
        if ($request->status === 'diterima') {
            KalenderAcara::create([
                'peminjaman_id' => $peminjaman->id,
                'nama_acara' => $peminjaman->nama_acara,
                'tanggal' => $peminjaman->tanggal_peminjaman,
                'waktu_mulai' => $peminjaman->waktu_mulai,
                'waktu_selesai' => $peminjaman->waktu_selesai,
                'ruangan_id' => $peminjaman->ruangan_id,
            ]);
        }

        return back()->with('success', 'Status peminjaman diperbarui.');
    }

    // Tampilkan semua request password dari user
    public function requestPassword()
    {
        $requests = RequestPassword::where('status', 'menunggu')->latest()->get();
        return view('pages.admin.password_requests.index', compact('requests'));
    }

    // Verifikasi perubahan password
    public function prosesPassword(Request $request, $id)
    {
        $requestData = RequestPassword::findOrFail($id);

        if ($request->action === 'terima') {
            DB::table('users')->where('username', $requestData->username)->update([
                'password' => $requestData->new_password, // Sudah di-enkripsi saat disimpan
            ]);
            $requestData->status = 'diterima';
        } else {
            $requestData->status = 'ditolak';
        }

        $requestData->save();

        return back()->with('success', 'Request password berhasil diproses.');
    }

    // Tampilkan semua notifikasi request
    public function notifikasi()
    {
        $requests = RequestPassword::latest()->get();
        return view('pages.admin.notifikasi', compact('requests'));
    }

    // Menampilkan riwayat peminjaman
    public function history()
    {
        $history = Peminjaman::whereIn('status', ['diterima', 'ditolak'])->latest()->get();
        return view('pages.admin.history.index', compact('history'));
    }
}
