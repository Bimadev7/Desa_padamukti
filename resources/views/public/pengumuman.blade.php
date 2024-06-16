@extends('layout.main')

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
            <!-- About and Archives Section -->
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Sesuaikan bagian ini untuk memberi tahu pengunjung tentang publikasi Anda, penulis, konten, atau hal lainnya.</p>
                </div>
                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Maret 2024</a></li>
                        <li><a href="#">Februari 2024</a></li>
                        <li><a href="#">Januari 2024</a></li>
                        <li><a href="#">Desember 2023</a></li>
                        <li><a href="#">November 2023</a></li>
                        <li><a href="#">Oktober 2023</a></li>
                        <li><a href="#">September 2023</a></li>
                        <li><a href="#">Agustus 2023</a></li>
                        <li><a href="#">Juli 2023</a></li>
                        <li><a href="#">Juni 2023</a></li>
                        <li><a href="#">Mei 2023</a></li>
                        <li><a href="#">April 2023</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
