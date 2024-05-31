<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-bfLT5UetKDbL+eWVqqfRQK21Xp9hH5l7Kl8Oz2dktDI5pY/15cC1xXeXkmF8xqnv2psu21y2uVrFsXcsEpWIlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>JDA  personal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public_view/assets/img/favicon.png" rel="icon">
  <link href="public_view/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public_view/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public_view/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public_view/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public_view/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public_view/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public_view/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public_view/assets/css/style.css" rel="stylesheet">
</head>
<body>
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
{{-- Tugas JDA --}}
{{-- View --}}

<body>

<body>
@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <h1><a href="index.html">Judul personal project</a></h1>
      <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> 
      <h2>Peminjaman <span>barang </span>pada sapras</h2>
          <nav id="navbar" class="navbar">
        <ul>
          <li type="button" class="btn btn-block btn-primary" data-bs-toggle="modal" data-bs-target="#modal-primary">Login</li>
          <li><a class="nav-link active" href="#">Home</a></li>
          <li><a class="nav-link" href="peminjaman/about">About</a></li>
          {{-- <li><a class="nav-link" href="#">Form Peminjaman</a></li> --}}
          {{-- <li><a class="nav-link" href="#">Form kembali</a></li> --}}
          <li><a class="nav-link" href="https://discord.com/invite/dYXcy954" style="color:Cyan;"> JOIN DISCORD</a></li>
          <li><a class="nav-link" href="#">-</a></li>
              </li>
        </ul>
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
        </div>
  </header>
  <div class="credits">

  




  </div>

  <!-- Vendor JS Files -->
  <script src="public_view/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="public_view/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public_view/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="public_view/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public_view/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="public_view/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="public_view/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="public_view/assets/js/main.js"></script>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head> 
  <body>
  @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
  <div class="modal fade" id="modal-primary">
  <div class="modal-dialog">
    <div class="modal-content bg-primary">
      <div class="modal-header">
        <h4 class="modal-title">Form Login</h4>
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="password" style="float: left;">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
          <div class="form-group">
            <label for="password" style="float: left;">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
           <div class="row">
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="col">
              {{-- <button href="{{('auth.register')}}" type="submit" class="btn btn-primary btn-block">Register</button> --}}
           {{-- <button type="button" class="btn btn-primary" onclick="location.href='{{ route('register') }}'">
           
  Register
</button> --}}
<div class="mb-3">
                <a href="{{ route('auth.register') }}" class="btn btn-primary">Register</a>
            </div>

              </div>
              
  </form>
      </div>
    </div>
  </div>
  </div>
  </body>
  <!-- /.modal -->

  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
        $('#modal-primary').modal('show');
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="../../plugins/toastr/toastr.min.js"></script>

