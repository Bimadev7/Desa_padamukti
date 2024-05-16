<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;
use Yajra\DataTables\Facades\DataTables;

class BarangController extends Controller
{
   
    public function index(Request $request)
    {
    
        // $barang = Barang::all();
        // return view('backoffice.barang.index')->with(compact('barang'));

        if ($request->ajax()) {

            $data = Barang::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
          
        return view('backoffice.barang.index');
    



        
    }

    // public function datatable(Request $request){


    //     if($request->ajax()){

    //         $data = new Barang;
    //         $data = $data->latest();

    //         return DataTables::of($data)
    //         ->addColumn('nama',function($data){
    //             return 'ini nomor';
    //         })
    //         ->addColumn('deskripsi',function($data){
    //             return '<img src="'.asset('storage/photo-user/'.$data->image).'" alt="" width="100">';
    //         })
    //         ->addColumn('rasio_minimal',function($data){
    //             return $data->name;
    //         })
    //         ->addColumn('email',function($data){
    //             return $data->email;
    //         })
    //         ->addColumn('action',function($data){
    //             return '<a href="'.route('admin.user.edit',['id' => $data->id]).'" class="btn btn-primary"><i class="fas fa-pen"></i> Edit</a>
    //             <a data-toggle="modal" data-target="#modal-hapus'.$data->id.'" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>';
    //         })
    //         ->rawColumns(['photo','action'])
    //         ->make(true);
    //     }

    //     return view('datatable.serverside',compact('request'));
    // }
    

    // dari yanura datatable
    // public function datatable(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data  = Barang::query();
    //         $data->select('id', 'nama', 'deskripsi', 'rasio_minimal', 'level_teknologi', 'level_keterampilan', 'stok_barang');
    //         return datatables()->of($data)
    //             ->addIndexColumn()
                

           
    //             ->addColumn('action', function ($q) {
    //                 $actionBtn = 
    //                 "<div class='d-flex justify-content-between'><a class='btn btn-link btn-sm text-primary' title='Edit' href='/backoffice/order/" . $q->id . "/edit'><i class='fas fa-pen-fancy'></i></a>
    //                 <a class='btn btn-link btn-sm text-info' title='Lihat Detail' href='/backoffice/order/" . $q->id . "/'><i class='fas fa-eye'></i></a>
    //                 <button class='btn btn-link btn-sm text-danger' title='Hapus' onclick='formHapus(" . $q->id . ")'><i class='fas fa-trash'></i></button></div>";
                    
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['action'])
    //             // ->toJson();
    //         ->make(true);


    //     // return view('backoffice.barang.index')->with(compact('barang'));
    // }
    //     return view('backoffice.barang.index',compact('barang'));

        
    // }



    // data table bener
    // public function datatable(Request $request)
    // {
    // if ($request->ajax()) {
    //     $data = Barang::select('id', 'nama', 'deskripsi', 'rasio_minimal', 'level_teknologi', 'level_keterampilan', 'stok_barang');
        
    //     return datatables()->of($data)
    //         ->addIndexColumn()
    //         ->addColumn('action', function ($q) {
    //             $actionBtn = "
    //             <div class='d-flex justify-content-between'>
    //                 <a class='btn btn-link btn-sm text-primary' title='Edit' href='/backoffice/order/" . $q->id . "/edit'><i class='fas fa-pen-fancy'></i></a>
    //                 <a class='btn btn-link btn-sm text-info' title='Lihat Detail' href='/backoffice/order/" . $q->id . "/'><i class='fas fa-eye'></i></a>
    //                 <button class='btn btn-link btn-sm text-danger' title='Hapus' onclick='formHapus(" . $q->id . ")'><i class='fas fa-trash'></i></button>
    //             </div>";
    //             return $actionBtn;
    //         })
    //         ->rawColumns(['action'])
    //         ->toJson();
    //         \Log::info($json);

    //         return $json;
    //      }
    
    // }



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
        //
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
        Barang::findOrFail($id)->delete();
        return redirect()->route('backoffice.barang.index');
    }
}
