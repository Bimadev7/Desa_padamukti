<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Barang</title>
</head>
<body>
    <h1>Daftar Peminjaman Barang</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <p style="color: red;">{{ $errors->first() }}</p>
    @endif
    <table border="1">
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Barang</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($peminjaman as $pinjam)
            <tr>
                <td>{{ $pinjam->id }}</td>
                <td>{{ $pinjam->user->username }}</td>
                <td>{{ $pinjam->barang->name }}</td>
                <td>{{ $pinjam->quantity }}</td>
                <td>{{ $pinjam->status }}</td>
                <td>
                    @if($pinjam->status == 'borrowed')
                        <form action="{{ route('peminjaman.return', $pinjam->id) }}" method="POST">
                            @csrf
                            <button type="submit">Return</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('peminjaman.create') }}">Pinjam Barang</a>
</body>
</html>
