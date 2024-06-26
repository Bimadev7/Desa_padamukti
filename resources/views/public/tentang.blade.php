@extends('layouts.mainPublic')


@section('title', 'Tentang Tata Kelola Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex align-items-center">
            <ol>
                <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
                <li>Tentang Desa</li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-4 text-center">Tentang Desa Padamukti</h2>
        <p>{{ $tentang_desa }}</p>
        
    </article>
</div>
@endsection
