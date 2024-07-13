<!DOCTYPE html>
<html lang="en">
<head>
<style>
/* Navbar styling */
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
    transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

.navbar-light .navbar-nav .nav-link:hover {
    color: #fff;
    background-color: #28a745; /* Green background on hover */
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

/* Ensuring no horizontal scrollbars */
body {
    overflow-x: hidden;
    overflow-y: hidden;
}

/* Top bar styling */
#topbar {
    background: #f8f9fa;
    padding: 0.5rem 0;
}

.contact-info a {
    color: #333;
}

.contact-info a:hover {
    color: #007bff;
}

.social-links a {
    color: #333;
    margin-left: 0.5rem;
}

.social-links a:hover {
    color: #007bff;
}

/* Footer styling */
#footer {
    background: #333;
    color: #fff;
    padding: 2rem 0;
}

#footer a {
    color: #fff;
}

#footer a:hover {
    color: #007bff;
}

.back-to-top {
    position: fixed;
    bottom: 15px;
    right: 15px;
    background: #007bff;
    color: #fff;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.back-to-top:hover {
    background: #0056b3;
}

.navbar-collapse .navbar-nav {
    flex-direction: column;
    align-items: center;
}

.navbar-collapse .navbar-nav .nav-item {
    margin-bottom: 0.5rem;
}

.navbar-collapse .navbar-nav .nav-item:last-child {
    margin-bottom: 0;
}

.navbar-collapse .login-button {
    display: flex;
    justify-content: center;
    width: 100%;
}

@media (min-width: 992px) {
    .navbar-collapse .login-button {
        justify-content: flex-end;
        width: auto;
    }
}

.navbar-brand h6 {
    margin-bottom: 0;
    margin-left: 10px; /* Adjusting space between logo and text */
    font-size: 1rem; /* Adjust font size if needed */
}

.navbar-nav .nav-link {
    margin-left: 0.5rem; /* Adjusting space between navbar items */
}

.navbar-nav .nav-item {
    margin-right: 0.5rem; /* Adjusting space between navbar items */
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
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white rounded-navbar">
    <div class="container-fluid">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="/image/logo-padamukti.png" alt="Logo Padamukti" style="width: 50px; height: auto;">
            <h6 class="mb-0 ms-1 text-dark">
                <strong>Desa Padamukti</strong><br />
                Kabupaten Garut
            </h6>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="profilDesaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil Desa</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profilDesaDropdown">
                        <li><a class="dropdown-item" href="{{ route('tentang-desa') }}">Tentang Desa</a></li>
                        <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ route('geografis') }}">Geografis</a></li>
                        <li><a class="dropdown-item" href="{{ route('demografi') }}">Demografi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pemerintahanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pemerintahan</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="pemerintahanDropdown">
                        <li><a class="dropdown-item" href="{{ route('struktur-desa') }}">Struktur Desa</a></li>
                        <li><a class="dropdown-item" href="{{ route('lembaga-desa') }}">Lembaga Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="informasiPublikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Informasi Publik</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="informasiPublikDropdown">
                        <li><a class="dropdown-item" href="{{ route('berita-desa') }}">Berita Desa</a></li>
                        <li><a class="dropdown-item" href="{{ route('pengumuman') }}">Pengumuman Desa</a></li>
                    </ul>
                </li>
            </ul>
            <div class="login-button mt-2 mt-lg-0">
                <button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#modalLogin">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLoginLabel">Masuk ke Akun Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form login bisa Anda tambahkan di sini -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>

<main>
    @yield('content')
</main>

<!-- Footer -->
<footer id="footer" class="footer">
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
            <p>&copy; 2024 Desa Padamukti. All Rights Reserved.</p>
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
