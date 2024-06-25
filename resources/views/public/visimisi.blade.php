@extends('layouts.mainPublic')

@section('title', 'Visi & Misi')

@section('content')
<style>
    dt {
        text-align: center; /* Menengahkan teks di dalam elemen <dt> */
        font-size: 2rem; /* Ubah ukuran font menjadi lebih besar */
        font-weight: bold; /* Berikan tebal pada teks */
        margin-bottom: 10px; /* Berikan margin di bawah teks */
        position: relative; /* Atur posisi relatif untuk menempatkan garis bawah */
    }

    dt::after {
        content: ''; /* Tambahkan konten kosong */
        position: absolute; /* Atur posisi absolut untuk garis bawah */
        bottom: -5px; /* Geser garis bawah ke bawah sejauh 5px */
        left: 50%; /* Tempatkan garis bawah di tengah */
        transform: translateX(-50%); /* Geser ke kiri sebesar 50% dari lebar elemen <dt> */
        width: 50px; /* Lebar garis bawah */
        border-bottom: 2px solid #000; /* Tambahkan garis bawah dengan ketebalan 2px dan warna hitam */
    }
</style>
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
            <dd>{{ $visi }}</dd>
            <br>

            <dt>Misi</dt>
            <dd>{{ $misi }}</dd>
        </dl>
    </article>
</div>
@endsection
