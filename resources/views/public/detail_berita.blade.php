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
                            <p class="blog-post-meta text-center">{{ $berita->created_at->format('d M Y') }} by <a href="#">{{ $berita->penulis }}</a></p>
                            <img src="{{ asset($berita->image) }}" alt="{{ $berita->judul }}" class="img-fluid w-80" width="200" height="250">

                            {{-- <img src="{{ asset('images/' . $berita->gambar) }}" class="img-fluid w-80" alt="{{ $berita->judul }}"> --}}
                            <p>{{ $berita->deskripsi }}</p>
                            <hr>
                            <p>{{ $berita->caption_capture }}</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="col-md-4">
            <!-- Sidebar Section -->
            <div class="position-sticky" style="top: 2rem;">
                <!-- Categories Section -->
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">Kategori</h4>
                    <ul class="mb-0">
                        <li><a href="#">Kategori 1</a></li>
                        <li><a href="#">Kategori 2</a></li>
                        <li><a href="#">Kategori 3</a></li>
                        <li><a href="#">Kategori 4</a></li>
                        <li><a href="#">Kategori 5</a></li>
                    </ul>
                </div>
                <div class="p-4">
                    <h4 class="fst-italic">Berita Terakhir</h4>
                    <ol class="list-unstyled mb-0">
                    @foreach($berita as $item)
                    <li><a href="#">{{ $item->judul }}</a></li>
                     @endforeach
                </ol>
          </div>
        </div>
      </div>
    </div>
@endsection
