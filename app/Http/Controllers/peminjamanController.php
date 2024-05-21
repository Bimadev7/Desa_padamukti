<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('user', 'barang')->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $users = User::all();
        $barangs = Barang::all();
        return view('peminjaman.create', compact('users', 'barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'barang_id' => 'required|exists:barang,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $barang = Barang::find($request->barang_id);

        if (!$barang) {
            return redirect()->back()->withErrors(['msg' => 'Barang not found']);
        }

        if ($barang->stock_of_goods < $request->quantity) {
            return redirect()->back()->withErrors(['msg' => 'Stock not sufficient']);
        }

        $peminjaman = new Peminjaman();
        $peminjaman->user_id = $request->user_id;
        $peminjaman->barang_id = $request->barang_id;
        $peminjaman->quantity = $request->quantity;
        $peminjaman->status = 'borrowed';
        $peminjaman->save();

        // Kurangi stok barang setelah peminjaman berhasil
        $barang->stock_of_goods -= $request->quantity;
        $barang->save();

        return redirect()->route('peminjaman.index')->with('success', 'Item borrowed successfully');
    }

    public function return(Request $request, $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status == 'returned') {
            return redirect()->back()->withErrors(['msg' => 'Item already returned']);
        }

        $barang = Barang::find($peminjaman->barang_id);
        $barang->stock_of_goods += $peminjaman->quantity;
        $barang->save();

        $peminjaman->status = 'returned';
        $peminjaman->save();

        return redirect()->route('peminjaman.index')->with('success', 'Item returned successfully');
    }
}
