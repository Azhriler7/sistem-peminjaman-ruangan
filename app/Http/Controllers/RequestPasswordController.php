<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestPassword;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RequestPasswordController extends Controller
{
    public function showForm()
    {
        return view('pages.forgot-password');
    }

    public function submitRequest(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'new_password' => 'required|min:6|confirmed',
        ]);

        RequestPassword::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'new_password' => Hash::make($validated['new_password']),
            'status' => 'pending',
        ]);

        return redirect('/login')->with('success', 'Request berhasil dikirim, tunggu konfirmasi admin.');
    }

    public function index()
    {
        $requests = RequestPassword::where('status', 'pending')->get();
        return view('admin.request-password', compact('requests'));
    }

    public function approve($id)
    {
        $request = RequestPassword::findOrFail($id);
        $user = User::where('username', $request->username)->where('email', $request->email)->first();

        if ($user) {
            $user->password = $request->new_password;
            $user->save();
            $request->status = 'diterima';
            $request->save();
            return back()->with('success', 'Password berhasil diperbarui.');
        }

        return back()->withErrors(['user' => 'User tidak ditemukan.']);
    }

    public function reject($id)
    {
        $request = RequestPassword::findOrFail($id);
        $request->status = 'ditolak';
        $request->save();

        return back()->with('info', 'Request ditolak.');
    }

    public function store(Request $request)
{
    $request->validate([
        'username' => 'required',
        'email' => 'required|email',
        'new_password' => 'required|min:6',
    ]);

    RequestPassword::create([
        'username' => $request->username,
        'email' => $request->email,
        'new_password' => Hash::make($request->new_password),
        'status' => 'pending',
    ]);

    return redirect()->back()->with('success', 'Permintaan reset password dikirim.');
}
}
