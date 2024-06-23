<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Demografidesa;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class DemografidesaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            
            $demografidesa = Demografidesa::query();

            
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('backoffice.demografidesa.index');
    }
















}
