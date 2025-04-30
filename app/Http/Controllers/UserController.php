<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Ruangan;
use App\Models\KalenderAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function dashboard()
    {
        $totalPeminjaman = Peminjaman::where('user_id', Auth::id())->count();
        $peminjamanTerakhir = Peminjaman::where('user_id', Auth::id())->latest()->first() ?? null;
        $ruangan = Ruangan::all();
        return view('pages.user.dashboard', compact('totalPeminjaman', 'peminjamanTerakhir', 'ruangan'));
    }

    public function peminjamanForm()
    {
        $ruangan = Ruangan::all();
        return view('pages.user.peminjaman', compact('ruangan'));
    }

    public function submitPeminjaman(Request $request)
    {
        $request->validate([
            'ruangan_id' => 'required|exists:ruangan,id',
            'nama_acara' => 'required|string|max:255',
            'tanggal_peminjaman' => 'required|date',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required|after:waktu_mulai',
            'surat_permohonan' => 'required|file|mimes:pdf|max:2048',
            'catatan' => 'nullable|string|max:500',
        ]);

        $file = $request->file('surat_permohonan');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('surat_permohonan', $fileName, 'public');

        Peminjaman::create([
            'user_id' => Auth::id(),
            'ruangan_id' => $request->ruangan_id,
            'nama_acara' => $request->nama_acara,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'surat_permohonan' => $filePath,
            'catatan' => $request->catatan,
            'status' => 'menunggu',
        ]);

        return redirect()->route('user.peminjaman')->with('success', 'Peminjaman berhasil diajukan');
    }

    public function kalender()
    {
        $kalender = KalenderAcara::with('ruangan')->get();
        return view('pages.user.kalender', compact('kalender'));
    }

    public function history()
    {
        $history = Peminjaman::where('user_id', Auth::id())->latest()->get();
        return view('pages.user.history', compact('history'));
    }

    public function profile()
    {
        $user = User::find(Auth::id());
        $user = Auth::user();
        return view('pages.user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'jurusan' => 'required|string|max:255',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->nim = $request->nim;
        $user->email = $request->email;
        $user->jurusan = $request->jurusan;

        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('foto_profil', $filename, 'public');
            $user->foto_profil = $path;
        }

        $user->save();

        return redirect()->route('user.profile')->with('success', 'Profil berhasil diperbarui');
    }

    public function gedung()
    {
        $ruangan = Ruangan::all();
        return view('pages.user.gedung', compact('ruangan'));
    }

    public function ruanganAula()
    {
        return view('pages.user.ruang-aula');
    }

    public function ruanganDekanat()
    {
        return view('pages.user.ruang-dekanat');
    }

    public function ruanganVicon()
    {
        return view('pages.user.ruang-vicon');
    }

    public function ruanganCoE()
    {
        return view('pages.user.ruang-coe');
    }

    public function ruanganU()
    {
        return view('pages.user.ruang-u');
    }

    public function ruanganLabKom()
    {
        return view('pages.user.ruang-labkom');
    }

    public function pengajuan()
    {
        return view('pages.user.pengajuan');
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
