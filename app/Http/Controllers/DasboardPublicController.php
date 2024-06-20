<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\pengumuman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DasboardPublicController extends Controller
{
   
    // Homepage
    public function indexdes()
    {
        $berita = Berita::latest()->take(2)->get();
        $pengumuman = pengumuman::latest()->take(3)->get();

        foreach ($berita as $item) {
            $item->deskripsi = Str::limit($item->deskripsi, 100, '...');
        }
        
        foreach ($pengumuman as $item) {
            $item->deskripsi = Str::limit($item->deskripsi, 250, '...');
        }
        
        return view('home', ['berita' => $berita], ['pengumuman' => $pengumuman]);
    }

    // Halaman Berita
    public function indexBerita()
    {
        $berita = Berita::latest()->get();
        $news = Berita::latest()->take(3)->get();
    
        foreach ($berita as $item) {
            $item->deskripsi = Str::limit($item->deskripsi, 100, '...');
        }

        foreach ($news as $new){
            $new->judul = Str::limit($new->judul, 40, '...');
        }

        return view('public.berita', ['berita' => $berita], ['news' => $news]);
    }

    // Halaman Detail Berita
    public function detailBerita($id)
    {
        $berita = Berita::findOrFail($id);
        
        return view('public.detail_berita', ['berita' => $berita]);
    }

    // Halaman Pengumuman
    public function indexPengumuman()
    {
        $pengumuman = pengumuman::latest()->get();

        foreach ($pengumuman as $item) {
            $item->deskripsi = Str::limit($item->deskripsi, 250, '...');
        }

        return view('public.pengumuman', ['pengumuman' => $pengumuman]);
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
