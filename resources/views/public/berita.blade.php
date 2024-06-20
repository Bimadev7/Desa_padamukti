@extends('layouts.mainPublic')

@section('title', 'Berita Desa')

@section('content')

<!-- Breadcrumbs -->
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
            @foreach($berita as $item)
            <div class="row mb-2">
                <div class="col-md-12 ps-3">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static text-start">
                            <h3 class="mb-2">{{ $item->judul }}</h3>
                            <div class="mb-1 text-body-secondary">{{ $item->created_at->format('d F Y') }}</div>
                            <p class="card-text mb-3">{{ $item->deskripsi }}</p>
                            <a href="{{ route('berita.detailBerita', $item->id) }}" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
<<<<<<< HEAD
                            <img src="{{ asset($item->image) }}" alt="Berita" width="200" height="200">
                            {{-- <img src="{{ asset('images/' . $item->image) }}" alt="Berita" width="200" height="250"> --}}
=======
                            {{-- <img src="{{ asset($item->image) }}" alt="Berita" width="200" height="250"> --}}
                            <img src="{{ asset('images/' . $item->image) }}" alt="Berita" width="200" height="250">
>>>>>>> 7319cf94076c318afdc866926198d62f0a9f7cbc

                        </div>
                    </div>
                </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-4">
            <!-- Sidebar Section -->
            <div class="position-sticky" style="top: 2rem;">
                <!-- Categories Section -->
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">Berita Kategori</h4>
                    <ul class="mb-0">
<<<<<<< HEAD
                        <li><a href="#">Berita Desa </a></li>
                        <li><a href="#">Berita Kementrian/a></li>
=======
                        <li><a href="#">Berita Desa 2</a></li>
                        <li><a href="#">Berita Kementria</a></li>
>>>>>>> 7319cf94076c318afdc866926198d62f0a9f7cbc
                        <li><a href="#">Berita Pemerintah Kabupaten</a></li>
                        <li><a href="#">Berita Pemerintah Provinsi</a></li>
                    </ul>
                </div>
<<<<<<< HEAD
               <div>
                    <h4 class="p-3 fst-italic">Berita Terakhir</h4>
=======
                <div class="p-4">
                    <h4 class="fst-italic">Berita Terakhir</h4>
>>>>>>> 7319cf94076c318afdc866926198d62f0a9f7cbc
                    <ol class="list-unstyled mb-0">
                        @foreach($news as $new)
                        <li class="bg-light rounded mt-2 p-3"><a href="{{ route('berita.detailBerita', $new->id) }}">{{ $new->judul }}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
