<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\pengumuman;
use App\Models\ProfilDesa;
use App\Models\DemografiDesa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DasboardPublicController extends Controller
{
   
    // Homepage
    public function indexdes()
    {
        $berita = Berita::latest()->take(4)->get();
        foreach ($berita as $item) {
            $item->judul = Str::limit($item->judul, 40, '...');
            $item->deskripsi = Str::limit($item->deskripsi, 100, '...');
        }
        
        $pengumuman = pengumuman::latest()->take(3)->get();
        foreach ($pengumuman as $item) {
            $item->deskripsi = Str::limit($item->deskripsi, 250, '...');
        }

        $demografi = DemografiDesa::all();
        
        return view('home', [
            'berita' => $berita,
            'pengumuman' => $pengumuman,
            'demografi' => $demografi
        ]);
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

        $news = Berita::latest()->take(3)->get();
        foreach ($news as $new){
            $new->judul = Str::limit($new->judul, 40, '...');
        }

        return view('public.detail_berita', ['berita' => $berita], ['news' => $news]);
    }

    // Halaman Pengumuman
    public function indexPengumuman()
    {
        $pengumuman = pengumuman::latest()->get();

        foreach ($pengumuman as $item) {
            $item->deskripsi = Str::limit($item->deskripsi, 250, '...');
        }

        $news = pengumuman::latest()->take(3)->get();
        foreach ($news as $new){
            $new->judul = Str::limit($new->judul, 40, '...');
        }

        return view('public.pengumuman', ['pengumuman' => $pengumuman], ['news' => $news]);
    }

    // Halaman Detail Pengumuman
    public function detailPengumuman($id)
    {
        $pengumuman = pengumuman::findOrFail($id);

        $news = pengumuman::latest()->take(3)->get();
        foreach ($news as $new){
            $new->judul = Str::limit($new->judul, 40, '...');
        }

        return view('public.detail_pengumuman', ['pengumuman' => $pengumuman], ['news' => $news]);
    }

    // Halaman Profil Desa - Tentang Desa
    public function tentangDesa()
    {
        $tentang_desa = DB::table('profil_desa')->value('tentang_desa');

        // return view('public.tentang', compact('tentang_desa'));
        return view('public.tentang', ['tentang_desa' => $tentang_desa]);
    }

    // Halaman Profil Desa - Visi Misi
    public function visiMisi()
    {
        $visi = DB::table('profil_desa')->value('visi');
        $misi = DB::table('profil_desa')->value('misi');

        return view('public.visimisi', ['visi' => $visi], ['misi' => $misi]);
    }

    // Halaman Profil Desa - Sejarah Desa
    public function sejarah()
    {
        $sejarah = DB::table('profil_desa')->value('sejarah_desa');

        return view('public.sejarah', ['sejarah' => $sejarah]);
    }

    public function geografis()
    {
        $geografis = DB::table('profil_desa')->value('geografis');
        
        return view('public.geografis', ['geografis' => $geografis]);
    }

    public function main()
    {
        // $berita = Berita::all();
     
        return view('layout.main2');

    }
}
