@extends('layouts.mainPublic')

@section('title', 'Welcome')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url(/image/desa1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang<span> di Website Desa Padamukti</span></h2>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(/image/desa2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Tentang Desa</h2>
              <p class="animate__animated animate__fadeInUp">Beberapa informasi tentang Desa Padamukti</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat</a>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(/image/desa3.jpg)">
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

  <section id="featured-services" class="featured-services section-bg">
    <div class="container">

        <div class="row no-gutters">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon-box text-center">
                    <div class="icon mb-3"><i class="bi bi-person-plus"></i></div>
                    <h2 class="title"><a href="">12</a></h2>
                    <p class="description">Kelahiran</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon-box text-center">
                    <div class="icon mb-3"><i class="bi bi-person-dash"></i></div>
                    <h2 class="title"><a href="">0</a></h2>
                    <p class="description">Kematian</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="icon-box text-center">
                    <div class="icon mb-3"><i class="bi bi-people"></i></div>
                    <h2 class="title"><a href="">15432</a></h2>
                    <p class="description">Jumlah Penduduk</p>
                </div>
            </div>
        </div>

    </div>
  </section>



  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <h2 class="text-dark">Berita Desa</h2>
      </div>

      <div class="row">
        @foreach($berita as $item)
        <div class="col-md-6 mb-4">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static text-start">
              <h3 class="mb-0" style="font-size: 1.5em; font-weight: bold; color: #000;">{{ $item->judul }}</h3>
              <div class="mb-1 text-body-secondary">
                {{ optional($item->created_at)->format('M Y') }}
              </div>
              <p class="card-text mb-auto">{{ $item->deskripsi }}</p>
              <a href="{{ route('berita.detailBerita', $item->id) }}" class="icon-link gap-1 icon-link-hover stretched-link">
                Lanjutkan Membaca
                <svg class="bi"><use xlink:href="#chevron-right" /></svg>
              </a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="{{ asset('images/' . $item->image) }}" alt="Berita" width="200" height="250">
            </div>
          </div>
        </div>
        @endforeach

        <div class="text-end mb-4">
          <a href="{{ route('berita-desa') }}" class="btn btn-success">
            Lihat Semua Berita 
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

      <div class="section-title mt-5">
  <h2 class="text-dark">Tentang Desa</h2>
</div>

<div class="row">
  <div class="col-lg-6">
    <div class="content text-start">
      <h3>Desa Padamukti, kecamatan Solokanjeruk, Bandung, Jawa Barat.</h3>
      <p>
        Desa Padamukti, dengan segala potensi alam dan budayanya, merupakan contoh desa yang berkembang dengan tetap menjaga kearifan lokal dan tradisi. Kehidupan yang harmonis, alam yang indah, serta nilai-nilai kebersamaan menjadikan Desa Padamukti sebagai tempat yang nyaman untuk tinggal dan berkunjung. Potensi besar yang dimiliki desa ini perlu terus dikembangkan dengan dukungan semua pihak, sehingga kesejahteraan masyarakatnya dapat terus meningkat.
      </p>
      <a href="{{ route('tentang-desa') }}" class="btn btn-success d-inline-flex align-items-center gap-1 mt-3">
        Lanjutkan Membaca <i class="bi bi-arrow-right"></i>
      </a>                      
    </div>
  </div>
  <div class="col-lg-6 text-center">
    <img src="green/assets/img/slider 3.jpg" alt="Tentang Desa" class="img-fluid w-80" style="margin-top: 20px;">
  </div>
</div>


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Pengumuman Desa</h2>
        @foreach($pengumuman as $item)
        <div class="card text-start mb-3">
          <div class="card-body">
            <h5 class="card-title" style="font-size: 1.5em; font-weight: bold; color: #000;">
              <a href="/public/detail_pengumuman" class="mb-0">{{ $item->judul }}</a>
            </h5>
            <p class="card-text">{{ $item->deskripsi }}</p>
          </div>
        </div>
        @endforeach
      </div>
      <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Lokasi Desa</h2>
      <div class="row justify-content-center">
        <div class="col-lg-50 d-flex align-items-stretch mt-5">
          <div class="info w-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9599.715435800841!2d107.75721164857325!3d-7.012227205968178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c6aee51c0af3%3A0xae7bc5e161ed42f9!2sPadamukti%2C%20Solokanjreruk%2C%20Bandung%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1718207269561!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

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
            <button type="submit" class="btn btn-primary">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Login -->

  <!-- Tombol Login -->
  <!-- End Tombol Login -->

@endsection
