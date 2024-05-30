<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function showLoginForm()
    {
        return view('error');
    }

    /**
     * Memeriksa informasi login dan mengautentikasi pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {

        if (Auth::user()->status == 'draft') {
            Auth::logout();
            return redirect()->back()->with('status', 'Akun Anda belum aktif. Silakan hubungi administrator.');
        }

       

        // Validasi data login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba mengautentikasi pengguna
        if (Auth::attempt($request->only('email', 'password'))) {
            // Autentikasi berhasil, arahkan pengguna ke dashboard atau halaman beranda
            return redirect()->intended('/dashboard');
        }

        // Autentikasi gagal, kembali ke halaman login dengan pesan error
        return back()->withInput($request->only('email'))->withErrors([
            'email' => 'Email atau password salah.',
        ]);

        // Ambil kredensial dari request
        $credentials = $request->only('email', 'password');

        // Lakukan autentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, redirect ke halaman beranda atau halaman yang ditentukan
            return redirect()->intended('/dashboard');
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan kesalahan
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Redirect to the home page or any other page you want
        return redirect('/');
    }

    
}

