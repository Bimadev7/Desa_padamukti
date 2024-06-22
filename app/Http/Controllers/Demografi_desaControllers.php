<?php

namespace App\Http\Controllers;
use App\Models\Demografi_desa;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class Demografi_desaControllers extends Controller
{
    

    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Demografi_desa::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('backoffice.demografi_desa.index');
    }












}
