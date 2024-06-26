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
        <h3 class="link-body-emphasis mb-4">Tentang Desa Padamukti</h3>
        <p style="max-height: 400px; overflow-y: auto; text-align: justify;">{!! $tentang_desa !!}</p>
        
    </article>
</div>
@endsection
