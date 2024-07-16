@extends('layouts.mainPublic')

@section('title', 'Struktur Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs mb-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <ol>
                <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
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
    .sidebar ul li a.active {
        color: green; /* Warna hijau untuk link aktif */
        font-weight: bold; /* Menebalkan teks link aktif */
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
        border-radius: 30px;
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
                <li><a href="#content" data-content="struktur-organisasi">Struktur Organisasi</a></li>
                @foreach($jabatans as $jabatan)
                    <li><a href="#" data-content="{{ $jabatan->id }}">{{ $jabatan->jabatan }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="content" id="content">
    <h3>Struktur Desa</h3>
    <p>Selamat datang di menu struktur desa! Di sini, Anda dapat mengeksplorasi informasi mendetail tentang bagaimana Desa Padamukti diatur dan berkembang. Mulai dari pemerintahan desa yang bertanggung jawab mengelola kebijakan dan menyediakan layanan publik yang berkualitas.</p>
    <div class="col-lg-12 text-center mb-5 mx-auto">
        <img src="{{ asset('images/strukturdesa.jpg') }}" alt="Tentang Desa" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>
</div>


        <div class="content" id="content">
            <div class="carousel-item active" style="background-image: url({{ asset('images/' . $slider1) }})">
                <div>
                    <!-- Content goes here -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.sidebar ul li a');
        const content = document.getElementById('content');

        function activateLink(link) {
            links.forEach(link => link.classList.remove('active'));
            link.classList.add('active');
        }

        links.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                activateLink(this);
                
                const contentId = this.getAttribute('data-content');
                if (contentId === 'struktur-organisasi') {
                    // Load default content for Struktur Organisasi
                    content.innerHTML = `
                        <h3>Struktur Desa</h3>
                        <p>Selamat datang di menu struktur desa! Di sini, Anda dapat mengeksplorasi informasi mendetail tentang bagaimana Desa Padamukti diatur dan berkembang. Mulai dari pemerintahan desa yang bertanggung jawab mengelola kebijakan dan menyediakan layanan publik yang berkualitas.</p>
                    `;
                } else {
                    loadContent(contentId);
                }
            });
        });

        function loadContent(id) {
            fetch(`/public/struktur-desa/${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data) {
                        let contentHtml = `
                        <div class="container py-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="font-weight-bold">${data.jabatan}</h2>
                                    <div class="divider divider-primary divider-small divider-small-center mb-3">
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('images/${data.image}') }}" class="img-fluid" alt="${data.jabatan}">
                                        </div>
                                        <div class="col-md-9">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <th>Jabatan</th>
                                                    <td>:</td>
                                                    <td>${data.jabatan}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Pejabat</th>
                                                    <td>:</td>
                                                    <td>${data.nama}</td>
                                                </tr>
                                                <tr>
                                                    <th>NIPD</th>
                                                    <td>:</td>
                                                    <td>${data.nip}</td>
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
                                <div class="col-lg-18">
                                    <h2 class="font-weight-bold">Tugas Pokok ${data.jabatan}</h2>
                                    <div class="divider divider-primary divider-small divider-small-center mb-3">
                                        <hr>
                                    </div>
                                    <div class="col-lg-20" style="margin-left: 10px;">
                                    <p class="lead text-justify">
                                        ${data.deskripsi}
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        content.innerHTML = contentHtml;
                    } else {
                        content.innerHTML = '<p>Data tidak ditemukan.</p>';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    content.innerHTML = '<p>Terjadi kesalahan saat mengambil data.</p>';
                });
        }

        // Activate the "Struktur Organisasi" link by default
        const defaultLink = document.querySelector('.sidebar ul li a[data-content="struktur-organisasi"]');
        if (defaultLink) {
            activateLink(defaultLink);
        }
    });
</script>

@endsection
