<?php




namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{ 
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

        public function store(Request $request)
        {
            // Validasi input untuk memastikan barang_id adalah array
            $validatedData = $request->validate([
                'barang_id' => 'required|array',
                'barang_id.*' => 'required|exists:barang,id',
            ]);
    
            // Inisialisasi variabel untuk menyimpan error
            $errors = [];
    
            // Proses peminjaman untuk setiap barang yang dipilih
            foreach ($validatedData['barang_id'] as $barang_id) {
                // Ambil quantity dari request
                $quantity = $request->input('quantity.' . $barang_id);
    
                // Hanya proses jika quantity diisi dan valid
                if (!is_null($quantity) && $quantity > 0) {
                    // Dapatkan barang yang akan dipinjam
                    $barang = Barang::find($barang_id);
    
                    // Periksa apakah stok mencukupi
                    if ($barang->stock_of_goods >= $quantity) {
                        // Kurangi stok barang
                        $barang->stock_of_goods -= $quantity;
                        $barang->save();
    
                        // Buat peminjaman
                        Peminjaman::create([
                            'user_id' => Auth::id(),
                            'barang_id' => $barang_id,
                            'quantity' => $quantity,
                            // 'status' => 'pending',
                        ]);
                    } else {
                        $errors[] = 'Stok barang ' . $barang->name . ' tidak mencukupi.';
                    }
                }
            }
    
            // Jika ada error, kembalikan dengan error message
            if (!empty($errors)) {
                return redirect()->back()->withErrors($errors);
            }
    
            // Jika berhasil, kembalikan ke halaman index dengan pesan sukses
            return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil.');
        }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'barang_id.*' => 'required|exists:barang,id',
    //         'quantity.*' => 'required|integer|min:1',
    //     ]);

    //     foreach ($validatedData['barang_id'] as $index => $barang_id) {
    //         $quantity = $validatedData['quantity'][$index];

    //         // Dapatkan barang yang akan dipinjam
    //         $barang = Barang::find($barang_id);

    //         // Periksa apakah stok mencukupi
    //         if ($barang->stock_of_goods >= $quantity) {
    //             // Kurangi stok barang
    //             $barang->stock_of_goods -= $quantity;
    //             $barang->save();

    //             // Buat peminjaman
    //             Peminjaman::create([
    //                 'user_id' => Auth::id(),
    //                 'barang_id' => $barang_id,
    //                 'quantity' => $quantity,
    //                 // 'status' => 'pending',
    //             ]);
    //         } else {
    //             return redirect()->back()->withErrors(['msg' => 'Stok barang ' . $barang->name . ' tidak mencukupi.']);
    //         }
    //     }

    //     return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil.');
    // }

    

    // edit baru


    public function create()
    {
        $barang = Barang::all();
        return view('peminjaman.create', compact('barang'));
    }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'barang_id.*' => 'required|exists:barang,id',
    //         'quantity.*' => 'required|integer|min:1',
    //     ]);

    //     foreach ($validatedData['barang_id'] as $index => $barang_id) {
    //         Peminjaman::create([
    //             'user_id' => Auth::id(),
    //             'barang_id' => $barang_id,
    //             'quantity' => $validatedData['quantity'][$index],
    //             'status' => 'pending',
    //         ]);
    //     }

    //     return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil.');
    // }

    public function index()
    {
        $peminjaman = Peminjaman::where('user_id', Auth::id())->get();
        return view('peminjaman.index', compact('peminjaman'));
    }















    // old
    // public function index()
    // {
    //     $userId = Auth::id();
    //     $borrowedItems = Peminjaman::where('user_id', $userId)->with('barang')->get();
    //     return view('peminjaman.index', compact('borrowedItems'));
    // }

    // public function show()
    // {
    //     $userId = Auth::id();
    //     $peminjaman = Peminjaman::where('user_id', $userId)->with('barang')->get();
    //     return view('peminjaman.show', compact('peminjaman'));
    // }

    // public function store(Request $request, $barangId)
    // {
    //     $user = Auth::user();
    //     $barang = Barang::find($barangId);

    //     // Validasi jumlah barang yang dipinjam tidak melebihi stok
    //     if ($barang->stock_of_goods < $request->quantity) {
    //         return redirect()->back()->with('error', 'Jumlah barang yang dipinjam melebihi stok');
    //     }

    //     // Buat catatan peminjaman
    //     Peminjaman::create([
    //         'user_id' => $user->id,
    //         'barang_id' => $barang->id,
    //         'quantity' => $request->input('quantity'),
    //         'status' => 'dipinjam'
    //     ]);

    //     // Kurangi stok barang
    //     $barang->stock_of_goods -= $request->quantity;
    //     $barang->save();

    //     return redirect()->route('barangs.index')->with('success', 'Barang berhasil dipinjam');
    // }

    // public function return(Request $request, $id)
    // {
    //     $peminjaman = Peminjaman::find($id);

    //     // Update status peminjaman menjadi 'dikembalikan'
    //     $peminjaman->update(['status' => 'dikembalikan']);

    //     // Tambah stok barang kembali
    //     $barang = Barang::find($peminjaman->barang_id);
    //     $barang->stock_of_goods += $peminjaman->quantity;
    //     $barang->save();

    //     return redirect()->route('peminjaman.index')->with('success', 'Barang berhasil dikembalikan');
    // }

    // public function borrow(Request $request, $barangId)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'quantity' => 'required|numeric|min:1',
    //     ]);

    //     // Dapatkan data user yang sedang login
    //     $user = Auth::user();

    //     // Dapatkan data barang berdasarkan ID
    //     $barang = Barang::findOrFail($barangId);

    //     // Pastikan stok barang mencukupi
    //     if ($barang->stock_of_goods < $request->quantity) {
    //         return redirect()->back()->with('error', 'Stok barang tidak mencukupi');
    //     }

    //     // Simpan data peminjaman ke dalam tabel peminjaman
    //     Peminjaman::create([
    //         'user_id' => $user->id,
    //         'barang_id' => $barang->id,
    //         'quantity' => $request->quantity,
    //         'status' => 'dipinjam',
    //     ]);

    //     // Kurangi stok barang
    //     $barang->stock_of_goods -= $request->quantity;
    //     $barang->save();

    //     return redirect()->route('barangs.index')->with('success', 'Barang berhasil dipinjam');
    // }
}







