<!-- resources/views/barang/edit.blade.php -->
{{-- @extends('layouts.main')
@section('content')


<p>sdsd</p>


@endsection --}}

{{-- 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>
    <h1>Edit Barang</h1>

    <form method="POST" action="{{ route('barang.update', $barang->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="nama">Nama Barang:</label>
            <input type="text" id="nama" name="nama" value="{{ $barang->nama }}">
        </div>

        <div>
            <label for="harga">Harga Barang:</label>
            <input type="text" id="harga" name="harga" value="{{ $barang->harga }}">
        </div>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html> --}}

@extends('layouts.main')

@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="card-title">Edit Barang</h3>
            <div class="card-tools">
                <a href="{{ route('backoffice.barang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $barang->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" required>{{ $barang->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="stock_of_goods">Stock of Goods</label>
                    <input type="number" name="stock_of_goods" class="form-control" id="stock_of_goods" value="{{ $barang->stock_of_goods }}" required>
                </div>
                <div class="form-group">
                    <label for="good_stuf">Good Stuff</label>
                    <input type="number" name="good_stuf" class="form-control" id="good_stuf" value="{{ $barang->good_stuf }}" required>
                </div>
                <div class="form-group">
                    <label for="bad_stuf">Bad Stuff</label>
                    <input type="number" name="bad_stuf" class="form-control" id="bad_stuf" value="{{ $barang->bad_stuf }}" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" name="department" class="form-control" id="department" value="{{ $barang->department }}" required>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('backoffice.barang.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
