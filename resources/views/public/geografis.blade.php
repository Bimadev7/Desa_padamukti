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
                <h4 class="mb-4" style="color: #5cb874"><strong>Geografis Desa Padamukti</strong></h4>
                {{-- <h2 class="display-5 link-body-emphasis mb-7 text-center">Informasi Geografis Desa Padamukti</h2> --}}
                <p><strong>Lokasi Geografis:</strong></p>
                <ul>
                    <li><strong>Koordinat:</strong>-7.24472830646825, 107.8169834044204</li>
                    <li><strong>Topografi:</strong> Dataran Tinggi</li>
                    <li><strong>Ketinggian:</strong> 967 mdpl</li>
                    <li><strong>Administrasi:</strong></li>
                    <ul>
                        <li><strong>Kecamatan:</strong> Pasirwangi</li>
                        <li><strong>Kabupaten:</strong> Garut</li>
                        <li><strong>Provinsi:</strong> Jawa Barat</li>
                    </ul>

                    <li><strong>Potensi dan Industri:</strong></li>
                    <ul style="text-align: justify;">
                        Diwilayah Desa Padamukti ada beberapa potensi untuk dikembangkan, seperti pemanfaatan keragaman produksi UMKM dan pemanfaatan limbah hasil alam menjadi kerajinan bernilai ekonomis untuk yang lainya masih dalam pemetaan lebih lanjut. Semua ini tentunya menjadi perhatian untuk ditata supaya dapat berkembang dan berkelanjutan, potensi ini juga dikemudian hari akan dikolaborasikan dengan berbagai pihak terkait.
                        Pemanfaatan sampah plastic menjadi ecobrick dan pemanfaatan popok bayi menjadi pupuk dan pot masih dalam pengerjaan oleh Patriot Desa Jawa Barat
                        {{-- <li><strong>Industri:</strong> Home Industri (pengrajin kerudung, pengrajin ciput)</li>
                        <li><strong>Pariwisata:</strong> Villa Kancil</li> --}}
                    </ul>
                </ul>
            </article>
        </div>
        <div class="col-md-6">
            <article class="blog-post">
                {{-- <h2 class="display-5 link-body-emphasis mb-4 text-center">Peta Lokasi Desa Padamukti</h2> --}}
                <div class="info w-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15832.109101662118!2d107.80800175113826!3d-7.237728148650926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68bad158ba1a2d%3A0xe5259a25a206e508!2sPadamukti%2C%20Sukaresmi%2C%20Garut%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1719412487022!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
              </div>
            </article>
        </div>
    </div>
</div>
@endsection