// old
// namespace App\Http\Controllers;

// use App\Models\Peminjaman;
// use App\Models\Barang;
// use App\Models\User;
// use Illuminate\Http\Request;

// class PeminjamanController extends Controller
// {
// // start

// public function store(Request $request, $barangId)
//     {
//         $user = Auth::user();
//         $barang = Barang::find($barangId);

//         if ($barang->stock_of_goods < $request->quantity) {
//             return redirect()->back()->with('error', 'Jumlah barang yang dipinjam melebihi stok');
//         }

//         Peminjaman::create([
//             'user_id' => $user->id,
//             'barang_id' => $barang->id,
//             'quantity' => $request->input('quantity'),
//             'status' => 'dipinjam'
//         ]);

//         $barang->stock_of_goods -= $request->quantity;
//         $barang->save();

//         return redirect()->route('barangs.index')->with('success', 'Barang berhasil dipinjam');
//     }



//     // end
//     // public function index()
//     // {
//     //     $peminjaman = Peminjaman::with('user', 'barang')->get();
//     //     return view('peminjaman.index', compact('peminjaman'));
//     // }

//     public function create()
//     {
//         $users = User::all();
//         $barangs = Barang::all();
//         return view('peminjaman.create', compact('users', 'barangs'));
//     }

//     // public function store(Request $request)
//     // {
//     //     $request->validate([
//     //         'user_id' => 'required|exists:users,id',
//     //         'barang_id' => 'required|exists:barang,id',
//     //         'quantity' => 'required|integer|min:1',
//     //     ]);

//     //     $barang = Barang::find($request->barang_id);

//     //     if (!$barang) {
//     //         return redirect()->back()->withErrors(['msg' => 'Barang not found']);
//     //     }

//     //     if ($barang->stock_of_goods < $request->quantity) {
//     //         return redirect()->back()->withErrors(['msg' => 'Stock not sufficient']);
//     //     }

//     //     $peminjaman = new Peminjaman();
//     //     $peminjaman->user_id = $request->user_id;
//     //     $peminjaman->barang_id = $request->barang_id;
//     //     $peminjaman->quantity = $request->quantity;
//     //     $peminjaman->status = 'borrowed';
//     //     $peminjaman->save();

//     //     // Kurangi stok barang setelah peminjaman berhasil
//     //     $barang->stock_of_goods -= $request->quantity;
//     //     $barang->save();

//     //     return redirect()->route('peminjaman.index')->with('success', 'Item borrowed successfully');
//     // }

//     public function return(Request $request, $id)
//     {
//         $peminjaman = Peminjaman::findOrFail($id);

//         if ($peminjaman->status == 'returned') {
//             return redirect()->back()->withErrors(['msg' => 'Item already returned']);
//         }

//         $barang = Barang::find($peminjaman->barang_id);
//         $barang->stock_of_goods += $peminjaman->quantity;
//         $barang->save();

//         $peminjaman->status = 'returned';
//         $peminjaman->save();

//         return redirect()->route('peminjaman.index')->with('success', 'Item returned successfully');
//     }
// }

