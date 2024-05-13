<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function store(Request $request)
    {
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password')); // Menggunakan Hash::make() untuk meng-hash kata sandi
    $user->save();

    // Response atau redirect sesuai kebutuhan
    }


    
}
