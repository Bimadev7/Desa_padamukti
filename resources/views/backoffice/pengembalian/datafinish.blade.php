<!-- File: resources/views/finished.blade.php -->
@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h2>Finished Borrowed</h2>
        <table id="finishedTable" class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Goods</th>
                    <th>Borrowed Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($finishPeminjaman as $pinjam)
                    <tr>
                        <td>{{ $pinjam->id }}</td>
                        <td>{{ $pinjam->user->username }}</td>
                        <td>{{ $pinjam->barang->name }}</td>
                        <td>{{ $pinjam->quantity }}</td>
                        <td>{{ $pinjam->status }}</td>
                        <td>
                            @if($pinjam->status == '#')
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
    </div>

    <!-- Tambahkan Script dan CSS DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <script>
        $(document).ready(function() {
            $('#finishedTable').DataTable();
        });
    </script>
@endsection
