<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Ruangan;
use App\Models\RequestPassword;
use App\Models\KalenderAcara;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        return view('pages.admin.peminjaman', compact('peminjaman'));
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
        return view('pages.admin.password_requests', compact('requests'));
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
        return view('pages.admin.data_histori', compact('history'));
    }

    //profil admin
    public function profile()
    {
        $admin = Auth::user();
        return view('pages.admin.profile', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $admin = Auth::user();

        $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $admin->username = $request->username;
        $admin->nama = $request->nama;
        $admin->email = $request->email;

        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('foto_profil', $filename, 'public');
            $admin->foto_profil = $path;
        }

        $admin->save();

        return redirect()->route('admin.profile')->with('success', 'Profil berhasil diperbarui');
    }
    public function dataPinjamanAdmin()
    {
        $peminjaman = Peminjaman::latest()->get();
        return view('pages.admin.data_pinjaman_admin', compact('peminjaman'));
    }

    //profil admin
    public function profile()
    {
        $admin = Auth::user();
        return view('pages.admin.profile', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $admin = Auth::user();

        $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $admin->username = $request->username;
        $admin->nama = $request->nama;
        $admin->email = $request->email;

        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('foto_profil', $filename, 'public');
            $admin->foto_profil = $path;
        }

        $admin->save();

        return redirect()->route('admin.profile')->with('success', 'Profil berhasil diperbarui');
    }

    // Routing untuk halaman data histori
    public function dataHistori()
    {
        $history = Peminjaman::all();
        return view('pages.admin.data_histori', compact('history'));
    }

    // Routing untuk halaman data pinjaman admin
    public function listPeminjaman()
    {
        $peminjaman = Peminjaman::where('status', 'menunggu')->latest()->get();
        return view('pages.admin.data_pinjaman_admin', compact('peminjaman'));
    }
}

