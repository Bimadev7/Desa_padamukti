@extends('layouts.mainPublic')

@section('title', 'Berita Desa')

@section('content')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Berita Desa</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Berita Desa</li>
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
                            <h3 class="mb-2">Berita Pertama</h3> <!-- Adjusted margin for heading -->
                            <div class="mb-1 text-body-secondary">12 Juni 2024</div>
                            <p class="card-text mb-3">Ini adalah contoh Berita pertama. Anda bisa menggantinya dengan konten sesuai.</p> <!-- Adjusted margin for paragraph -->
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="path/to/image1.jpg" alt="Berita" width="200" height="250">
                        </div>
                    </div>
                </div>
                <!-- Repeat the structure for other news articles -->
                <div class="col-md-12 ps-3">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static text-start">
                            <h3 class="mb-2">Berita Kedua</h3>
                            <div class="mb-1 text-body-secondary">11 Juni 2024</div>
                            <p class="card-text mb-3">Ini adalah contoh Berita kedua. Anda bisa menggantinya dengan konten sesuai.</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="path/to/image2.jpg" alt="Berita" width="200" height="250">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ps-3">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static text-start">
                            <h3 class="mb-2">Berita Ketiga</h3>
                            <div class="mb-1 text-body-secondary">10 Juni 2024</div>
                            <p class="card-text mb-3">Ini adalah contoh Berita ketiga. Anda bisa menggantinya dengan konten sesuai.</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="path/to/image3.jpg" alt="Berita" width="200" height="250">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- About and Archives Section -->
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst">Categories</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#category1">Technology</a></li>
                        <li><a href="#category2">Health</a></li>
                        <li><a href="#category3">Business</a></li>
                        <li><a href="#category4">Travel</a></li>
                        <li><a href="#category5">Sports</a></li>
                        <li><a href="#category6">Entertainment</a></li>
                    </ul>
                </div>
                <div class="p-4 mb-3 bg-light rounded">
    <h4 class="fst">Berita Terakhir</h4>
    <ol class="list-unstyled mb-0">
        <li>
            <a href="#">Berita 1</a>
            <div class="tanggal small">16 Juni 2024</div>
        </li>
        <li>
            <a href="#">Berita 2</a>
            <div class="tanggal small">15 Juni 2024</div>
        </li>
        <li>
            <a href="#">Berita 3</a>
            <div class="tanggal small">14 Juni 2024</div>
        </li>
        <!-- Add more archive links as needed -->
    </ol>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
