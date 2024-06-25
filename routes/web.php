<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DasboardPublicController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\Demografi_desaControllers;
use App\Http\Controllers\SliderConttrollers;
use App\Http\Controllers\StrukturorganisasiConttrollers;
use App\Http\Controllers\DemografidesaController;
use App\Http\Controllers\ProfilDesaController;



Route::delete('/backoffice/pengumuman/{id}', [PengumumanController::class, 'destroy'])->name('pengumuman.destroy');

// Berita
Route::get('/public/berita', [DasboardPublicController::class, 'indexBerita'])->name('berita-desa');
Route::get('/public/berita/{id}', [DasboardPublicController::class, 'detailBerita'])->name('berita.detailBerita');

// Route Public createn 
// Route::get('/backoffice/users', [UserController::class, 'index'])->name('backoffice.user.index');
Route::prefix('backoffice')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('backoffice.user.index');
});


// Halamn public
Route::get('/', [DasboardPublicController::class, 'indexdes']);

// Route untuk Berita Barang Simpen data
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

// Route menampilkan data view
Route::get('/public/index', [DasboardController::class, 'index']);



// Fungsi middleware untuk Hak Akses Dari role
Route::middleware(['isAdmin'])->group(function () {
    // Routes protected by isAdmin middleware
    Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('backoffice.dashboard.index');
    

    // Route::prefix('backoffice/user')->group(function () {
    //     Route::get('/', [UserController::class, 'index'])->name('backoffice.user.index');
    //     Route::get('/create', [UserController::class, 'create'])->name('backoffice.user.create');
    //     Route::post('/store', [UserController::class, 'store'])->name('backoffice.user.store');
    //     Route::get('/edit', [UserController::class, 'edit'])->name('backoffice.user.edit');
    //     Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
    // });

    

     // Route Pengumuman
     Route::prefix('backoffice/pengumuman')->group(function () {
        Route::post('/store', [PengumumanController::class, 'store'])->name('pengumuman.store');
        Route::get('/{id}/edit', [PengumumanController::class, 'edit'])->name('pengumuman.edit');

        Route::get('/', [PengumumanController::class, 'index'])->name('pengumuman.index');
        Route::post('/create', [PengumumanController::class, 'create'])->name('backoffice.pengumuman.create');
        Route::put('/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::post('/pengumuman', [PengumumanController::class, 'store'])->name('backoffice.pengumuman.store');
        Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('backoffice.pengumuman.index');



    });





    // Route Berita
    Route::prefix('backoffice/berita')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('backoffice.berita.index');
        Route::post('/create', [BeritaController::class, 'create'])->name('backoffice.berita.create');
        Route::get('/edit', [BeritaController::class, 'edit'])->name('backoffice.berita.edit');
        Route::put('/{id}', [BeritaController::class, 'update'])->name('berita.update');
        Route::post('/berita', [BeritaController::class, 'store'])->name('backoffice.berita.store');
        Route::get('/berita', [BeritaController::class, 'index'])->name('backoffice.berita.index');


    });


    // CRUD User
    Route::resource('/backoffice/user', UserController::class);

    // CRUD Berita
    Route::resource('/backoffice/berita', BeritaController::class);
    Route::resource('/backoffice/pengumuman', PengumumanController::class);
    Route::resource('/backoffice/demografi_desa', Demografi_desaControllers::class);
    Route::resource('/backoffice/slider', SliderConttrollers::class);
    Route::resource('/backoffice/strukturorganisasi', StrukturorganisasiConttrollers::class);
    Route::resource('/backoffice/demografidesa', DemografidesaController::class);
    Route::resource('/backoffice/profildesa', ProfilDesaController::class);

});

    // Login and Registration routes
    Route::get('register', [UserController::class, 'showRegistrationForm']);
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('/login', [LoginController::class, 'login'])->middleware('CheckUserStatus');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Menampilkan halaman login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

    // Proses otentikasi pengguna
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');


    Route::get('/public/tentang-desa', [DasboardPublicController::class, 'tentangDesa'])->name('tentang-desa');
    Route::get('/public/visi-misi', [DasboardPublicController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/public/sejarah', [DasboardPublicController::class, 'sejarah'])->name('sejarah');
    Route::get('/public/geografis', [DasboardPublicController::class, 'geografis'])->name('geografis');
    
    Route::get('/public/demografi', function () {
        return view('public.demografi');
    })->name('demografi');

    Route::get('/public/struktur-desa', function () {
        return view('public.struktur');
    })->name('struktur-desa');

    Route::get('/public/perangkat-desa', function () {
        return view('public.perangkat');
    })->name('perangkat-desa');

    Route::get('/public/lemabga-desa', [DasboardPublicController::class, 'indexLembagaDesa'])->name('lembaga-desa');
    Route::get('/public/lemabga-desa/{id}', [DasboardPublicController::class, 'detailLembagaDesa'])->name('lembaga-desa.detail');

    Route::get('/public/detail_pengumuman', function () {
        return view('public.pengumuman1');
    })->name('detail-pengumuman');


    Route::get('/public/pengumuman', [DasboardPublicController::class, 'indexPengumuman'])->name('pengumuman');
    Route::get('/public/pengumuman/{id}', [DasboardPublicController::class, 'detailPengumuman'])->name('pengumuman.detailPengumuman');

?>