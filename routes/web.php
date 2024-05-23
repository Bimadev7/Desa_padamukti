<?php
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormPinjamController;

// news





// $url = route('peminjaman.store', ['barang' =>]);

Route::post('peminjaman/{barang}', 'PeminjamanController@store')->name('peminjaman.store');


Route::middleware(['auth'])->group(function () {
    Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
    Route::post('peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
});

// news



























Route::get('backoffice/peminjaman/show_peminjaman/{id}', [BarangController::class, 'show_peminjaman'])->name('backoffice.peminjaman.show_peminjaman');

// news
Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
Route::post('/barangs/borrow/{id}', [PeminjamanController::class, 'store'])->name('barangs.borrow');

Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
Route::get('/barangs/{id}/show', [BarangController::class, 'show'])->name('barangs.show');



Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/backoffice/peminjaman/show_peminjaman', [BarangController::class, 'show'])->name('peminjaman.show');
    Route::post('/barangs/show/{id}', [PeminjamanController::class, 'store'])->name('barangs.show');
    Route::post('/barangs/borrow/{id}', [PeminjamanController::class, 'store'])->name('barangs.borrow');
    // Route::post('/barangs/show/{id}', [PeminjamanController::class, 'show'])->name('barangs.show');
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::post('/peminjaman/return/{id}', [PeminjamanController::class, 'return'])->name('peminjaman.return');
});





// end news










// 



Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
Route::post('/barangs/borrow/{id}', [BarangController::class, 'borrow'])->name('barangs.borrow');

Route::middleware(['auth'])->group(function () {
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::post('/peminjaman/{barang}', [PeminjamanController::class, 'store'])->name('peminjaman.store');
    Route::post('/peminjaman/return/{id}', [PeminjamanController::class, 'return'])->name('peminjaman.return');
});







// 


Route::get('/barangs/show/', [BarangController::class, 'show'])->name('barangs.show');

Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
Route::post('/barangs/borrow/{id}', [BarangController::class, 'borrow'])->name('barangs.borrow');
// routes/web.php
Route::post('/peminjaman/showBorrowedItems/{barang}', [PeminjamanController::class, 'borrow'])->name('peminjaman.borrow');
Route::post('/barangs/show/{barang}', [BarangController::class, 'show'])->name('barangs.show');


// use App\Http\Controllers\PeminjamanController;

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::post('/peminjaman/borrow/{barang}', [PeminjamanController::class, 'borrow'])->name('peminjaman.borrow');
Route::post('/peminjaman/return/{peminjaman}', [PeminjamanController::class, 'return'])->name('peminjaman.return');


Route::post('/barangs/borrow/{id}', [BarangController::class, 'borrow'])->name('barangs.borrow');
Route::post('/barangs/return/{id}', [BarangController::class, 'return'])->name('barangs.return');
Route::get('/barangs/showBorrowedItems', [BarangController::class, 'showBorrowedItems'])->name('barangs.showBorrowedItems');


Route::get('/peminjamans/history', [BarangController::class, 'history'])->name('peminjamans.history');
Route::get('/barangs/history', [BarangController::class, 'history'])->name('barangs.history');



Route::get('/barangs/kembali', [BarangController::class, 'kembali'])->name('barangs.kembali');
Route::get('/barangs/form_pinjam', [BarangController::class, 'form_pinjam'])->name('barangs.form_pinjam');
Route::post('/barangs/{id}/borrow', [BarangController::class, 'borrow'])->name('barangs.borrow');
Route::post('/barangs/{id}/return', [BarangController::class, 'return'])->name('barangs.return');


Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::post('/peminjaman/return/{id}', [PeminjamanController::class, 'return'])->name('peminjaman.return');
// start route 
Route::get('/barangs', 'BarangController@index');
Route::get('/peminjaman/index', [BarangController::class, 'index'])->name('peminjaman.index');


