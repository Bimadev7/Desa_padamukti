@extends('layouts.mainPublic')


@section('title', 'Sejarah Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex align-items-center">
            <ol>
                <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
                <li>Sejarah Desa</li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-4 text-center">Sejarah Desa</h2>
        <p>{{ $sejarah }}</p>
        
    </article>
</div>
@endsection
