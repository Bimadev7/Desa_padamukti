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
        return view('backoffice.user.create');

       
    }











    public function store(Request $request)
    {
        // $request->validate([
          
        //     'username'              => ['required', 'string', 'max:2'],
        //     'telp'              => ['required', 'string', 'min:11','max:14'],
        //     'desc'              => ['required', 'string', 'max:255'],
        // ], [
        //     'name.required'     => 'Field nama wajib diisi!',

        //     'email.email'       => 'Email tidak valid!',
        //     'email.unique'      => 'Email sudah terdaftar!',
        // ]);

        $data = new User;
        $data->username            = strip_tags(ucfirst($request->username));
        $data->email           = strip_tags($request->email);
        $data->password         = strip_tags($request->password);
        $data->role            = strip_tags($request->role);
        $data->save();



        return redirect()->route('backoffice.user.index')->with([
            'alert-type' => 'success',
            'message' => 'Data Order Berhasil Ditambahkan!'
        ]);
        // return redirect()->back()->with('success', 'Data has been successfully submitted!');
        // return redirect()->route('backoffice.user.index')->with([
        //     'alert-type'    => 'success',
        //     'message'       => 'Data Order Berhasil Ditambahkan!'
        // ]);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('backoffice.order.index');
    }


    
}
