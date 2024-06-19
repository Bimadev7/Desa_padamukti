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
                            <img src="{{ asset('images/' . $berita->image) }}" alt="Berita" width="200" height="150">

                            <h6>{{ $berita->caption_capture }}</h6>
                            <hr>
                            <p>{{ $berita->deskripsi }}</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="fst-italic">About</h4>
                    <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <!-- Example Archives -->
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection