@extends('layouts.mainPublic')


@section('title', 'Pengumuman Desa')

@section('content')
<style>
    /* Menyesuaikan gaya font untuk tag <li> dalam custom-list */
    .custom-list {
        font-family: 'Font yang Anda inginkan', sans-serif; /* Ganti 'Font yang Anda inginkan' dengan nama font yang Anda pilih */
        font-size: 16px; /* Sesuaikan ukuran font sesuai kebutuhan */
        line-height: 1.8; /* Sesuaikan line-height sesuai kebutuhan */
    }
    .custom-list li {
        /* Tambahan gaya khusus untuk <li> di dalam custom-list jika diperlukan */
    }
</style>
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex align-items-center">
            <ol>
                <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
                <li>Lembaga Desa</li>
            </ol>
        </div>
    </div>
</section>
<div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Badan Permusyawaratan Desa</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/' . $lembaga->image) }}" class="img-fluid" alt="BPD Image">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Lembaga</th>
                            <td>:</td>
                            <td>{{ $lembaga->nama_lembaga }}</td>
                        </tr>
                        {{-- <tr>
                            <th>Singkatan</th>
                            <td>:</td>
                            <td>BPD</td>
                        </tr>
                        <tr>
                            <th>Dasar Hukum / SK Pembentukan</th>
                            <td>:</td>
                            <td></td>
                        </tr> --}}
                        <tr>
                            <th>Alamat Kantor</th>
                            <td>:</td>
                            <td>{{ $lembaga->alamat }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="divider divider-style-4 divider-primary divider-medium mt-4">
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Tugas Pokok Badan Permusyawaratan Desa</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>            
                <p class="lead text-justify">
                    {{ $lembaga->deskripsi_profil }}
                </p>
                <div class="divider divider-style-4 divider-primary divider-medium">
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- 
<div class="container pt-2 pb-4">
    <div class="row">
        <div class="col">
            <h2 class="font-weight-bold">Daftar Anggota Badan Permusyawaratan Desa</h2>
            <table class="table table-bordered table-hover table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lembaga->kepengurusan as $kepengurusan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kepengurusan->nama }}</td>
                        <td>{{ $kepengurusan->jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> -->
@endsection
