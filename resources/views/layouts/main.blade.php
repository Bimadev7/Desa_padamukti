<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     {{-- <img src="{{ asset('green/assets/img/logo-padamukti.png')}}" alt="AdminLTE Logo" class="brand-image img-circle " style="max-width: 100px; margin-right: 8px;"> --}}
  <title> Desa Padamukti</title>


  {{-- script --}}

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>



  <!-- CkEditor-->

  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  {{-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> --}}
  {{-- <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> --}}

  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('adminlte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  {{-- <link rel="stylesheet" href="{{ asset(adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> --}}
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

{{-- ajax --}}


  














  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
  </div> --}}
  <div class="preloader flex-column justify-content-center align-items-center">
  <svg width="80" height="80" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
    <circle cx="50" cy="50" r="30" stroke-width="10" stroke="#007bff" stroke-dasharray="47.12388980384689 47.12388980384689" fill="none" stroke-linecap="round">
      <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.7213114754098361s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
    </circle>
  </svg>
  <h4 class="mt-2">Loading...</h4>
</div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

  
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        {{-- <a class="nav-link" data-widget="navbar-search" href="#" role="button"> --}}
          {{-- <i class="fas fa-search"></i> --}}
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

  
        @yield('content_navbar')
  

   

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     <span class="brand-text font-weight-light">Desa Padamukti</span>
  {{-- <img src="{{ asset('green/assets/img/logo-padamukti.png')}}" rel="icon"> --}}

     <img src="{{ asset('green/assets/img/logo-padamukti.png')}}" alt="AdminLTE Logo" class="brand-image img-circle " style="max-width: 100px; margin-right: 8px;">
    </a>





      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" >
          <div class="input-group-append">
            
          </div>
        </div>
      </div>

      
<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item dropdown">
  {{-- <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Profil Desa
      <i class="right fas fa-angle-left"></i>
    </p>
  </a> --}}
  <ul class="nav nav-treeview">
    <li class="nav-item">
      {{-- <a href="./index.html" class="nav-link active"> --}}
     <a href="/backoffice/profildesa_visi" class="nav-link active">

        <i class="far fa-circle nav-icon"></i>
        <p>Visi</p>
      </a>
    </li>
    {{-- <li class="nav-item">
      <a href="./index2.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Misi</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="./index3.html" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Sejarah </p>
      </a> --}}
    </li>
  </ul>
</li>

          
          <li class="nav-item">
            <a href="/backoffice/berita" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Berita
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="/backoffice/pengumuman" class="nav-link">
              <i class="nav-icon fas fa-volume-up"></i>
              <p>
                Pengumuman
              </p>
            </a>
          </li>
          </li>

            <li class="nav-item">
            <a href="/backoffice/profildesa_visi" class="nav-link">
              <i class="nav-icon fas fa-volume-up"></i>
              <p>
                Profil Desa
              </p>
            </a>
          </li>
          </li>
           <li class="nav-item">
            <a href="/backoffice/demografidesa" class="nav-link">
              <i class="nav-icon fas fa-volume-up"></i>
              <p>
                Demografi Desa
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="/backoffice/strukturorganisasi" class="nav-link">
              <i class="nav-icon fas fa-volume-up"></i>
              <p>
                Struktur Organisasi
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="/backoffice/user" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              {{-- <i class="nav-icon far fa-image"></i> --}}
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/backoffice/slider" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Slider
              </p>
            </a>
          
         


          {{-- <li class="nav-item">
            <a href="/backoffice/profildesa/1/edit" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                profildesa Desa
              </p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="/backoffice/lembagadesa" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Lembaga Desa
              </p>
            </a>
          </li>

        
         
          
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Dashboard</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> --}}
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    
    



   
{{-- Setting jarak  --}}
    <div style='margin-top: -30px'>
    @stack('script')
    @yield('content')
  </div>


    

{{-- 
    <div class="content-wrapper">
      @yield('content')
  </div>

    
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <div>
    @section('adminlte_js')
      @stack('js')
      @yield('js')
  @stop
  </div> --}}
  {{-- @yield('scripts')  --}}
{{-- <div class="content-wrapper"> --}}
 {{-- <div>
@yield('content')
@yield('adminlte_js')
</div> --}}

{{-- 
<div>
  @section('adminlte_js')
    @stack('js')
    @yield('js')
@stop




  
{{-- @yield('content') --}}


</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
       
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
{{-- <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script> --}}
<!-- jQuery UI 1.11.4 -->
{{-- <script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script> --}}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
{{-- // <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}

<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
{{-- 
<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script> --}}
<!-- daterangepicker -->
{{-- <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> --}}
<!-- Summernote -->
{{-- <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script> --}}
<!-- overlayScrollbars -->
{{-- <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> --}}
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('adminlte/dist/js/demo.js') }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script> --}}
<script>
  $(document).ready(function(){
    // Cek apakah pengguna sudah login atau belum
    var isLoggedIn = true; // Ganti dengan logika Anda untuk menentukan apakah pengguna sudah login atau tidak

    if (isLoggedIn) {
      var userName = "Nama Pengguna"; // Ganti dengan nama pengguna yang sesuai
      $("#userName").text(userName); // Menampilkan nama pengguna pada elemen dengan ID userName
    } else {
      $("#userName").hide(); // Sembunyikan elemen nama pengguna jika pengguna belum login
    }

    $("#logout").click(function(){
      // Tambahkan logika logout di sini
      alert("Anda telah keluar!");
    });
  });
</script>

<script>
   CKEDITOR.replace('editor');
   CKEDITOR.replace('editor2');
   CKEDITOR.replace('editor3');
   CKEDITOR.replace('editor4');
   CKEDITOR.replace('editor5');
   CKEDITOR.replace('editor9');
</script>
</body>
</html>
