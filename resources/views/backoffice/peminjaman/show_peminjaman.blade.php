@extends('layouts.main')

@section('peminjaman')

<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Peminjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Riwayat Peminjaman</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Peminjam</th>
                <th>Nama Barang</th>
                {{-- <th>Jumlah</th> --}}
                <th>description</th>
                <th>Jumlah</th>
                <th>Aksion</th>
                <th>Status</th>
                {{-- <th>Status</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
                <tr>
                    {{-- <td>{{ $item->user ? $item->user->username : 'Tidak Diketahui' }}</td> --}}
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->user->username }}</td>
                    <td>{{ $item->barang->name }}</td>
                    <td>{{ $item->barang->description }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        @if($item->status == 'dipinjam')
                            <form action="{{ route('peminjaman.return', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Kembalikan</button>
                            </form>
                        @else
                            Dikembalikan
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

@endsection
