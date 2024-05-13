<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(Request $request)
    {

        $barang = Barang::all(); // atau apapun query yang Anda gunakan untuk mendapatkan data barang
        return view('backoffice.barang.index', compact('barang'));
        if ($request->ajax()) {
            $barang = Barang::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        // return view('users');
        return view('backoffice.barang.index', compact('barang'));

    }
    

    //     public function index()
    // {
    //     // Mengambil semua data barang dari database
    //     $barang = Barang::all();

    //     // Mengirim data barang ke view
    //     return view('backoffice.barang.index', compact('barang'));

        
    // }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data  = Barang::query();
            $data->select('id', 'nama', 'deskripsi', 'rasio_minimal', 'level_teknologi', 'level_keterampilan', 'status');
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('statuz', function ($q) {
                    if($q->status == 'done'){
                        return '<span class="badge bg-success">Selesai</span>';
                    } else if($q->status == 'process'){
                        return '<span class="badge bg-primary">Proses</span>';
                    }else if($q->status == 'draft'){
                        return '<span class="badge bg-info">Draft</span>';
                    }else if($q->status == 'read'){
                        return '<span class="badge bg-warning">Baca</span>';
                    } else{
                        return '<span class="badge bg-danger">Tolak</span>';
                    }
                })
              
                ->addColumn('action', function ($q) {
                    $actionBtn = 
                    "<div class='d-flex justify-content-between'><a class='btn btn-link btn-sm text-primary' title='Edit' href='/backoffice/order/" . $q->id . "/edit'><i class='fas fa-pen-fancy'></i></a>
                    <a class='btn btn-link btn-sm text-info' title='Lihat Detail' href='/backoffice/order/" . $q->id . "/'><i class='fas fa-eye'></i></a>
                    <button class='btn btn-link btn-sm text-danger' title='Hapus' onclick='formHapus(" . $q->id . ")'><i class='fas fa-trash'></i></button></div>";
                    
                    return $actionBtn;
                })
                ->rawColumns(['action', 'deskripsi', 'statuz'])
                ->toJson();
        }
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
