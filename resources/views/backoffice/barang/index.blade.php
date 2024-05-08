@extends('layouts.main')

@section('content')




<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Barang </h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
    <head><script src="adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
        
        <link rel="stylesheet" href="path/to/sweetalert2.min.css">
    <link href="adminlte/plugins/sweetalert2/sweetalert2.min.css">

        
    <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
            <thead>
                <tr>
                    <th>nama</th>
                    <th>deskripsi</th>
                    <th>Sales</th>
                    <th>More</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($barang)
                    @foreach($barang as $barang)
                    <tr>
                        <td>{{ $barang->nama }}</td>
                        <td>{{ $barang->deskripsi }}</td>
                        <td>{{ $barang->gambar }}</td>
                        <td>{{ $barang->level_teknologi }}</td>
                        <td>
                           
                            <a href="{{ route('backoffice.barang.edit', $barang->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            
            

<button class="btn btn-danger btn-sm" onclick="setDeleteItem({{ $barang->id }})" data-toggle="modal" data-target="#deleteModal">Hapus</button>


{{--                 
                            </div>
                          </div>
                        </div>
                      </div> --}}
                      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus item ini? Tindakan ini tidak dapat dibatalkan.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form id="deleteForm" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Button untuk menghapus item -->
                    
                    <script>
                        function setDeleteItem(itemId) {
                            var deleteForm = document.getElementById('deleteForm');
                            var actionUrl = '/delete-item/' + itemId; // Ganti dengan URL yang sesuai dengan endpoint penghapusan
                    
                            // Setel nilai action pada form penghapusan
                            deleteForm.setAttribute('action', actionUrl);
                        }
                    </script>
                    
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>



<div class="modal fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Danger Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-light">Save changes</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
    
@endsection
