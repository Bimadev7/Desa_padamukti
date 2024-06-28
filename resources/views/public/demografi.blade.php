@extends('layouts.mainPublic')

@section('title', 'Demografi Desa')

@section('content')
    <!-- Breadcrumbs -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex align-items-center">
                <ol>
                    <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
                    <li>Demografi Desa</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="container">
        <article class="blog-post mb-5">
            <h4 class="mb-4" style="color: #5cb874"><strong>Demografi Desa</strong></h4>
            <p>Demografi desa merujuk pada studi tentang struktur penduduk dan karakteristik populasi di wilayah pedesaan. Ini mencakup berbagai aspek seperti jumlah penduduk, usia, jenis kelamin, tingkat pendidikan, pekerjaan, dan distribusi geografis mereka di dalam desa tersebut.</p>
        </article>

        <!-- Data Section -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kelahiran</h5>
                        <div class="text-center">
                            <img src="/image/bayi.jpg" class="img-fluid mb-2" style="max-width: 100px; margin-right: 50px;" alt="BPD Image">
                        </div>
                        <p class="card-text">Jumlah kelahiran di desa tahun ini adalah {{ $angka_kelahiran }} orang.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kematian</h5>
                        <div class="text-center">
                            <img src="/image/mati1.jpg" class="img-fluid mb-2" style="max-width: 100px; margin-right: 50px;" alt="BPD Image">
                        </div>
                        <p class="card-text">Jumlah kematian di desa tahun ini adalah {{ $angka_kematian }} orang.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Penduduk</h5>
                        <div class="text-center">
                            <img src="/image/orang.jpg" class="img-fluid mb-2" style="max-width: 100px; margin-right: 50px;" alt="BPD Image">
                        </div>
                        <p class="card-text">Jumlah total penduduk di desa adalah {{ $jumlah_penduduk }} orang.</p>
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
                        <td>{{ $jumlah_pria }} Jiwa</td>
                        <td>{{ $persentase_pria }} %</td>
                    </tr>
                    <tr>
                        <td>Perempuan</td>
                        <td>{{ $jumlah_perempuan }} Jiwa</td>
                        <td>{{ $persentase_perempuan }} %</td>
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
                        <td>{{ $jumlah_anak_anak }} Jiwa</td>
                        <td>{{ $persentase_anak_anak }} %</td>
                    </tr>
                    <tr>
                        <td>18 – 56</td>
                        <td>{{ $jumlah_dewasa }} Jiwa</td>
                        <td>{{ $persentase_dewasa }} %</td>
                    </tr>
                    <tr>
                        <td>56 ke-atas</td>
                        <td>{{ $jumlah_lansia }} Jiwa</td>
                        <td>{{ $persentase_lansia }} %</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-center bg-success text-white">Total Jumlah Penduduk: {{ $jumlah_penduduk }} Jiwa</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
