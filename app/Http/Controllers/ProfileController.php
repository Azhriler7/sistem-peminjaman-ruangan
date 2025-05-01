<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto_profil')) {
            $user->foto_profil = $request->file('foto_profil')->store('profil', 'public');
        }

        $user->update($request->only('nama', 'nim', 'jurusan', 'foto_profil'));

        return back()->with('success', 'Profil diperbarui.');
    }
}