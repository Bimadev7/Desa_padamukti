<div class="row">
    <div class="col-12">
        <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title">Daftar Order</h3>
                    <div class="card-tools ml-auto mr-0">
                        {{-- <a href="{{ route('backoffice.order.create') }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Data"> --}}
                            <i class="fas fa-plus mr-1"></i> Tambah Baru
                        </a>
                    </div>
                </div>
            <div class="card-body">
                <table id="daftar-barang-table" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Lembaga</th>
                            <th>Nama</th>
                            <th>Telpon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- @stop --}}


@section('adminlte_css')
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.css" />
@stop

@section('adminlte_js')
<script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/fc-3.3.2/fh-3.1.8/kt-2.6.1/r-2.2.7/rg-1.1.2/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.js">
    </script>
<script>
    const table = $('#daftar-barang-table').DataTable({
        order: [1, 'asc'],
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('backoffice.barang.datatable') }}",
        columns: [
            { data: 'nama', name: 'nama', width: "10%", orderable: false, searchable: true},
            { data: 'deskripsi', name: 'deskripsi', orderable: true, searchable: true},
            { data: 'rasio_minimal', name: 'rasio_minimal', width: "5%", orderable: false, searchable: true},
            { data: 'level_teknologi', name: 'level_teknologi', width: "20%", orderable: false, searchable: true},
            { data: 'level_keterampilan', name: 'level_keterampilan', orderable: false, searchable: true},
            { data: 'statuz', name: 'statuz', width: "5%", orderable: false, searchable: false},
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                width: "10%"
            },
        ],
    });

    function formHapus(id) {
            Swal.fire({
                title: 'Apakah Anda Yakin Hapus Data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Lakukan!',
                cancelButtonText: 'Tidak, Batalkan!',
                reverseButtons: true,
            }).then((result) => {
                // console.log(result);
                if (result.value) {
                    $.ajax({
                        url: '{{route('backoffice.barang.destroy','')}}/' + id,
                        type: 'POST',
                        data: {
                            '_method': 'DELETE',
                            '_token': '{{ csrf_token() }}',
                        },
                        success: function () {
                            $("#daftar-order-table").DataTable().row('#row-num-'+id).remove().draw();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil Hapus Data'
                            })
                        },
                        error: function (xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            console.log(err);
                            Swal.fire({
                                icon: 'error',
                                title: 'Terjadi Kesalahan Dalam Penghapusan Data'
                            })
                        }
                    })
                }
            });
        }
</script>