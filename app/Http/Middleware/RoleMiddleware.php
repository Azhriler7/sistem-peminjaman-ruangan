<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Periksa apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu.');
        }

        // Ambil user yang login
        $user = Auth::user();

        // Periksa apakah role user sesuai dengan yang diharapkan
        if ($user->role !== $role) {
            abort(403, 'Akses ditolak. Anda tidak memiliki hak akses.');
        }

        // Lanjutkan permintaan
        return $next($request);
    }
}
