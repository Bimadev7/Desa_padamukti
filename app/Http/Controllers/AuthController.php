<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function tes()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

       



        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            switch ($user->role) {
                case 'super_admin':
                    return redirect()->route('public.index');
                    break;
                case 'user':
                    return redirect()->route('backoffice.barang.index');
                    case 'admin':
                        return redirect()->route('backoffice.dashboard');
                    break;
                default:
                    return redirect()->route('layouts.index-2');
            }
        }

        return redirect()->route('login')->with('error', 'tidak valid');
    }

   

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('logout_alert', 'Anda telah berhasil keluar.');
    }

    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     // Redirect to the home page or any other page you want
    //     return redirect('/');
    // }
}


