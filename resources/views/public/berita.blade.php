@extends('layout_public.main')

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
                            <p class="card-text mb-3">{{ $item->deskripsi_singkat }}</p>
                            <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            {{-- <img src="{{ asset($item->image) }}" alt="Berita" width="200" height="250"> --}}
                            <img src="{{ asset('images/' . $item->image) }}" alt="Berita" width="200" height="250">

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <!-- About and Archives Section -->
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">Tentang</h4>
                    <p class="mb-0">Sesuaikan bagian ini untuk memberi informasi kepada pengunjung tentang publikasi Anda, penulis, konten, atau hal lainnya.</p>
                </div>
                <div class="p-4">
                    <h4 class="fst-italic">Arsip</h4>
                    <ol class="list-unstyled mb-0">
                        <!-- Anda bisa menambahkan logika untuk menampilkan arsip berdasarkan bulan/tahun di sini -->
                        @foreach($berita as $item)
                        <li><a href="#">{{ $item->created_at->format('F Y') }}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
