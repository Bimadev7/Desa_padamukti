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
                    <li><a href="{{ url('/public/berita') }}">Berita Desa</a></li>
                    <li>{{ $berita->judul }}</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="row g-5">
        <div class="col-md-8">
            <div class="container">
                <div class="row g-5 justify-content-center">
                    <div class="col-md-8 ps-3 ms-auto">
                        <article class="blog-post">
                        <div class="section-title mt-5">
                                <h3 class="text-dark">{{ $berita->judul }}</h3>
                            </div>
                            <p class="blog-post-meta text-center">{{ $berita->created_at->format('d M Y') }} by <a href="#">{{ $berita->penulis }}</a></p>
                            <img src="{{ asset('images/' . $berita->image) }}" text="ro" alt="Berita" style="max-width: 100%; height: auto;">
                            <h6 style="margin-top: 10px;">{{ $berita->caption_capture }}</h6>
                            

                            <p>{!! $berita->deskripsi_singkat !!}</p>

                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Sidebar Section -->
            <div class="position-sticky" style="top: 2rem;">
                <!-- Categories Section -->
                <div class="p-4">
                    <h4 class="fst-italic">Berita Terakhir</h4>
                    <ol class="list-unstyled mb-0">
                        @foreach($news as $new)
                        <li class="bg-light rounded mt-2 p-3"><a href="{{ route('berita.detailBerita', $new->id) }}">{{ $new->judul }}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection