@extends('layouts.main')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Edit Lembaga</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
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

        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nama_lembaga">Nama Lembaga</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" value="{{ $berita->judul }}" required>
                @error('judul')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="caption_capture" class="form-control @error('caption_capture') is-invalid @enderror" id="caption_capture" value="{{ $berita->caption_capture }}" required>
                @error('caption_capture')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <label for="deskripsi_profil">Deskripsi Profil</label>
                <textarea name="deskripsi_profil" class="form-control @error('deskripsi_profil') is-invalid @enderror" id="deskripsi_profil" rows="4" required>{{ $berita->deskripsi_singkat }}</textarea>
                @error('deskripsi_profil')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="image">Gambar Lembaga</label>
                <br>
                @if($berita->image)
                  <img src="{{ asset('images/' . $berita->image) }}" alt="Gambar Lembaga" width="200" height="200" id="preview_image">
                @else
                  <img src="" alt="Gambar Lembaga" style="display: none;" id="preview_image">
                @endif
                <br><br>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" onchange="previewImage('image', 'preview_image')">
                @error('image')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
      <div class="card-footer">
        Edit Lembaga
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script>
  function previewImage(inputId, imageId) {
    const input = document.getElementById(inputId);
    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
        const preview = document.getElementById(imageId);
        preview.src = e.target.result;
        preview.style.display = 'block';
      }
      reader.readAsDataURL(input.files[0]);
    } else {
      const preview = document.getElementById(imageId);
      preview.src = '';
      preview.style.display = 'none';
    }
  }
</script>
@endpush
