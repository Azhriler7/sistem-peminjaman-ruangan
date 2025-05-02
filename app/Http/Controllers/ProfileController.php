<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Menampilkan halaman profil berdasarkan role
    public function show()
    {
        $user = Auth::user(); // perbaikan: pakai Auth::

        if ($user->role === 'admin') {
            return view('pages.admin.profile', compact('user'));
        } elseif ($user->role === 'user') {
            return view('pages.user.profile', compact('user'));
        }

        abort(403, 'Role tidak dikenali.');
    }

    // Update profil user/admin
/**
 * @param \Illuminate\Http\Request $request
 * @return \Illuminate\Http\RedirectResponse
 */
    public function update(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user(); // perbaikan: pakai Auth::

        $validated = $request->validate([
            'username'     => 'required|string|max:255',
            'email'        => 'required|email',
            'nama'         => 'nullable|string|max:255',
            'nim'          => 'nullable|string|max:20',
            'phone'        => 'nullable|string|max:20',
            'foto_profil'  => 'nullable|image|max:5120',
        ]);

        // Proses upload gambar
        if ($request->hasFile('foto_profil')) {
            // Hapus foto lama jika ada
            if ($user->foto_profil && Storage::disk('public')->exists($user->foto_profil)) {
                Storage::disk('public')->delete($user->foto_profil);
            }
        
            // Simpan foto baru
            $file = $request->file('foto_profil');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_photos', $filename, 'public');
        
            // Simpan path ke dalam array validated
            $validated['foto_profil'] = $path;
        }

        $user->update($validated);

        return back()->with('success', 'Profil berhasil diperbarui.');
    }
}
