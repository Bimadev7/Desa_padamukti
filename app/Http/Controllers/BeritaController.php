<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Berita::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('backoffice.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.berita.create');
        
    }

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
        'deskripsi' => $request->get('deskripsi'),
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
        return view('backoffice.berita.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        if (!$berita) {
            return redirect()->route('backoffice.berita.index')->with('error', 'Berita tidak ditemukan.');
        }
        return view('backoffice.berita.edit', compact('berita'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Temukan data berdasarkan ID
        $berita = Berita::findOrFail($id);
        // $berita = DataModel::all();

        // Update data
        $berita->judul = $request->judul;
        $berita->deskripsi_singkat = $request->deskripsi_singkat;
        $berita->deskripsi = $request->deskripsi;

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $filename); // Simpan gambar ke storage
            $berita->image = $filename; // Simpan nama file gambar ke kolom 'image' dalam database
        }

        // Simpan perubahan data
        $berita->save();

        // Redirect dengan pesan sukses
        return redirect()->route('backoffice.berita.index')->with([
            'alert-type' => 'success',
            'message' => 'Data berhasil diperbarui.'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
