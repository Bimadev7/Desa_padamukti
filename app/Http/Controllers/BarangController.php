<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\Peminjaman;
use Yajra\DataTables\Facades\DataTables;

class BarangController extends Controller
{  

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('backoffice.barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'stock_of_goods' => 'required|integer',
            'good_stuf' => 'required|integer',
            'bad_stuf' => 'required|integer',
            'department' => 'required|string|max:255',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->name = strip_tags(ucfirst($request->name));
        $barang->description = strip_tags($request->description);
        $barang->stock_of_goods = strip_tags($request->stock_of_goods);
        $barang->good_stuf = strip_tags($request->good_stuf);
        $barang->bad_stuf = strip_tags($request->bad_stuf);
        $barang->good_stuf = strip_tags($request->good_stuf);

        $barang->img = strip_tags($request->img);
        $barang->save();

        return redirect()->route('backoffice.barang.index')->with([
            'alert-type' => 'success',
            'message' => 'Barang berhasil diperbarui!'
        ]);


    }
 
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'stock_of_goods' => 'required|integer',
        //     'good_stuf' => 'required|integer',
        //     'bad_stuf' => 'required|integer',
        //     'department' => 'required|string|max:255',
        // ]);


        $barang = new Barang;
        $barang->name            = strip_tags(ucfirst($request->name));
        $barang->description           = strip_tags($request->description);
        $barang->img         =strip_tags($request->img);
        $barang->stock_of_goods            = strip_tags($request->stock_of_goods);
        $barang->good_stuf            = strip_tags($request->good_stuf);
        $barang->bad_stuf            = strip_tags($request->bad_stuf);
        $barang->department            = strip_tags($request->department);
        $barang->save();

        return redirect()->route('backoffice.barang.index')->with([
            'alert-type' => 'success',
            'message' => 'Barang berhasil ditambahkan!'
        ]);
    }

    public function create()
    {
        return view('backoffice.barang.create');
    }

    public function borrow(Request $request, $id) {
        // Validasi input
        $request->validate([
            'quantity' => 'required|numeric|min:1',
        ]);
        $barangIds = $request->input('barang_ids');
        $quantities = $request->input('quantities');
        // public function yourControllerMethod()
    {
        // Mengasumsikan Anda mengambil barangs dari sebuah model
        $barangs = Barang::all(); 
        return view('barangs.form_pinjam', ['barangs' => $barangs]);
    }
        // Dapatkan data user yang sedang login
        $user = Auth::user();

        // Dapatkan data barang berdasarkan ID
        $barang = Barang::findOrFail($id);

        // Pastikan stok barang mencukupi
        if ($barang->stock_of_goods < $request->quantity) {
            return redirect()->back()->with('error', 'Stok barang tidak mencukupi');
        }

        // Simpan data peminjaman ke dalam tabel peminjaman
        Peminjaman::create([
            'user_id' => $user->id,
            'barang_id' => $barang->id,
            'quantity' => $request->quantity,
        ]);

        // Kurangi stok barang
        $barang->stock_of_goods -= $request->quantity;
        $barang->save();

        return redirect()->route('barangs.index')->with('success', 'Barang berhasil dipinjam');
    }






    public function index(Request $request)
    {



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


    public function show(Peminjaman $id)
    {
        $peminjaman = Peminjaman::all();
        return view('barangs.show', compact('peminjaman'));
    } 

    public function show_peminjaman(Peminjaman $id)
    {
        $peminjaman = Peminjaman::all();
        return view('backoffice.peminjaman.show_peminjaman', compact('peminjaman'));
    } 

    public function form_pinjam(Barang $id )
    {
        $barangs = Barang::all();
        return view('barangs.form_pinjam', compact('barangs'));
    } 
    public function kembali()
    {
        $barangs = Barang::all();
        return view('barangs.kembali', compact('barangs'));
    }

    public function history()
    {
        $barangs = Barang::all();
        return view('barangs.kembali', compact('barangs'));
    }




    public function return(Request $request, $id){

    $barang = Barang::findOrFail($id);

    $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);

    $barang->stock_of_goods += $request->quantity;
    $barang->save();

    return redirect()->route('barangs.kembali')->with('success', 'Barang berhasil dikembalikan!');
    }


 // Mengambil record tertentu, misalnya
    public function showBarang(Barang $barang) {
        $barang = Barang::find(1);
        return view('public.form_pinjam', compact('barang'));
    }

    public function destroy($id)
    {
        Barang::findOrFail($id)->delete();
        return redirect()->route('backoffice.barang.index');
    }


}
