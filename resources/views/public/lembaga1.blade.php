@extends('layout.main')

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
        <div class="d-flex justify-content-between align-items-center">
            <h2>Lembaga Desa</h2>
            <ol>
                <li><a href="/">Home</a></li>
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
                    <img src="/path/to/your/image.png" class="img-fluid" alt="BPD Image">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Lembaga</th>
                            <td>:</td>
                            <td>BADAN PERMUSYAWARATAN DESA</td>
                        </tr>
                        <tr>
                            <th>Singkatan</th>
                            <td>:</td>
                            <td>BPD</td>
                        </tr>
                        <tr>
                            <th>Dasar Hukum / SK Pembentukan</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Alamat Kantor</th>
                            <td>:</td>
                            <td>Jl. Raya Padalarang No.125 A</td>
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
                <hr>            <p class="lead text-justify">
                Badan Permusyawaratan Desa (BPD) dalam Permendagri No.110/2016 Tugas Badan Permusyawaratan Desa (BPD) mempunyai fungsi, membahas dan menyepakati Rancangan Peraturan Desa bersama Kepala Desa, menampung dan menyalurkan aspirasi masyarakat Desa, dan melakukan pengawasan kinerja Kepala Desa. Selain melaksanakan fungsi diatas, Badan Permusyawaratan Desa juga mempunyai tugas sebagai berikut. Tugas Badan Permusyawaratan Desa:
                <ul class="lead text-justify">
                    <li>Menggali aspirasi masyarakat</li>
                    <li>Menampung aspirasi masyarakat</li>
                    <li>Mengelola aspirasi masyarakat</li>
                    <li>Menyalurkan aspirasi masyarakat</li>
                    <li>Menyelenggarakan musyawarah Tugas Badan Permusyawaratan Desa (BPD)</li>
                    <li>Menyelenggarakan musyawarah Desa</li>
                    <li>Membentuk panitia pemilihan Kepala Desa</li>
                    <li>Menyelenggarakan musyawarah Desa khusus untuk pemilihan Kepala Desa antarwaktu</li>
                    <li>Membahas dan menyepakati rancangan Peraturan Desa bersama Kepala Desa</li>
                    <li>Melaksanakan pengawasan terhadap kinerja Kepala Desa</li>
                    <li>Melakukan evaluasi laporan keterangan penyelenggaraan Pemerintahan Desa</li>
                    <li>Menciptakan hubungan kerja yang harmonis dengan Pemerintah Desa dan lembaga Desa lainnya; dan</li>
                    <li>Melaksanakan tugas lain yang diatur dalam ketentuan peraturan perundang-undangan</li>
                </ul>
            </p>
            <div class="divider divider-style-4 divider-primary divider-medium">
                <hr>
            </div>
        </div>
    </div>
</div>

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
                    <tr>
                        <td>1</td>
                        <td>Junaedi, S.Pd</td>
                        <td>Ketua</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sriyanto</td>
                        <td>Wakil Ketua</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Purwanti</td>
                        <td>Sekretaris</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ahmad Yani</td>
                        <td>Anggota</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Siti Rohmah</td>
                        <td>Anggota</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

            </div>
