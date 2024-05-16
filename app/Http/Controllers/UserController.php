<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //


    // public function index()
    // {
    //     $user = User::all();
    //     return view('backoffice.users.index')->with(compact('user'));
    // }
    // public function index() {
    //     return view('backoffice.user.index');
    // }

    public function index() {
        $users = User::all();
        return view('backoffice.users.index', ['users' => $users]);
        // return view('backoffice.users.index');
    }
    
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data  = User::query();
            $data->select('id', 'username', 'email', 'telp', 'email', 'address', 'status');
            return datatables()->of($data)
                ->addIndexColumn()
               
                
                ->addColumn('action', function ($q) {
                    $actionBtn = 
                    "<div class='d-flex justify-content-between'><a class='btn btn-link btn-sm text-primary' title='Edit' href='/backoffice/order/" . $q->id . "/edit'><i class='fas fa-pen-fancy'></i></a>
                    <a class='btn btn-link btn-sm text-info' title='Lihat Detail' href='/backoffice/order/" . $q->id . "/'><i class='fas fa-eye'></i></a>
                    <button class='btn btn-link btn-sm text-danger' title='Hapus' onclick='formHapus(" . $q->id . ")'><i class='fas fa-trash'></i></button></div>";
                    
                    return $actionBtn;
                })
                ->rawColumns(['action', 'lembaga_name', 'statuz'])
                ->toJson();
        }
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
