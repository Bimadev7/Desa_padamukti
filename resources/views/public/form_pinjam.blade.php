<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Peminjaman</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Form Peminjaman</h4>
                </div>
                <div class="card-body">
                    <form action="/submit_pinjam" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="barang">Barang yang Dipinjam:</label>
                            <input type="text" class="form-control" id="barang" name="barang" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pinjam">Tanggal Peminjaman:</label>
                            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kembali">Tanggal Pengembalian:</label>
                            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajukan Peminjaman</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
