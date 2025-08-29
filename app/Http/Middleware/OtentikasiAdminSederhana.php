<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OtentikasiAdminSederhana
{
   
public function handle(Request $request, Closure $next): Response
{
    // Cek apakah session 'is_admin_logged_in' bernilai true
    if (session('is_admin_logged_in')) {
        return $next($request); // Jika ya, izinkan akses
    }

    // Jika tidak, arahkan ke halaman login
    return redirect()->route('login');
}
    
}