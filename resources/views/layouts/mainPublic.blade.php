<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    /* Navbar styling */
    .navbar {
        padding: 0.5rem 1rem;
        border-bottom: 1px solid #e0e0e0;
        background: transparent;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #333;
        padding: 0.75rem 1rem;
        font-size: 0.875rem;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        color: #007bff;
    }

    .navbar-light .dropdown-menu {
        border-radius: 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-light .dropdown-menu .dropdown-item {
        padding: 0.75rem 1.5rem;
    }

    .navbar-toggler {
        border: none;
        background: transparent;
        font-size: 1.25rem;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,..."); /* Optional: Custom icon */
    }

    /* Button styling */
    .btn-success {
        border-radius: 0;
        font-size: 0.875rem;
    }

    .btn-success:hover {
        background-color: #28a745;
        border-color: #28a745;
    }

    /* Margin adjustment for button */
    .ms-3 {
        margin-left: 1rem;
    }
    </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Desa Padamukti | @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/green/assets/img/logo-padamukti.png" rel="icon">
    <link href="image/logo-padamukti.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/green/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/green/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/green/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/green/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/green/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/green/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icons.min.css">

    <!-- Template Main CSS File -->
    <link href="/green/assets/css/style.css" rel="stylesheet">
</head>
<body class="p-0">
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between align-items-center">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:Desa_padaMukti@Pemdes.com">Desa_padaMukti@Pemdes.com</a>
                <i class="bi bi-phone-fill phone-icon"></i><a href="/">082320407767</a>
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="/image/logo-padamukti.png" alt="Logo Padamukti">
                <h6 class="mb-0 ms-2 text-dark">
                    <strong>Desa Padamukti</strong><br />
                    Kabupaten Garut
                </h6>
            </a>
            <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light rounded-navbar p-20">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse in" bis_skin_checked="1" aria-expanded="true" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profilDesaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil Desa</a>
                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="profilDesaDropdown">
                                <li><a class="dropdown-item" href="{{ route('tentang-desa') }}">Tentang Desa</a></li>
                                <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
                                <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                                <li><a class="dropdown-item" href="{{ route('geografis') }}">Geografis</a></li>
                                <li><a class="dropdown-item" href="{{ route('demografi') }}">Demografi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pemerintahanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pemerintahan</a>
                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="pemerintahanDropdown">
                                <li><a class="dropdown-item" href="{{ route('struktur-desa') }}">Struktur Desa</a></li>
                                <li><a class="dropdown-item" href="{{ route('lembaga-desa') }}">Lembaga Desa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="informasiPublikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi Publik</a>
                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="informasiPublikDropdown">
                                <li><a class="dropdown-item" href="{{ route('berita-desa') }}">Berita Desa</a></li>
                                <li><a class="dropdown-item" href="{{ route('pengumuman') }}">Pengumuman Desa</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <button type="button" class="btn btn-success ms-3" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</button>
        </div>
    </header>

    <!-- End Header -->

    <main>
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-md-left">
                    <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('image/logo-padamukti.png') }}" alt="Desa Padamukti Logo" class="img-fluid" style="max-width: 80px; margin-right: 10px;">
                        <h4>
                            <a href="/" class="text-white">
                                <strong>Desa Padamukti</strong><br>
                                Kabupaten Garut
                            </a>
                        </h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <h4>Contact Us</h4>
                    <p>
                    Padamukti, Kec. Pasirwangi, Kabupaten Garut, Jawa Barat 44161<br><br>
                        <strong>Phone:</strong> 082320407767<br>
                        <strong>Email:</strong> info@desapadamukti.id
                    </p>
                </div>
                <div class="col-md-4 text-center text-md-right">
                    <h4>Tautan</h4>
                    <div class="text-white">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('tentang-desa') }}" class="text-white">Tentang Desa</a></li>
                            <li><a href="{{ route('visi-misi') }}" class="text-white">Visi & Misi</a></li>
                            <li><a href="{{ route('struktur-desa') }}" class="text-white">Struktur Desa</a></li>
                            <li><a href="{{ route('lembaga-desa') }}" class="text-white">Lembaga Desa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2023 Desa Padamukti. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/green/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/green/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/green/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/green/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/green/assets/js/main.js"></script>

</body>
</html>
