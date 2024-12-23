<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check()) {
            // Cek apakah role pengguna sesuai dengan yang diharapkan
            if (Auth::user()->roles != $role) {
                // Arahkan ke halaman home jika role tidak sesuai
                return redirect('/home');
            }
        } else {
            // Jika user belum login, arahkan ke halaman login
            return redirect('/login');
        }

        return $next($request); // Lanjutkan jika role sesuai
    }
}


