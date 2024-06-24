@extends('layouts.mainPublic')

@section('title', 'Lembaga Desa')

@section('content')
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

<div class="container mt-5 mb-5">
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lembaga</th>
                <th scope="col">Alamat Kantor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a href="/public/detail_lembaga">Badan Permusyawaratan Desa</a></td>
                <td>Jl.</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a href="URL_TO_PAGE_2">Badan Usaha Milik Desa</a></td>
                <td>Jl.</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a href="URL_TO_PAGE_3">Karang Taruna</a></td>
                <td>Jl.</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
