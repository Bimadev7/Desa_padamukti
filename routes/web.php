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
    use App\Http\Controllers\Auth\RegisterController;


    // Fungsi register
    Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
    Route::post('/auth/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::get('register', [UserController::class, 'showRegistrationForm']);

    // fungsi middleware pada web.php
    Route::middleware(['isAdmin'])->group(function () {
    });
    // end Fungsi register




    Route::get('/', function () {
         return view('welcome');
    });


    // fungsi buat register akun
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'login'])->middleware('CheckUserStatus');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);



    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/backoffice/barang/index', [PeminjamanController::class, 'store'])->name('backoffice.barang.index');
    Route::resource('backoffice/barang', BarangController::class);
    Route::resource('backoffice/barang', BarangController::class);

    Route::resource('backoffice/barang', BarangController::class);



    Route::post('/returnadmin/{id}', [PeminjamanController::class, 'returnadmin']);




    // Fungsi show data pengembalian
    Route::get('/backoffice/pengembalian', [PeminjamanController::class, 'indexdata'])->name('pengembalian.indexdata');
    Route::get('/backoffice/pengembalian/datakembali', [PeminjamanController::class, 'datakembali'])->name('pengembalian.indexdata');
    Route::post('/backoffice/pengembalian/datakembali', [PeminjamanController::class, 'datakembali'])->name('pengembalian.indexdata'); 
    Route::post('/backoffice/pengembalian/datapinjam', [PeminjamanController::class, 'datapinjam'])->name('pengembalian.indexdata'); 
    Route::get('/backoffice/pengembalian/datapinjam', [PeminjamanController::class, 'datapinjam'])->name('pengembalian.indexdata');

    // Data yang sudah ti
    Route::get('/backoffice/pengembalian/datafinish', [PeminjamanController::class, 'datafinish'])->name('backoffice.pengembalian.datafinish');
    Route::get('/backoffice/pengembalian/datafinish', [PeminjamanController::class, 'datafinish'])->name('backoffice.pengembalian.datafinish');


    // Fungsi show data peminjaman
    Route::get('/backoffice/peminjaman', [PeminjamanController::class, 'indexdata']);
    Route::get('/backoffice/peminjaman/indexdata', [PeminjamanController::class, 'indexData'])->name('peminjaman.indexdata');
    Route::post('/backoffice/peminjaman/indexdata', [PeminjamanController::class, 'indexData'])->name('peminjaman.indexdata'); 


    // start Route Register 
    Route::get('/register', function () {
        return view('auth.register');
    });
    Route::post('/register', [PeminjamanController::class, 'register'])->name('/register');
    Route::get('/register', [PeminjamanController::class, 'register'])->name('/register');
    Route::get('/register', [UserController::class, 'register']);
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/register', [App\Http\Controllers\UserController::class, 'showRegistrationForm'])->name('peminjaman.about');
    // end Route Register 


    // tampilan about alert
    Route::get('peminjaman/about', [PeminjamanController::class, 'about'])->name('peminjaman.about');





    // grouping middleware
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/backoffice/main', [DasboardController::class, 'dasboard']);

        // Route::get('/dashboard', 'MainController@index')->name('backoffice.main');

        Route::get('/dashboard', [PeminjamanController::class, 'dasboard'])->name('backoffice.main');
        Route::get('/backoffice/main', [PeminjamanController::class, 'dasboard'])->name('backoffice.main');


        // Tampilan_Role_user
        Route::get('/welcome', [PeminjamanController::class, 'welcome'])->name('/welcome');



        // Peminjaman_barang
        Route::post('/peminjaman/{barang}', [PeminjamanController::class, 'store'])->name('peminjaman.store');
        Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
        Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
        Route::post('peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');




        // backoffice_barang
        // Route::get('backoffice/barang/{barang}/edit', [BarangController::class, 'edit'])->name('backoffice.barang.edit');
        Route::delete('/backoffice/barang/{barang}', [BarangController::class, 'destroy'])->name('backoffice.barang.destroy');
        Route::get('/backoffice/barang', [BarangController::class, 'index'])->name('backoffice.barang.index');
        Route::get('/backoffice/main', [BackOfficeController::class, 'main'])->name('backoffice.main');


        // Data Peminjaman transaksi
        Route::get('peminjaman/indexdata', [PeminjamanController::class, 'indexData'])->name('peminjaman.indexdata');
        Route::post('peminjaman/indexdata', [PeminjamanController::class, 'indexData'])->name('peminjaman.indexdata'); 


        // Data Peminjaman transaksi
        Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
        Route::get('peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
        Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
        Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');


        // backoffice_create_peminjaman_barang
        Route::resource('/backoffice/create', UserController::class);

        // View data barang dasboard
        Route::get('/backoffice/databarang/main', [PeminjamanController::class, 'dasboard'])->name('backoffice.databarang.main');

        

    
    // peminjaman_index_tidak_diperlukan
        Route::get('/peminjaman/index', [BarangController::class, 'index'])->name('peminjaman.index');
        Route::get('/peminjaman/index', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    // end_peminjaman_index_tidak_diperlukans

    
    });



    Route::get('/public/welcome', [PeminjamanController::class, 'welcome'])->name('public.welcome');



    Route::middleware(['auth'])->group(function () {
        Route::get('/backoffice/peminjaman/show_peminjaman', [BarangController::class, 'show'])->name('peminjaman.show');
        Route::post('/barangs/show/{id}', [PeminjamanController::class, 'store'])->name('barangs.show');
        Route::post('/barangs/borrow/{id}', [PeminjamanController::class, 'store'])->name('barangs.borrow');
        // Route::post('/barangs/show/{id}', [PeminjamanController::class, 'show'])->name('barangs.show');
        Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
        Route::post('/peminjaman/return/{id}', [PeminjamanController::class, 'return'])->name('peminjaman.return');
    });





    Route::get('/', function () {
        return view('/register');
    });
    

    Route::get('backoffice/peminjaman/show_peminjaman/{id}', [BarangController::class, 'show_peminjaman'])->name('backoffice.peminjaman.show_peminjaman');

    // news
    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
    Route::post('/barangs/borrow/{id}', [PeminjamanController::class, 'store'])->name('barangs.borrow');

    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
    Route::get('/barangs/{id}/show', [BarangController::class, 'show'])->name('barangs.show');



    Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');
    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');



    Route::post('/peminjaman/returnadmin/{id}', [PeminjamanController::class, 'returnadmin'])->name('peminjaman.return');


    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
    Route::post('/barangs/borrow/{id}', [BarangController::class, 'borrow'])->name('barangs.borrow');




    Route::get('/barangs/show/', [BarangController::class, 'show'])->name('barangs.show');

    Route::get('/barangs/show/{id}', [BarangController::class, 'show'])->name('barangs.show');
    Route::post('/barangs/borrow/{id}', [BarangController::class, 'borrow'])->name('barangs.borrow');
    // routes/web.php
    Route::post('/peminjaman/showBorrowedItems/{barang}', [PeminjamanController::class, 'borrow'])->name('peminjaman.borrow');
    Route::post('/barangs/show/{barang}', [BarangController::class, 'show'])->name('barangs.show');




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

    // start route 


    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::get('/backoffice/barang/edit', [BarangController::class, 'edit'])->name('backoffice.barang.edit');



    // update data 
    Route::post('/backoffice/barang/update', [BarangController::class, 'update'])->name('backoffice.barang.update');


    Route::post('/backoffice/barang/store', [BarangController::class, 'store'])->name('backoffice.barang.store');
    Route::post('/backoffice/barang/create', [BarangController::class, 'create'])->name('backoffice.barang.create');

    // route user 
    Route::get('/backoffice/user/index', [UserController::class, 'index'])->name('backoffice.user.index');
    Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');
    Route::post('/backoffice/user/store', [UserController::class, 'store'])->name('backoffice.user.store');
    Route::get('/backoffice/user/create', [UserController::class, 'create'])->name('backoffice.user.create');

    //end route user 


    Route::get('/', function () {
        
        return view('home');

    });




    // Buat nampilin admin user 
    Route::resource('/backoffice/user', UserController::class);





    Route::resources([
        'barang'        => Controllers\BarangController::class,
        

    ]);




    Route::get('/user/create', 'UserController@create')->name('user.create');






    // Menampilkan halaman login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

    // Proses otentikasi pengguna
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/login', [LoginController::class, 'login'])->name('backoffice.main');


    // end route public view 
    Route::get('/public/form_pinjam', [FormPinjamController::class, 'index'])->name('form_pinjam');
    Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.dashboard');
    Route::get('/dashboard', [AdminController::class, 'index'])->name('backoffice.dashboard.index');
    Route::get('/public', [peminjamanController::class, 'Form_pinjam'])->name('public.Form_pinjam');
    Route::get('/form-pinjam', [PeminjamanController::class, 'form_pinjam'])->name('form_pinjam');
    Route::resource('/form-pinjam', 'PeminjamanController');



    

    // nampilkan backoffice
    Route::get('/backoffice', [BackOfficeController::class, 'backoffice'])->name('backoffice.');


    // Login authenticate
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');










    Route::post('/login', [AuthController::class, 'login'])->name('login');



    Route::get('/public/index', [DasboardController::class, 'index']);
    Route::get('/public/index', [DasboardController::class, 'index']);
    Route::post('/logout', [DasboardController::class, 'logout'])->name('logout');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::put('barang/{barang}', [BarangController::class, 'update'])->name('barang.update');



    // user
    Route::get('/backoffice/user/edit', [UserController::class, 'edit'])->name('backoffice.user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    // Route::get('/backoffice/user/create', 'UserController@create')->name('backoffice.user.create');



    Route::put('/barang/{id}', [UserController::class, 'update'])->name('barang.update');





    // route midleware
    Route::middleware(['auth', 'admin'])->group(function () {
        // Rute untuk admin
    });

    Route::post('/backoffice/barang/store', [BarangController::class, 'store'])->name('backoffice.barang.store');

