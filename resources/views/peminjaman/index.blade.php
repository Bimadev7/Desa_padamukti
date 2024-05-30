<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-LfJrRkHdp4wPXZ7IFCrR6f/af+jy9Jz5JSCJ+R7n44paGgV0yJzIHwT1wWSTpz0wV/UBibIg5vm0C8XjcwuB+Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <title>Daftar Barang Yang di Pinjam</title>
    <style>
        table {
            width: 40%;
            margin: 0 auto;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        .center {
            text-align: left;
        }
        .center_text{
            text-align: left;
        }
    </style>
</head>
<body>
    <h1 class="center_text">Daftar Peminjaman Barang</h1>
    <div class="center">
        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif
    </div>
    <div class="center" style="margin-bottom: 20px;">
        <a  href="{{ route('peminjaman.create') }}" class="btn btn-outline-primary">Pinjam Barang</a>
    </div>

    <table id="peminjamanTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>User</th>
                <th>Goods</th>
                <th>borrowed amount</th>
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
    <div class="center" style="margin-top: 10px;">
        <a href="{{ route('/welcome') }}" class="btn btn-secondary btn-lg btn-block">BACK TO DASHBOARD</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $.fn.dataTable.ext.order['status-precedence'] = function(settings, col) {
                return this.api().column(col, { order: 'index' }).nodes().map(function(td, i) {
                    return $(td).text() === 'returned' ? 0 : ($(td).text() === 'borrowed' ? 1 : 2);
                });
            };

            $('#peminjamanTable').DataTable({
                columnDefs: [
                    { targets: 4, orderData: [4], orderSequence: ['desc', 'asc'], orderDataType: 'status-precedence' }
                ],
                order: [[4, 'asc']]
            });
        });
    </script>
</body>
</html>
