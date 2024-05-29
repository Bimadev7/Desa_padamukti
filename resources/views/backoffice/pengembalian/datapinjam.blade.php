@extends('layouts.main')

@section('content')
    <h2>Borrowed</h2>
    <table id="borrowedTable" class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Goods</th>
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
@endsection

@push('script')
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

    <script>
        $(document).ready(function() {
            $('#borrowedTable').DataTable();
        });
    </script>
@endpush
