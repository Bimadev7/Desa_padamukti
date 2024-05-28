<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pJAg2UR+b8+1r78Q3E3e5xO+n3zexl/IsuAQtC7crM6zk9ENzCWJf6KeNqdDlRld" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Form Peminjaman Barang</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">User</label>
            <select class="form-select" name="user_id" id="user_id" required>
                <option selected disabled>-- Pilih User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="barang_id" class="form-label">Barang</label>
            <select class="form-select" name="barang_id" id="barang_id" required>
                <option selected disabled>-- Pilih Barang --</option>
                @foreach($barangs as $barang)
                    <option value="{{ $barang->id }}">{{ $barang->name }} (Stok: {{ $barang->stock_of_goods }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
