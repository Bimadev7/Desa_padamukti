
@extends('layouts.main')

@section('content')
<div class="container">
    <h2>Data Barang</h2>
    <table id="barang-table" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#barang-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('backoffice.barang.index') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nama', name: 'nama' },
            { data: 'deskripsi', name: 'deskripsi' },
            { data: 'level_teknologi', name: 'level_teknologi' },
            { data: 'level_keterampilan', name: 'action', orderable: false, searchable: false }
        ]
    });
});
</script>
@endpush
