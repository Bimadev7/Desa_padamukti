@extends('layouts.main')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Edit Berita</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if(session('success'))
        <script>
          Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
          });
        </script>
        @endif

        <form class="card" action="{{ route('demografidesa.update', $demografidesa->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="angka_kelahiran">Angka Kelahiran</label>
                <input type="text" name="angka_kelahiran" class="form-control @error('angka_kelahiran') is-invalid @enderror" id="angka_kelahiran" placeholder="Angka Kelahiran" value="{{ $demografidesa->angka_kelahiran }}" required>
                @error('angka_kelahiran')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="angka_kematian">Angka Kematian</label>
                <input type="text" name="angka_kematian" class="form-control @error('angka_kematian') is-invalid @enderror" id="angka_kematian" placeholder="Angka Kematian" value="{{ $demografidesa->angka_kematian }}" required>
                @error('angka_kematian')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-6">
            <div class="form-group">
                <label for="jumlah_penduduk">Angka Kematian</label>
                <input type="text" name="jumlah_penduduk" class="form-control @error('jumlah_penduduk') is-invalid @enderror" id="jumlah_penduduk" placeholder="Angka Kematian" value="{{ $demografidesa->jumlah_penduduk }}" required>
                @error('jumlah_penduduk')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
      </div>
          </div>

          <div class="row">
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-primary mr-3">Update</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Edit Berita
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
  function previewImage(inputId, imageId) {
    const input = document.getElementById(inputId);
    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById(imageId).src = e.target.result;
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
@endpush
