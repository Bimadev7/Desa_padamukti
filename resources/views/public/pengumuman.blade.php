@extends('layouts.mainPublic')

@section('title', 'Pengumuman Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs mb-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <ol>
                <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
                <li>Pengumuman Desa</li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <!-- Cards Section -->
            @foreach($pengumuman as $item)
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('images/' . $item->image) }}" alt="Pengumuman" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->judul }}</h5>
                                    <p class="card-text">{!! (strlen($item->deskripsi) > 200) ? substr($item->deskripsi, 0, 200) . '...' : $item->deskripsi !!}</p>
                                    <p class="card-text"><small class="text-muted">{{ $item->created_at->format('d F Y') }}</small></p>
                                    <a href="{{ route('pengumuman.detailPengumuman', $item->id) }}" class="icon-link gap-1 icon-link-hover stretched-link">Lanjutkan Membaca</a>
                                </div>
                            </div>
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
                <div class="p-4 bg-light">
                    <h4 class="fst-italic">Pengumuman Terakhir</h4>
                    <ol class="list-unstyled mb-0">
                        @foreach($news as $new)
                        <li class="rounded mt-2 p-3"><a href="{{ route('pengumuman.detailPengumuman', $new->id) }}">{{ $new->judul }}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
