<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Daftar Barang</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Stok</th>
                <th>Bagus</th>
                <th>Jelek</th>
                <th>Departemen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->name }}</td>
                    <td>{{ $barang->description }}</td>
                    <td><img src="{{ $barang->img }}" alt="{{ $barang->name }}" width="50"></td>
                    <td>{{ $barang->stock_of_goods }}</td>
                    <td>{{ $barang->good_stuf }}</td>
                    <td>{{ $barang->bad_stuf }}</td>
                    <td>{{ $barang->department }}</td>
                    <td>
                        <form action="{{ route('barangs.borrow', $barang->id) }}" method="POST" class="mb-2">
                            @csrf
                            <input type="number" name="quantity" class="form-control mb-2" placeholder="Jumlah">
                            <button type="submit" class="btn btn-primary">Pinjam</button>
                        </form>
                        <form action="{{ route('barangs.return', $barang->id) }}" method="POST">
                            @csrf
                            <input type="number" name="quantity" class="form-control mb-2" placeholder="Jumlah">
                            <button type="submit" class="btn btn-secondary">Kembalikan</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>