<?php

namespace App\Http\Controllers;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;

class ProfilDesaVisiController extends Controller
{

    public function update(Request $request, string $id)
    {
        // $data = DataModel::findOrFail($id);
        $profildesa_visi = ProfilDesa::findOrFail($id);

        
        // Update data
        $profildesa_visi->visi = $request->visi;

        // Simpan perubahan data
        $profildesa_visi->save();

        // Redirect dengan pesan sukses
        return redirect()->route('profildesa_visi.index')->with([
            'alert-type' => 'success',
            'message' => 'Data berhasil diperbarui.'
        ]);
     
        
    }

    public function index()
    {
        $profildesa_visi = ProfilDesa::all(); // Ambil semua data dari model

        return view('backoffice.profildesa_visi.index', compact('profildesa_visi'));
    }
    // public function index()
    // {
    //     // Ambil semua data profil desa dari model
    //     $profildesa_visi = ProfilDesa::all();

    //     // Kemudian tampilkan view 'index' dengan mengirimkan data $profildesas
    //     return view('backoffice.profildesa_visi.index');

    // }

    
    // public function index()
    // {
        
    //     return view('backoffice.profildesa_visi.index');
        
    // }

    public function edit(string $id)
    {
        $profildesa_visi = ProfilDesa::findOrFail($id);
        return view('backoffice.profildesa_visi.edit')->with(compact('profildesa_visi'));
    }

  

    // public function index($id)
    // {
    //     $profildesa_visi = ProfilDesa::findOrFail($id);
    //     return view('backoffice.profildesa_visi.show')->with(compact('profildesa_visi'));
    // }

    public function show($id)
        {
            $profildesa_visi = ProfilDesa::findOrFail($id);
            return view('backoffice.profildesa_visi.show')->with(compact('profildesa_visi'));
        }

}
