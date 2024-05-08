<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    

    public function index()
    {
        // Mengambil semua data barang dari database
        $barang = Barang::all();

        // Mengirim data barang ke view
        return view('backoffice.barang.index', compact('barang'));
    }

    public function edit($id) {
        // return $id;
        $barang = Barang::findOrFail($id);
        return view('backoffice.barang.edit')->with(compact('barang'));
    }



    public function create() {
        return view('backoffice.barang.create');
    }

    public function store(Request $request) {
        // return view('backoffice.barang.create');
        // return $request;

        $stok_barang = $request->barang_baik + $request->barang_rusak;


        $barang = new Barang;
        $barang->nama = $request->nama;
        $barang->deskripsi = $request->deskripsi;
        $barang->rasio_minimal = $request->rasio_minimal;
        $barang->gambar = $request->gambar;
        $barang->level_teknologi = $request->level_teknologi;
        $barang->jurusan = $request->jurusan;
        $barang->barang_baik = $request->barang_baik;
        $barang->barang_rusak = $request->barang_rusak;
        $barang->stok_barang = $stok_barang;
        $barang->save();

        

        return redirect()->route('backoffice.barang')->with([
            'alert-type' => 'success',
            'message' => 'Data Barang Berhasil Ditambahkan'
        ]);
    }

  

    public function update(Request $request) {  

        $stok_barang = $request->barang_baik + $request->barang_rusak;

        $barang = Barang::findOrFail($request->barang_id)->first();
        $barang->nama = $request->nama;
        $barang->deskripsi = $request->deskripsi;
        $barang->rasio_minimal = $request->rasio_minimal;
        $barang->gambar = $request->gambar;
        $barang->level_teknologi = $request->level_teknologi;
        $barang->jurusan = $request->jurusan;
        $barang->barang_baik = $request->barang_baik;
        $barang->barang_rusak = $request->barang_rusak;
        $barang->stok_barang = $stok_barang;
        $barang->save();

        return redirect()->route('backoffice.barang')->with([
            'alert-type' => 'success',
            'message' => 'Data Barang Berhasil Ditambahkan'
        ]);
    }

    public function destroy($id)
    {
        // return $id;
        Barang::findOrFail($id)->delete();
        return redirect()->route('backoffice.barang.index');
    }


}
