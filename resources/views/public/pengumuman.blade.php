@extends('layouts.mainPublic')

@section('title', 'Pengumuman Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Pengumuman Desa</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Pengumuman Desa</li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <!-- Cards Section -->
            <div class="row mb-2">
                <div class="col-md-12 ps-3">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static text-start">
                            <h3 class="mb-0">Pengumuman 1</h3>
                            <div class="mb-1 text-body-secondary">12 Juni 2024</div>
                            <p class="card-text mb-auto">Ini adalah contoh pengumuman pertama. Anda bisa menggantinya dengan pengumuman yang sesuai.</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">  
                            <img src="#" alt="Pengumuman 1" width="200" height="250">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ps-3">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static text-start">
                            <h3 class="mb-0">Pengumuman 2</h3>
                            <div class="mb-1 text-body-secondary">11 Juni 2024</div>
                            <p class="card-text mb-auto">Ini adalah contoh pengumuman kedua. Anda bisa menggantinya dengan pengumuman yang sesuai.</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="path/to/image2.jpg" alt="Pengumuman 2" width="200" height="250">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ps-3">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static text-start">
                            <h3 class="mb-0">Pengumuman 3</h3>
                            <div class="mb-1 text-body-secondary">10 Juni 2024</div>
                            <p class="card-text mb-auto">Ini adalah contoh pengumuman ketiga. Anda bisa menggantinya dengan pengumuman yang sesuai.</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="path/to/image3.jpg" alt="Pengumuman 3" width="200" height="250">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
    <!-- Kategori -->
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">Kategori</h4>
            <ul class="list-unstyled mb-0">
                <li><a href="#">Kategori 1</a></li>
                <li><a href="#">Kategori 2</a></li>
                <li><a href="#">Kategori 3</a></li>
                <!-- Tambahkan kategori lain sesuai kebutuhan -->
            </ul>
        </div>
    </div>

    <!-- Berita Terakhir -->
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">Berita Terakhir</h4>
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="#">Judul Berita 1</a>
                    <p class="small text-muted">1 Juni 2024</p>
                </li>
                <li>
                    <a href="#">Judul Berita 2</a>
                    <p class="small text-muted">2 Juni 2024</p>
                </li>
                <li>
                    <a href="#">Judul Berita 3</a>
                    <p class="small text-muted">3 Juni 2024</p>
                </li>
                <!-- Tambahkan berita terakhir lain sesuai kebutuhan -->
            </ul>
        </div>
    </div>
</div>

@endsection
