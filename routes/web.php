<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BeritaController;

// Route Public Welcome
Route::get('/', function () {
    return view('home');
})->name('home');

// Route Untuk Berita Barang Simpen data
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');

// Route Untuk Menampilkan data di Admin
Route::get('/backoffice/berita', [BeritaController::class, 'index'])->name('backoffice.berita.index');

// Route Untuk Create data baru
Route::post('/backoffice/berita/create', [BeritaController::class, 'create'])->name('backoffice.berita.create');

// Route Login Akses
Route::get('/auth/login', [LoginController::class, 'showLoginForm'])->name('auth.showLoginForm');
Route::post('/auth/login', [LoginController::class, 'login'])->name('auth.login');

// Fungsi register
Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.showRegistrationForm');
Route::post('/auth/register', [RegisterController::class, 'register'])->name('auth.register');

// Fungsi middleware Untuk Hak Akses Dari role
Route::middleware(['isAdmin'])->group(function () {
    Route::get('/backoffice/main', [BackOfficeController::class, 'main'])->name('backoffice.main');
    Route::get('/backoffice/user/index', [UserController::class, 'index'])->name('backoffice.user.index');
    Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');
    Route::post('/backoffice/user/store', [UserController::class, 'store'])->name('backoffice.user.store');
    Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('backoffice.dashboard.index');
    Route::get('/backoffice/user/edit', [UserController::class, 'edit'])->name('backoffice.user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/backoffice/berita/edit', [BeritaController::class, 'edit'])->name('backoffice.berita.edit');
    Route::put('/berita/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::resource('backoffice/berita', BeritaController::class);
});

// Menampilkan home
Route::get('/home', function () {
    return view('home');
})->name('home');

// Mengembalikan data view
Route::get('/public/index', [DashboardController::class, 'index'])->name('public.index');
Route::post('/public/index', [DashboardController::class, 'index']);

// For Log out
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// CRUD user
Route::resource('/backoffice/user', UserController::class);

// Proses otentikasi pengguna
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

// Public views
Route::get('/berita1', function () {
    return view('public.berita1');
})->name('public.berita1');

Route::get('/berita', function () {
    return view('public.berita');
})->name('public.berita');

Route::get('/pengumuman1', function () {
    return view('public.pengumuman1');
})->name('public.pengumuman1');

Route::get('/pengumuman', function () {
    return view('public.pengumuman');
})->name('public.pengumuman');

Route::get('/visimisi', function () {
    return view('public.visimisi');
});
Route::get('/tentang', function () {
    return view('public.tentang');
});
Route::get('/tentang', function () {
    return view('public.tentang');
});
Route::get('/sejarah', function () {
    return view('public.sejarah');
});
Route::get('/demografi', function () {
    return view('public.demografi');
});
Route::get('/geografis', function () {
    return view('public.geografis');
});
Route::get('/lembaga', function () {
    return view('public.lembaga');
});
Route::get('/struktur', function () {
    return view('public.struktur');
});
Route::get('/perangkat', function () {
    return view('public.perangkat');
});
