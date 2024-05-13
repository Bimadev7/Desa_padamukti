<!-- resources/views/barang/edit.blade.php -->
@extends('layouts.main')
@section('content')


<p>sdsd</p>


@endsection

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
