<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Memproses upaya login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek kredensial dengan yang ada di .env
        if ($credentials['username'] === env('ADMIN_USERNAME') && $credentials['password'] === env('ADMIN_PASSWORD')) {
            $request->session()->regenerate(); 
            session(['is_admin_logged_in' => true]); 
            
            return redirect()->intended('/admin/farmers'); // Arahkan ke dashboard admin
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'username' => 'Nama pengguna atau kata sandi salah.',
        ]);
    }

    // Memproses logout
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
}