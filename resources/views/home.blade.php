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

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <a href="your-url" class="text-decoration-none">
          <h2 class="text-dark">Berita Desa</h2>
        </a>

        {{-- berita --}}
        <div class="row mb-2">
          @foreach($berita as $item)
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static text-start">
                {{-- <strong class="d-inline-block mb-2 text-primary-emphasis">{{ $item->kategori->nama_kategori }}</strong> --}}
                <h3 class="mb-0">{{ $item->judul }}</h3>
                <div class="mb-1 text-body-secondary">{{ $item->created_at->format('M Y') }}</div>
                <p class="card-text mb-auto">{{ $item->deskripsi }}</p>
                <a href="{{ route('berita.detailBerita', $item->id) }}" class="icon-link gap-1 icon-link-hover stretched-link">
                  Lanjutkan Membaca
                  <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                </a>
              </div>
        
              <div class="col-auto d-none d-lg-block">
                  <img src="{{ asset('images/' . $item->image) }}" alt="Berita" width="250" height="250">
             
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
        <div class="text-end mb-4">
          <a href="#" class="btn btn-success">Lihat Semua Berita</a>
        </div>
        
        
          {{-- End sesion berita --}}
        
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="green/assets/img/about.jpg" class="img-fluid w-80" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content text-start">
            <h3>Tentang Desa</h3>
            <p>
              Desa Padamukti, dengan segala potensi alam dan budayanya, merupakan contoh desa yang berkembang dengan tetap menjaga kearifan lokal dan tradisi. Kehidupan yang harmonis, alam yang indah, serta nilai-nilai kebersamaan menjadikan Desa Padamukti sebagai tempat yang nyaman untuk tinggal dan berkunjung. Potensi besar yang dimiliki desa ini perlu terus dikembangkan dengan dukungan semua pihak, sehingga kesejahteraan masyarakatnya dapat terus meningkat.
            </p>
            <a href="{{ route('tentang-desa') }}" class="btn btn-success">
              Lanjutkan Membaca
            </a>            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Pengumuman Desa</h2>
        @foreach($pengumuman as $item)
        <div class="card text-start mb-3">
          <div class="card-body">
            <h5 class="card-title">
              <a href="your-route-url" class="text-decoration-none">{{ $item->judul }}</a>
            </h5>
            <p class="card-text">{{ $item->deskripsi }}</p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-50 d-flex align-items-stretch mt-5">
          <div class="info w-100">
     
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9599.715435800841!2d107.75721164857325!3d-7.012227205968178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c6aee51c0af3%3A0xae7bc5e161ed42f9!2sPadamukti%2C%20Solokanjreruk%2C%20Bandung%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1718207269561!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
@endsection
