@extends('layouts.main')

@section('content')
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<div class="container">
    <div class="card mt-5">
        @if(session('alert-type') && session('message'))
      <script>
        Swal.fire({
          icon: '{{ session('alert-type') }}',
          title: 'Success!',
          text: '{{ session('message') }}',
        });
      </script>
    @endif
        <h3 class="card-header p-3">Data User</h3>
  
        <div class="card-body">
          <div class="card-header d-flex align-items-center">
                    <h3 class="card-title"></h3>
                    <div class="card-tools ml-auto mr-0">
                        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Data">
                            <i class="fas fa-plus mr-1"></i> Tambah Baru
                        </a>
                    </div>
                </div>
{{-- <div class="card-tools ml-auto mr-0"> --}}
{{-- {{ route('backoffice.user.create') }} --}}
                        {{-- <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Data">
                            <i class="fas fa-plus mr-1"></i> Tambah Baru
                        </a>
                    </div> --}}
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th width="200px">Action</th>
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
        ajax: "{{ route('user.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'username', name: 'username'},
            {data: 'email', name: 'email'},
            {data: 'role', name: 'role'},
            {
                data: 'id',
                name: 'action',
                orderable: false,
                searchable: false,
                render: function (data) {
                    return '<a href="/backoffice/user/' + data + '" class="btn btn-info btn-sm">Show</a>' +
                           '<a href="/backoffice/user/' + data + '/edit" class="btn btn-primary btn-sm mx-1">Edit</a>' +
                           '<form action="/backoffice/user/' + data + '" method="POST" style="display:inline">' +
                               '@csrf' +
                               '@method("DELETE")' +
                               '<button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>' +
                           '</form>';
                }
            },
        ]
    });
});
</script>
@endpush
