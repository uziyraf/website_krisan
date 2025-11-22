<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;
use Illuminate\Support\Facades\Session; 

class TrackVisitors
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user ini sudah dihitung dalam sesi ini?
        if (!Session::has('visitor_counted')) {

            // Jika belum, simpan ke database
            Visitor::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                'date' => now()->toDateString(),
            ]);

            // Tandai sesi ini agar tidak dihitung lagi saat refresh page
            Session::put('visitor_counted', true);
        }

        return $next($request);
    }
}