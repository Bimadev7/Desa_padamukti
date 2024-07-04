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
                    <li><a href="{{ url('/public/berita') }}">Pengumuman Desa</a></li>
                    <li>{{ $pengumuman->judul }}</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row g-5">
            <div class="col-md-8">
                <div class="container">
                    <div class="row g-5 justify-content-center">
                        <div class="col-md-12">
                        <div class="section-title mt-5">
                                <h3 class="text-dark">{{ $pengumuman->judul }}</h3>
                            </div>
                            <article class="blog-post">
                                <p class="blog-post-meta text-center">{{ $pengumuman->created_at->format('d M Y') }} by <a href="#">{{ $pengumuman->penulis }}</a></p>
                                <div class="text-center">
                                    <img src="{{ asset('images/' . $pengumuman->image) }}" alt="pengumuman" class="img-fluid" style="max-width: 100%; height: auto;">
                                </div>
                                <h6 class="text-center">{{ $pengumuman->caption_capture }}</h6>
                                <hr>
                                <p>{!! $pengumuman->deskripsi !!}</p>
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
                        <h4 class="fst-italic">Pengumuman Terakhir</h4>
                        <ol class="list-unstyled mb-0">
                            @foreach($news as $new)
                            <li class="bg-light rounded mt-2 p-3"><a href="{{ route('pengumuman.detailPengumuman', $new->id) }}">{{ $new->judul }}</a></li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
