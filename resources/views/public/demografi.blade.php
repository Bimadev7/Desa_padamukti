@extends('layouts.mainPublic')

@section('title', 'Demografi Desa')

@section('content')
    <!-- Breadcrumbs -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Demografi Desa</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Demografi Desa</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="container">
        <article class="blog-post mb-5">
            <h2 class="display-5 link-body-emphasis mb-4 text-center">Demografi Desa</h2>
            <hr>
            <p>Demografi desa merujuk pada studi tentang struktur penduduk dan karakteristik populasi di wilayah pedesaan. Ini mencakup berbagai aspek seperti jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, dan distribusi geografis mereka di dalam desa tersebut.</p>
        </article>

        <!-- Data Section -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kelahiran</h5>
                        <div class="text-center">
                        <img src="/image/bayi.jpg" class="img-fluid" style="max-width: 100px; margin-right: 50px; alt="BPD Image">
                        </div>
                        <p class="card-text">Jumlah kelahiran di desa tahun ini adalah X orang.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kematian</h5>
                        <div class="text-center">
                        <img src="/image/mati1.jpg" class="img-fluid" style="max-width: 100px; margin-right: 50px; alt="BPD Image">
                        </div>
                        <p class="card-text">Jumlah kematian di desa tahun ini adalah Y orang.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Penduduk</h5>
                        <div class="text-center">
                        <img src="/image/orang.jpg" class="img-fluid" style="max-width: 100px; margin-right: 50px; alt="BPD Image">
                        </div>
                        <p class="card-text">Jumlah total penduduk di desa adalah Z orang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
