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
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_singkat' => 'required|string',
            'deskripsi' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        Berita::create([
            'judul' => $request->judul,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);

        return redirect()->route('backoffice.berita.index')
                         ->with(['alert-type' => 'success', 'message' => 'Berita berhasil ditambahkan.']);
    }

    // public function store(Request $request)
    //     {

    //         $data = new Berita;
    //         $data->judul = strip_tags(ucfirst($request->judul));
    //         $data->deskripsi_singkat = strip_tags($request->deskripsi_singkat);
    //         $data->deskripsi = strip_tags($request->deskripsi);
        
    //             dd($request);


            // if ($request->hasFile('image')) {
            //     $image = $request->file('image');
            //     $imageName = time().'.'.$image->getClientOriginalExtension();
            //     $image->move(public_path('images/berita'), $imageName);
            //     dd($image);
            //     $validatedData['image'] = 'images/berita/'.$imageName; // Save image path in data
            //   }
            // Proses upload gambar
            // if ($request->hasFile('gambar')) {
            //     $image = $request->file('gambar');
            //     $imageName = time().'.'.$image->getClientOriginalExtension();
            //     $image->move(public_path('images/berita'), $imageName); // Simpan gambar di public/images/berita
            //     $data->image = 'images/berita/'.$imageName; // Simpan lokasi gambar ke dalam kolom image
            // }
        
        //     $data->save();
        //     return redirect()->route('backoffice.berita.index')->with([
        //         'alert-type' => 'success',
        //         'message' => 'Data Berita Berhasil Ditambahkan!'
        //     ]);

        // }

    // public function store(Request $request)
    // {

    // $data = new Berita;
    // $data->judul = strip_tags(ucfirst($request->judul));
    // $data->deskripsi_singkat = strip_tags($request->deskripsi_singkat);
    // $data->deskripsi = strip_tags($request->deskripsi);
    // // Proses upload gambar
    //     if ($request->hasFile('gambar')) {
    //         $image = $request->file('gambar');
    //         $imageName = time().'.'.$image->getClientOriginalExtension();
    //         Storage::disk('public')->put('images/berita/'.$imageName, file_get_contents($image));
    //         $data->gambar = 'images/berita/'.$imageName;
    //     }
    // $data->save();
    // return redirect()->route('backoffice.berita.index')->with([
    //     'alert-type' => 'success',
    //     'message' => 'Data Order Berhasil Ditambahkan!'
    // ]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $data = new Berita;
    //     $data->judul            = strip_tags(ucfirst($request->judul));
    //     $data->deskripsi_singkat           = strip_tags($request->deskripsi_singkat);
    //     $data->deskripsi           = strip_tags($request->deskripsi);
      

    //     $data->save();
    //     return redirect()->route('backoffice.berita.index')->with([
    //         'alert-type' => 'success',
    //         'message' => 'Data Order Berhasil Ditambahkan!'
    //     ]);
    // }

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
