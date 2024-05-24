<!DOCTYPE html>
<html lang="en">
<!-- Modal Welcome -->
<div class="modal fade" id="modalWelcome" tabindex="-1" aria-labelledby="modalWelcomeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalWelcomeLabel">Welcome</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Welcome to our website! Enjoy your stay.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Got it!</button>
      </div>
    </div>
  </div>
</div>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JDA Personal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public_view/assets/img/favicon.png" rel="icon">
  <link href="public_view/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      <h1><a href="index.html">Judul Personal Project</a></h1>
      <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> 
      <h2>Peminjaman <span>barang </span>pada sapras</h2>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#">Home</a></li>
          <li><a class="nav-link" href="peminjaman/about">About</a></li>
          <li><a class="nav-link" href="peminjaman/create">Form Peminjaman</a></li>
          <li><a class="nav-link" href="peminjaman/index">Form Kembali</a></li>
          {{-- <li><a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
          <li><a class="nav-link logout-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li> --}}
<li><a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: red;">Logout</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <!-- Hidden logout form -->
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>

  <!-- Main content here -->

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
</body>

</html>

<style>


</style>