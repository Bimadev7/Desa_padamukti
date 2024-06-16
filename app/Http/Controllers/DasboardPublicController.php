<?php

namespace App\Http\Controllers;
use App\Models\Berita;

use Illuminate\Http\Request;

class DasboardPublicController extends Controller
{
   

    public function index()
    {
        $berita = Berita::all();
     
        return view('public.berita', ['Berita' => $berita]);
        // return view('public.berita'); 
    }

    public function main()
    {
        // $berita = Berita::all();
     
        return view('layout.main2');

    }

    public function tentang()
    {
     
        return view('public.tentang');
    }
}
