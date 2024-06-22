@extends('layouts.mainPublic')


@section('title', 'Tentang Tata Kelola Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Tentang Tata Kelola Desa</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Tentang Tata Kelola Desa</li>
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
