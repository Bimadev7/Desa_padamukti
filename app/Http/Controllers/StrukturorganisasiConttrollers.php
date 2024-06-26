<?php

namespace App\Http\Controllers;
use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StrukturorganisasiConttrollers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = StrukturOrganisasi::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('backoffice.strukturorganisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           // Simpan gambar ke direktori yang ditentukan
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('images'), $imageName);

    // Simpan data ke database
    $berita = new Berita([
        'judul' => $request->get('judul'),
        'caption_capture' => $request->get('caption_capture'),
        'deskripsi_singkat' => $request->get('deskripsi_singkat'),
        'penulis' => $request->get('penulis'),
        'image' => $imageName, 
        'kategori_id' => $request->get('kategori_id'),

    ]);
    $berita->save();

 
                     return redirect()->route('backoffice.berita.index')->with([
                        'alert-type' => 'success',
                        'message' => 'Data Order Berhasil Ditambahkan!'
                    ]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
