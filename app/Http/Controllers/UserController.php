<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{

    public function index(Request $request) {
        // $users = User::all();
        // return view('backoffice.users.index', ['users' => $users]);
        // return view('backoffice.users.index');


        if ($request->ajax()) {

            $data = User::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
          
        return view('backoffice.user.index');



    }
    
    public function datatable(Request $request)
    {
        if ($request->ajax()) {

            $data = User::query();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
          
        return view('backoffice.user.index');

    }






    public function create()
    {
        return view('backoffice.users.create');

        // return view('backoffice.users.create',[
        //     'lembaga_id' => Lembaga::all(),
        // ]);
    }











    public function store(Request $request)
    {
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password')); // Menggunakan Hash::make() untuk meng-hash kata sandi
    $user->save();

    // Response atau redirect sesuai kebutuhan
    }


    
}
