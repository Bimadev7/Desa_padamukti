@extends('layouts.mainPublic')

@section('title', 'Lembaga Desa')

@section('content')
<section id="breadcrumbs" class="breadcrumbs mb-4">
    <div class="container">
        <div class="d-flex align-items-center">
            <ol>
                <li><a href="/"><i class="bi bi-house-door-fill"></i></a></li>
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
            @foreach ($lembaga as $item)
            <tr onclick="window.location='{{ route('lembaga-desa.detail', $item->id) }}';" style="cursor: pointer;">
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item -> nama_lembaga }}</td>
                <td>{{ $item -> alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
