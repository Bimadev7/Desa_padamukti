@extends('layouts.mainPublic')

@section('title', 'Geografis Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex align-items-center">
            <ol>
                <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
                <li>Geografis Desa</li>
            </ol>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-7 text-center">Informasi Geografis Desa Padamukti</h2>
                <p><strong>Lokasi Geografis:</strong></p>
                <ul>
                    <li><strong>Koordinat:</strong>7°00'31.6"S 107°46'17.2"E</li>
                    <li><strong>Luas Wilayah:</strong> 263,4 ha/m²</li>
                    <li><strong>Topografi:</strong> Dataran rendah</li>
                    <li><strong>Ketinggian:</strong> 670 mdpl</li>
                    <li><strong>Administrasi:</strong></li>
                    <ul>
                        <li><strong>Kecamatan:</strong> Solokan Jeruk</li>
                        <li><strong>Kabupaten:</strong> Bandung</li>
                        <li><strong>Provinsi:</strong> Jawa Barat</li>
                    </ul>
                    <li><strong>Potensi dan Industri:</strong></li>
                    <ul>
                        <li><strong>Pertanian:</strong> Sawah, kebun sayuran (mentimun, tomat, ubi jalar, singkong)</li>
                        <li><strong>Industri:</strong> Home Industri (pengrajin kerudung, pengrajin ciput)</li>
                        <li><strong>Pariwisata:</strong> Villa Kancil</li>
                    </ul>
                </ul>
            </article>
        </div>
        <div class="col-md-6">
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-4 text-center">Peta Lokasi Desa Padamukti</h2>
                <div class="info w-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9599.715435800841!2d107.75721164857325!3d-7.012227205968178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c6aee51c0af3%3A0xae7bc5e161ed42f9!2sPadamukti%2C%20Solokanjreruk%2C%20Bandung%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1718207269561!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen></iframe>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection
