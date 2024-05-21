<!-- resources/views/peminjaman/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang Dipinjam</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Daftar Barang Dipinjam</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Jumlah</th>
                <th>Tanggal Peminjaman</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->barang->name }}</td>
                    <td>{{ $item->barang->description }}</td>
                    <td><img src="{{ $item->barang->img }}" alt="{{ $item->barang->name }}" width="50"></td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->borrow_date }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                        @if ($item->status == 'dipinjam')
                            <form action="{{ route('peminjaman.return', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-secondary">Kembalikan</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
