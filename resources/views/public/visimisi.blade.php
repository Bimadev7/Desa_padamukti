@extends('layouts.mainPublic')

@section('title', 'Visi & Misi')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Visi & Misi</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Visi & Misi</li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-4 text-center">Visi Misi Desa</h2>
        <br>
        <dl>
            <dt>Visi</dt>
            <dd>T{{ $visi }}</dd>
            <br>

            <dt>Misi</dt>
            <dd>{{ $misi }}</dd>
        </dl>
    </article>
</div>
@endsection
