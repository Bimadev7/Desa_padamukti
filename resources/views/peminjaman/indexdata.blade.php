{{-- <!DOCTYPE html>
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
</html> --}}

{{-- <!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Daftar Peminjaman Barang</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Barang</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
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
                                <button type="submit" class="btn btn-primary">Return</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Pinjam Barang</a>
</div>
</body>
</html> --}}


{{-- <!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Daftar Peminjaman Barang</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <h2>Borrowed</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Barang</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowedPeminjaman as $pinjam)
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
                                <button type="submit" class="btn btn-primary">Return</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Returned</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Barang</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($returnedPeminjaman as $pinjam)
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
                                <button type="submit" class="btn btn-primary">Return</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Pinjam Barang</a>
</div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Barang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Daftar Peminjaman Barang</h1>
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <p class="error">{{ $errors->first() }}</p>
    @endif
    <table>
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
</html> --}}


<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Daftar Peminjaman Barang</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <h2>Borrowed</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>goods</th>
                <th>Borrowed amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowedPeminjaman as $pinjam)
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
                                <button type="submit" class="btn btn-primary">Return</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Returned</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>goods</th>
                <th>Return amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($returnedPeminjaman as $pinjam)
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
                                <button type="submit" class="btn btn-primary">Return</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('peminjaman.create') }}" class="btn btn-success">Pinjam Barang</a>
</div>
</body>
</html>