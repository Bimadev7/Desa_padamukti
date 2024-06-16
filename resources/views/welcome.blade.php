@extends('layout.main')

@section('title', 'Welcome')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url(green/assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang<span> di Website Desa Padamukti</span></h2>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(green/assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Tentang Desa</h2>
              <p class="animate__animated animate__fadeInUp">Beberapa informasi tentang Desa Padamukti</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat</a>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(green/assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Berita Desa</h2>
              <p class="animate__animated animate__fadeInUp">Tinjau berita terbaru dari Desa Padamukti</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat Berita</a>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <a href="your-url" class="text-decoration-none">
          <h2 class="text-dark">Berita Desa</h2>
        </a>
        <div class="row mb-2">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static text-start">
                <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                <h3 class="mb-0">Featured post</h3>
                <div class="mb-1 text-body-secondary">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                  Lanjutkan Membaca
                  <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static text-start">
                <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                <h3 class="mb-0">Post title</h3>
                <div class="mb-1 text-body-secondary">Nov 11</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                  Lanjutkan Membaca
                  <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="green/assets/img/about.jpg" class="img-fluid w-80" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content text-start">
            <h3>Tentang Desa</h3>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <button type="button" class="btn btn-success icon-link gap-1 icon-link-hover mt-3">
              Lanjutkan Membaca
              <svg class="bi"><use xlink:href="#chevron-right"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Pengumuman Desa</h2>
        <div class="card text-start mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <a href="your-route-url" class="text-decoration-none">Special title treatment</a>
            </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card text-start mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <a href="your-route-url" class="text-decoration-none">Special title treatment</a>
            </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card text-start mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <a href="your-route-url" class="text-decoration-none">Special title treatment</a>
            </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-5 d-flex align-items-stretch mt-5">
          <div class="info w-100">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Padamukti</p>
            </div>
            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>Padamukti@Desapadamukti.com</p>
            </div>
            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+62 888 888</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.6179905471503!2d-79.39637338450038!3d43.66418917912138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34d4a1d9f8a5%3A0xc57a90982c7384b1!2sUniversity%20of%20Toronto!5e0!3m2!1sen!2sca!4v1612481683839!5m2!1sen!2sca" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
@endsection
