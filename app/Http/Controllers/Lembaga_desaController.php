<?php

namespace App\Http\Controllers;
use App\Models\LembagaDesa;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


class Lembaga_desaController extends Controller
{
     public function index(Request $request)
    {
        if ($request->ajax()) {
            $lembagadesa = LembagaDesa::query();

            
            return Datatables::of($lembagadesa)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('backoffice.lembagadesa.index');
    }

    public function create()
    {
        return view('backoffice.lembagadesa.create');
    }


    public function edit($id)
        {
            $lembagadesa = LembagaDesa::findOrFail($id);
            return view('backoffice.lembagadesa.edit');
        }


        public function store(Request $request)
        {

            $lembagadesa = new LembagaDesa;
            $lembagadesa->nama_lembaga            = strip_tags(ucfirst($request->nama_lembaga));
            $lembagadesa->image            = strip_tags(ucfirst($request->image));
            $lembagadesa->alamat           = strip_tags($request->alamat);
            $lembagadesa->deskripsi_profil            = strip_tags($request->deskripsi_profil);
            $lembagadesa->save();
        

            return redirect()->route('lembagadesa.index')->with([
                'alert-type' => 'success',
                'message' => 'Data Lembaga Desa Berhasil Ditambahkan!'
            ]);
            
            

            }

            public function destroy($id)
            {
                
            try {
                $lembagadesa = LembagaDesa::findOrFail($id);
                $lembagadesa->delete();

                return response()->json(['message' => 'User berhasil dihapus.'], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Gagal menghapus LembagaDesa. ' . $e->getMessage()], 500);
            }
        }
        

        public function show($id)
        {
            $lembagadesa = LembagaDesa::findOrFail($id);
            return view('backoffice.lembagadesa.show')->with(compact('lembagadesa'));
        }





}
