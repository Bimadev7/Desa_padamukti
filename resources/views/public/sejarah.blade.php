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
        <h4 class="mb-4" style="color: #5cb874"><strong>Sejarah Desa</strong></h4>
        <p>{!! $sejarah !!}</p>
        
    </article>
</div>
@endsection
