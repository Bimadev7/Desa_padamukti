@extends('layouts.main')

@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Edit Pengumuman</h3>

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

        <form class="card" action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <div class="col-md-6">
              <div class="form-group ml-4">
                <label for="judul">Judul Pengumuman</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Judul Berita" value="{{ $pengumuman->judul }}" required>
                @error('judul')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group ml-4">
                <label for="deskripsi_singkat">Deskripsi Singkat</label>
                <input type="text" name="deskripsi_singkat" class="form-control @error('deskripsi_singkat') is-invalid @enderror" id="deskripsi_singkat" placeholder="Deskripsi Singkat" value="{{ $pengumuman->deskripsi_singkat }}" required>
                @error('deskripsi_singkat')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group ml-4">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="editor" placeholder="Deskripsi" required>{{ $pengumuman->deskripsi }}</textarea>
                @error('deskripsi')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

             {{-- image --}}
                 <div class="row">
            <div class="col-md-6">
              <label for="slider1">Gambar Slider</label>
              <div class="form-group">
                @error('slider1')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                @if($pengumuman->image)
                  <div class="mt-2">
                    <img src="{{ asset('images/' . $pengumuman->image) }}" alt="Gambar Slider 1" width="200" height="250" id="preview_slider1">
                  </div>
                @endif
                <br>
                <p>masukan Gambar</p>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="previewImage('image', 'preview_slider1')">
              </div>
            </div>

          {{-- end --}}

          <div class="row">
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-primary mr-5 mb-4">Update</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Edit Pengumuman
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
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
</section>
<!-- /.content -->

<style>
  .short-select {
    width: auto !important;
    min-width: 150px;
  }
</style>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
@endpush
