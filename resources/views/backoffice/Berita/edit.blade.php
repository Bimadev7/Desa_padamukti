@extends('layouts.main')

@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
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

        <form class="card" action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Judul Berita" value="{{ $berita->judul }}" required>
                @error('judul')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="deskripsi_singkat">Deskripsi Singkat</label>
                <input type="text" name="deskripsi_singkat" class="form-control @error('deskripsi_singkat') is-invalid @enderror" id="deskripsi_singkat" placeholder="Deskripsi Singkat" value="{{ $berita->deskripsi_singkat }}" required>
                @error('deskripsi_singkat')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Deskripsi" required>{{ $berita->deskripsi }}</textarea>
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
                @if($berita->image)
                  <div class="mt-2">
                    <img src="{{ asset('images/' . $berita->image) }}" alt="Gambar Slider 1" width="200" height="250" id="preview_slider1">
                  </div>
                @endif
                <br>
                <p>masukan Gambar</p>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="previewImage('image', 'preview_slider1')">
              </div>
            </div>
            {{-- End image --}}
<br>
          <div class="row">
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-primary mr-5 mb-4">Update</button>
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
</section>
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
