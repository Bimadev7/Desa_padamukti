@extends('layouts.mainPublic')

@section('title', 'Struktur Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Struktur Desa</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Struktur Desa</li>
            </ol>
        </div>
    </div>
</section>

<style>
    .layout {
        display: flex;
        margin-top: 20px;
    }
    .sidebar {
        width: 250px;
        background-color: #FFFFFF;
        padding: 10px;
        box-sizing: border-box; /* Memastikan padding tidak menambah lebar elemen */
    }
    .sidebar ul {
        list-style-type: none;
        padding: 0;
        margin: 0; /* Menghilangkan margin default */
    }
    .sidebar ul li {
        padding: 10px;
        cursor: pointer;
    }
    .sidebar ul li a {
        text-decoration: none;
        color: black;
    }
    .content {
        flex-grow: 1;
        padding: 20px;
        font-family: Arial, sans-serif;
    }
    .title {
        font-size: 24px;
        font-weight: bold;
        color: #2c3e50;
    }
    .profile-card {
        margin-top: 15px;
        border: 1px solid #ccc;
        border-radius: 10px;
        width: 200px;
        text-align: center;
        padding: 10px;
    }

    .profile-card img {
        width: 100%;
        border-radius: 10px;
    }

    .profile-card .name {
        font-size: 20px;
        font-weight: bold;
        margin-top: 10px;
    }

    .profile-card .position {
        font-size: 15px;
        color: #555;
        margin-top: 5px;
    }

    /* Media query untuk layar kecil (misalnya, smartphone) */
    @media (max-width: 768px) {
        .layout {
            flex-direction: column; /* Mengubah orientasi layout menjadi vertikal */
        }
        .sidebar {
            width: 100%; /* Mengisi seluruh lebar ketika di layar kecil */
            margin-bottom: 20px; /* Memberi jarak antara sidebar dan content */
        }
        .content {
            width: calc(100% - 10px); /* Mengatur lebar content agar tetap di sebelah kanan sidebar */
            margin-left: 40px; /* Memberi margin agar tidak menempel langsung dengan sidebar */
        }
        .profile-card {
            width: 100%; /* Mengisi seluruh lebar ketika di layar kecil */
            margin-top: 10px;
        }
    }
</style>


<div class="container">
    <div class="layout">
        <div class="sidebar">
            <ul>
                <li><a href="#" data-content="struktur-organisasi">Struktur Organisasi</a></li>
                <li><a href="#" data-content="kepala-desa">Kepala Desa</a></li>
                <li><a href="#" data-content="sekretaris-desa">Sekretaris Desa</a></li>
                <li><a href="#" data-content="kaur-pemerintahan">Kaur Pemerintahan</a></li>
                <li><a href="#" data-content="kaur-pembangunan">Kaur Pembangunan</a></li>
                <li><a href="#" data-content="kaur-pemberdayaan-masyarakat">Kaur Pemberdayaan Masyarakat</a></li>
                <li><a href="#" data-content="kaur-kesejahteraan-rakyat">Kaur Kesejahteraan Rakyat</a></li>
                <li><a href="#" data-content="kaur-umum">Kaur Umum</a></li>
                <li><a href="#" data-content="kaur-keuangan">Kaur Keuangan</a></li>
            </ul>
        </div>
         <!-- Content -->
         <div class="content" id="content">
            <h3>Struktur Desa</h3>
            <p>Selamat datang di menu struktur desa! Di sini, Anda dapat mengeksplorasi informasi mendetail tentang bagaimana Desa Padamukti diatur dan berkembang. Mulai dari pemerintahan desa yang bertanggung jawab mengelola kebijakan dan menyediakan layanan publik yang berkualitas,</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.sidebar ul li a');
        const content = document.getElementById('content');

        links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const contentId = this.getAttribute('data-content');
                loadContent(contentId);
            });
        });

        function loadContent(contentId) {
            let contentHtml = '';

            switch(contentId) {
                case 'struktur-organisasi':
                    contentHtml = `
                    <div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Struktur Desa</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid" alt="Kades padamukti">
                </div>`;
                    break;
                    case 'kepala-desa':
                    contentHtml = `
                    <div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Kepala Desa</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/' . $ketua->foto) }}" class="img-fluid" alt="Kades padamukti">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kepala Desa</td>
                        </tr>
                        <tr>
                            <th>Nama Pejabat</th>
                            <td>:</td>
                            <td>{{ $ketua->nama_pejabat }}</td>
                        </tr>
                        <tr>
                        <th>NIP</th>
                            <td>:</td>
                            <td>{{ $ketua->nip }}</td>
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
            <h2 class="font-weight-bold">Tugas Pokok Kepala Desa</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <p class="lead text-justify">
                {{ $ketua->deskripsi }}
            </p>
        </div>
    </div>
</div>`;
                    break;
                case 'sekretaris-desa':
                    contentHtml = `
                    <div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Sekertaris Desa</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid" alt="Kades padamukti">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Sekertaris Desa</td>
                        </tr>
                        <tr>
                            <th>Nama Pejabat</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td></td>
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
            <h2 class="font-weight-bold">Tugas Pokok Sekretaris Desa</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <p class="lead text-justify">
                Sekretaris desa mempunyai tugas sebagai berikut:
            </p>
            <ul class="lead text-justify">
                <li>Sekretaris desa/kelurahan berkedudukan sebagai unsur staff yang membantu kepala desa/lurah dalam melaksanakan tugas dan wewenangnya serta memimpin sekretariat desa/lurah.</li>
                <li>Sekretaris desa/kelurahan mempunyai tugas menjalankan fungsi administrasi kelurahan, pembangunan dan kemasyarakatan.</li>
            </ul>
            <p class="lead text-justify">
                Selain tugas tersebut di atas, seorang Sekretaris Desa harus mampu menjalankan fungsi administrator dengan penuh tanggung jawab. Berikut ini fungsi dari Sekdes, yaitu:
            </p>
            <ul class="lead text-justify">
                <li>Sebagai pelaksana urusan surat menyurat, kearsipan dan laporan.</li>
                <li>Sebagai pelaksana urusan keuangan.</li>
                <li>Sebagai pelaksana urusan administrasi pemerintahan, pembangunan, dan kemasyarakatan.</li>
            </ul>
            <p class="lead text-justify">
                Dalam melaksanakan tugas dan fungsinya sekretaris desa/kelurahan akan dibantu oleh Kepala Urusan. Merekalah yang menangani pelayanan ketatausahaan yang baik guna membantu Sekdes, diantaranya sebagai berikut:
            </p>
            <ul class="lead text-justify">
                <li>Kepala Urusan Pemerintahan</li>
                <li>Kepala Urusan Pembangunan</li>
                <li>Kepala Urusan Keuangan</li>
                <li>Kepala Urusan Umum</li>
            </ul>
            <div class="divider divider-style-4 divider-primary divider-medium">
                <hr>
            </div>
        </div>
    </div>
</div>
`;
                    break;
                case 'kaur-pemerintahan':
                    contentHtml = `
                    <div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Kaur Pemerintahan</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid" alt="Kaur Pemerintahan">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kaur Pemerintahan</td>
                        </tr>
                        <tr>
                            <th>Nama Pejabat</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td></td>
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
            <h2 class="font-weight-bold">Tugas Pokok Kaur Pemerintahan</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <p class="lead text-justify">
                Deskripsi Kaur Pemerintahan
            </p>
            </ul>
            </div>
        </div>
    </div>
</div>
`;
                    break;
                case 'kaur-pembangunan':
                    contentHtml = `
<div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Kaur Pembangunan</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid" alt="Kaur Pembangunan">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kaur Pembangunan</td>
                        </tr>
                        <tr>
                            <th>Nama Pejabat</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td></td>
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
            <h2 class="font-weight-bold">Tugas Pokok Kaur Pembangunan</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <p class="lead text-justify">
                Deskripsi Kaur Pembangunan
            </p>
        </div>
    </div>
</div>
`;
break;

                case 'kaur-pemberdayaan-masyarakat':
                    contentHtml = `
<div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Kaur Pemberdayaan Masyarakat</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid" alt="Kaur Pemberdayaan Masyarakat">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kaur Pemberdayaan Masyarakat</td>
                        </tr>
                        <tr>
                            <th>Nama Pejabat</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td></td>
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
            <h2 class="font-weight-bold">Tugas Pokok Kaur Pemberdayaan Masyarakat</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <p class="lead text-justify">
                Deskripsi Kaur Pemberdayaan Masyarakat
            </p>
        </div>
    </div>
</div>
`;
break;

                case 'kaur-kesejahteraan-rakyat':
                    contentHtml = `
<div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Kaur Kesejahteraan Rakyat</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid" alt="Kaur Kesejahteraan Rakyat">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kaur Kesejahteraan Rakyat</td>
                        </tr>
                        <tr>
                            <th>Nama Pejabat</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td></td>
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
            <h2 class="font-weight-bold">Tugas Pokok Kaur Kesejahteraan Rakyat</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <p class="lead text-justify">
                Deskripsi Kaur Kesejahteraan Rakyat
            </p>
        </div>
    </div>
</div>
`;
break;

                case 'kaur-umum':
                    contentHtml = `
<div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Kaur Umum</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid" alt="Kaur Umum">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kaur Umum</td>
                        </tr>
                        <tr>
                            <th>Nama Pejabat</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td></td>
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
            <h2 class="font-weight-bold">Tugas Pokok Kaur Umum</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <p class="lead text-justify">
                Deskripsi Kaur Umum
            </p>
        </div>
    </div>
</div>
`;
break;

                case 'kaur-keuangan':
                    contentHtml = `
<div class="container py-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="font-weight-bold">Kaur Keuangan</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="" class="img-fluid" alt="Kaur Keuangan">
                </div>
                <div class="col-md-9">
                    <table class="table table-borderless">
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kaur Keuangan</td>
                        </tr>
                        <tr>
                            <th>Nama Pejabat</th>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td>:</td>
                            <td></td>
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
            <h2 class="font-weight-bold">Tugas Pokok Kaur Keuangan</h2>
            <div class="divider divider-primary divider-small divider-small-center mb-3">
                <hr>
            </div>
            <p class="lead text-justify">
                Deskripsi Kaur Keuangan
            </p>
        </div>
    </div>
</div>
`;
break;

                default:
                    contentHtml = '<h3>Struktur Desa</h3><p>Content related to Struktur Desa will be displayed here.</p>';
            }

            content.innerHTML = contentHtml;
        }
    });
</script>
@endsection
