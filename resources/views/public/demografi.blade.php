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
                            <img src="/image/bayi.jpg" class="img-fluid" style="max-width: 100px; margin-right: 50px;" alt="BPD Image">
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
                            <img src="/image/mati1.jpg" class="img-fluid" style="max-width: 100px; margin-right: 50px;" alt="BPD Image">
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
                            <img src="/image/orang.jpg" class="img-fluid" style="max-width: 100px; margin-right: 50px;" alt="BPD Image">
                        </div>
                        <p class="card-text">Jumlah total penduduk di desa adalah Z orang.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Demographic Table Section -->
        <div class="table-responsive mt-5">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th colspan="3" class="text-center">TABEL JUMLAH PENDUDUK</th>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <th>Jumlah Penduduk</th>
                        <th>Persentase (%)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Laki-laki</td>
                        <td>7.862 Jiwa</td>
                        <td>50 %</td>
                    </tr>
                    <tr>
                        <td>Perempuan</td>
                        <td>7.985 Jiwa</td>
                        <td>50 %</td>
                    </tr>
                </tbody>
                <thead class="thead-light">
                    <tr>
                        <th>Usia</th>
                        <th>Jumlah Penduduk</th>
                        <th>Persentase (%)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0 – 17</td>
                        <td>5.341 Jiwa</td>
                        <td>34 %</td>
                    </tr>
                    <tr>
                        <td>18 – 56</td>
                        <td>9.304 Jiwa</td>
                        <td>59 %</td>
                    </tr>
                    <tr>
                        <td>56 ke-atas</td>
                        <td>1.202 Jiwa</td>
                        <td>7 %</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-center bg-success text-white">Total Jumlah Penduduk: 15.847 Jiwa</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
