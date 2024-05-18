<?php

namespace App\Http\Controllers;
use App\Models\Barang; 

use Illuminate\Http\Request;


class DasboardController extends Controller
{
    //
    // public function index()
    // {

    // return view('public.index');
    // }  
    public function index()
    {
        return view('public.index'); // Misalnya, kita mengembalikan view 'dashboard.index'
    }
    public function welcome()
    {
        return view('public.welcome'); // Misalnya, kita mengembalikan view 'dashboard.index'
    }
    public function dasboard()
    {
    $barang = Barang::all(); // Mengambil semua data Barang dari database
        return view('backoffice.main', ['barangs' => $barang]);
    }   

    
}
