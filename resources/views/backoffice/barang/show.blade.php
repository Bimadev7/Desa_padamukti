<!-- resources/views/barang/edit.blade.php -->
@extends('layouts.main')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>User Details</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" value="{{ $user->id }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" value="{{ $user->username }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" value="{{ $user->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" class="form-control" id="role" value="{{ $user->role }}" readonly>
                </div>
                <a href="{{ route('backoffice.user.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



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
