<!-- views/layout/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            margin: 0;
        }
        .content {
            flex: 1;
        }
        footer {
            margin-top: auto;
        }
    </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Desa Padamukti | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="green/assets/img/favicon.png" rel="icon">
  <link href="image/logopadamukti.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("green/assets/vendor/animate.css/animate.min.css") }}" rel="stylesheet">
  <link href="{{ asset("green/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("green/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("green/assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("green/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{asset("green/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset("green/assets/css/style.css")}}" rel="stylesheet">
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">Desa_padaMukti@Pemdes.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +62 888 888 
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="row justify-content-between w-100">
        <div class="col-auto">
          <div class="d-flex align-items-center">
            <a href="index.html" class="logo me-auto"><img src="image/logopadamukti.svg" alt="" style="width: 100px; height: 100px;"></a>
            <h5>
              <a href="#" class="text-dark">
                <strong>Desa Padamukti</strong><br/>
                Kabupaten Bandung
              </a>
            </h5>
          </div>
        </div>
        <div class="col-auto">
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="/">Home</a></li>
              <li class="dropdown"><a href="#"><span>Profil Desa</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/tentang">Tentang Desa</a></li>
                  <li><a href="/visimisi">Visi dan Misi</a></li>
                  <li><a href="/sejarah">Sejarah</a></li>
                  <li><a href="/geografis">Geografis</a></li>
                  <li><a href="/demografi">Demografi </a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Pemerintahan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/struktur">Struktur Desa</a></li>
                  <li><a href="/perangkat">Perangkat Desa</a></li>
                  <li><a href="/lembaga">Lembaga Desa</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Informasi Publik</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/berita">Berita Desa</a></li>
                  <li><a href="/pengumuman">Pengumuman Desa</a></li> 
                </ul>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->

  <main>
    @yield('content')
  </main>

  <!-- ======= Footer ======= -->
  <footer class="mt-5" id="footer">
    <div class="container">
      <h3>Desa Padamukti</h3>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Desa Padamukti</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="green/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="green/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="green/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="green/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="green/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="green/assets/js/main.js"></script>

</body>
</html>
