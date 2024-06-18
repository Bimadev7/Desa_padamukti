<?php

namespace App\Http\Controllers;
use App\Models\Berita;

use Illuminate\Http\Request;

class DasboardPublicController extends Controller
{
   

   

    public function indexdes()
    {
        $berita = Berita::all();
     
        return view('home', ['home' => $berita]);
        // return view('public.berita'); 
    }

    public function index()
    {
        $berita = Berita::all();
     
        return view('public.berita', ['berita' => $berita]);
    }

    public function detailBerita($id)
    {
        $berita = Berita::findOrFail($id);
        
        return view('public.berita1', ['berita' => $berita]);
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
