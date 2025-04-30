<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestPassword;

class LupaPasswordController extends Controller
{
    public function showForm()
    {
        return view('pages.auth.lupa-password');
    }

    public function submitRequest(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        RequestPassword::create([
            'username' => $request->username,
            'email' => $request->email,
            'new_password' => bcrypt($request->new_password),
        ]);

        return redirect()->route('login')->with('success', 'Permintaan ubah password telah dikirim.');
    }
}
