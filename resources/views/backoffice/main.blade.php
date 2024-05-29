@extends('layouts.main')

@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Data Barang</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Description</th>
                        <th>stock_of_goods</th>
                        {{-- <th>stock_of_goods</th> --}}
                        {{-- <th>stock_of_goods</th> --}}
                        {{-- <th>stock_of_goods</th> --}}
                        {{-- <th width="200px">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('script')
<script type="text/javascript">
$(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('backoffice.barang.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
            {data: 'stock_of_goods', name: 'stock_of_goods'},
            {{-- {data: 'good_stuf', name: 'good_stuf'}, --}}
            {{-- {data: 'bad_stuf', name: 'bad_stuf'}, --}}
            {{-- {data: 'department', name: 'department'}, --}}
           
        ]
    });
});
</script>
@endpush