Route::get('/peminjaman/index', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::post('/peminjaman/return/{id}', [PeminjamanController::class, 'return'])->name('peminjaman.return');





//  end Route peminjaman logika  























Route::get('/backoffice/user/edit', [UserController::class, 'edit'])->name('backoffice.user.edit');

Route::get('/backoffice/users', 'Backoffice\UserController@index')->name('backoffice.user.index');

Route::get('/backoffice/user', 'Backoffice\UserController@index')->name('backoffice.user.index');
Route::get('/backoffice/user', 'Backoffice\UserController@index')->name('backoffice.user.index');


Route::get('/backoffice/user/index', [UserController::class, 'index'])->name('backoffice.user.index');
Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');
Route::post('/backoffice/user/store', [UserController::class, 'store'])->name('backoffice.user.store');
// $url = route('backoffice.user.create');
Route::resource('/backoffice/create', UserController::class);


Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');

Route::get('/backoffice/user/create', 'UserController@create')->name('backoffice.user.create');
Route::get('/backoffice/user/create', 'UserController@create')->name('backoffice.user.create');

Route::get('/', function () {
    // return view('login');
    return view('welcome');

});


// Route_User


// Buat nampilin admin user 
Route::resource('/backoffice/user', UserController::class);

// Buat Manggil Ajax
Route::get('/user', [UserController::class, 'index'])->name('user.index');


Route::middleware(['auth', 'user'])->group(function () {
    // Rute untuk user
});

// End_Route_User






// Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
// Route::post('/barang', [BarangController::class, 'index']);

// Route::post('barang', [BarangController::class, 'index'])->name('barang.index');

// Route::post('barang/datatable', [BarangController::class, 'getDataTable'])->name('barang.datatable');


// Route::post('barang', [BarangController::class, 'index'])->name('barang.index');
// Route::post('barang/datatable', [BarangController::class, 'data'])->name('barang.datatable');
// barang ajax



// Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
// Route::get('barang/data', [BarangController::class, 'data'])->name('barang.data');
// barang ajax

// Route::get('/barang/data', [BarangController::class,'data']);

// Route::get('barang/data', [BarangController::class, 'data'])->name('barang.data');



// end barang ajax















// Route::get('barang/datatable', [Controllers\BarangController::class, 'datatable'])->name('barang.datatable');
// Route::get('Barang/datatable', [Controllers\BarangController::class, 'datatable'])->name('Barang.datatable');



















// Route::get('backoffice/barang/{id}', [BarangController::class, 'show'])->name('backoffice.barang.show');
// Route::get('backoffice/barang/index', [BarangController::class, 'index'])->name('backoffice.barang.index');
Route::get('/login', 'AuthController@showLoginForm')->name('login');

// Route::get('backoffice/barang/datatable', [Controllers\BarangController::class, 'datatable'])->name('backoffice.barang.datatable');

// Tugas route dan view JDA
// Route Bagian Public_view
// Route::get('barang', [BarangController::class, 'index'])->name('barang.index');

// Route::resource('barang', BarangController::class);


// Route::get('/backoffice/barang/datatable', [BarangController::class, 'datatable'])->name('backoffice.barang.datatable');
// Route::get('/backoffice/barang/datatable', [BarangController::class, 'datatable'])->name('backoffice.barang.datatable');
// Route::get('/backoffice/barang/create', 'Backoffice\BarangController@create')->name('backoffice.barang.create');
// Route::get('/backoffice/barang/create', 'Backoffice\BarangController@create')->name('backoffice.barang.create');



Route::delete('/backoffice/barang/{barang}', [BarangController::class, 'destroy'])->name('backoffice.barang.destroy');



// barang
// Route::get('/backoffice/barang', [BarangController::class, 'index'])->name('backoffice.barang.index');
Route::get('/backoffice/barang', [BarangController::class, 'index'])->name('backoffice.barang.index');

// Route::get('backoffice/barang/datatable', [Controllers\BarangController::class, 'datatable'])->name('backoffice.barang.datatable');


// Route::get('/backoffice/order/datatable', [BarangController::class, 'datatable'])->name('backoffice.order.datatable');






// Route::get('barang/datatable', [Controllers\BarangController::class, 'datatable'])->name('barang.datatable');


Route::resources([
    'barang'        => Controllers\BarangController::class,
    

]);




// Menampilkan halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses otentikasi pengguna
Route::post('/login', [LoginController::class, 'login']);


Route::get('/backoffice/main', [BackOfficeController::class, 'main'])->name('backoffice.main');




// end route public view 

Route::get('/public/form_pinjam', 'FormPinjamController@index')->name('form_pinjam');
Route::get('/public/form_pinjam', [FormPinjamController::class, 'index'])->name('form_pinjam');

Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.dashboard');
Route::get('/dashboard', [AdminController::class, 'index'])->name('backoffice.dashboard.index');
Route::get('/public', [peminjamanController::class, 'Form_pinjam'])->name('public.Form_pinjam');
Route::get('/form-pinjam', [PeminjamanController::class, 'form_pinjam'])->name('form_pinjam');
Route::resource('/form-pinjam', 'PeminjamanController');
Route::resource('/public/form-pinjam', 'PeminjamanController@form-pinjam');  


Route::get('/dashboard', function () {
    return view('backoffice.main');
});


Route::get('/backoffice', 'BackofficeController@index')->name('backoffice.main');

Route::get('/backoffice', 'BackOfficeController@index')->name('backoffice.index');
Route::get('/backoffice', [BackOfficeController::class, 'backoffice'])->name('backoffice.');



// Route::get('/backoffice.main', [BarangController::class, 'index']);

// Route::get('/barang/{id}/edit', 'BarangController@edit')->name('barang.edit');
// Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');


Route::post('/login', [LoginController::class, 'authenticate'])->name('login');


Route::post('/login', 'Auth\LoginController@login')->name('login');


Route::post('/login', 'AuthController@authenticate')->name('login');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



Route::middleware(['auth', 'admin'])->group(function () {
    // Rute untuk admin
});



Route::post('/login', [AuthController::class, 'login'])->name('login');



Route::get('/backoffice/welcome', 'DasboardController@index')->name('welcome');
Route::get('/public/index', 'DasboardController@index')->name('index');
Route::get('/public/index', [DasboardController::class, 'index']);
Route::post('/logout', [DasboardController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('backoffice/barang/{barang}/edit', [BarangController::class, 'edit'])->name('backoffice.barang.edit');
Route::put('barang/{barang}', [BarangController::class, 'update'])->name('barang.update');

