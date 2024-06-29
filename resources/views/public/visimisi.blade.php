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
        <div class="d-flex align-items-center">
            <ol>
                <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
                <li>Visi dan Misi Desa</li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
    <article class="blog-post">
        <h4 class="mb-4" style="color: #5cb874"><strong>Visi Misi Desa</strong></h4>
        <br>
        <dl>
            <h4>Visi</h4>
            <dd>{!! $visi !!}</dd>
            <br>

            <h4>Misi</h4>
            <dd>{!! $misi !!}</dd>
        </dl>
    </article>
</div>
@endsection
