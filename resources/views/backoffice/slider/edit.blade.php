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

        <form class="card" action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <div class="col-md-6">
                <label for="image2">Gambar Slider 2</label>

              <div class="form-group">
                @error('slider1')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                @if($slider->slider1)
                  <div class="mt-2">
                    <img src="{{ asset('images/' . $slider->slider1) }}" alt="Gambar Slider 1" width="200" height="250">
                  </div>
                @endif
                 <label for="image1">Gambar Slider 1</label>
                <input type="file" name="slider1" class="form-control @error('slider1') is-invalid @enderror" id="slider1">
              </div>
            </div>

            <div class="col-md-6">
                <label for="image2">Gambar Slider 2</label>

              <div class="form-group">
                @error('slider2')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                @if($slider->slider2)
                  <div class="mt-2">
                    <img src="{{ asset('images/' . $slider->slider2) }}" alt="Gambar Slider 2" width="200" height="250">
                  </div>
                @endif
                <label for="image2">Gambar Slider 2</label>
                <input type="file" name="slider2" class="form-control @error('slider2') is-invalid @enderror" id="slider2">
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col-md-6">
                <label for="image2">Gambar Slider 3</label>

              <div class="form-group">
                @error('slider1')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                @if($slider->slider1)
                  <div class="mt-2">
                    <img src="{{ asset('images/' . $slider->slider3) }}" alt="Gambar Slider 1" width="200" height="250">
                  </div>
                @endif
                 <label for="image1">Gambar Slider 3</label>
                <input type="file" name="slider3" class="form-control @error('slider3') is-invalid @enderror" id="slider3">
              </div>
            </div>

            <div class="col-md-6">
                <label for="image2">Gambar Slider 4</label>

              <div class="form-group">
                @error('slider2')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                @if($slider->slider4)
                  <div class="mt-2">
                    <img src="{{ asset('images/' . $slider->slider4) }}" alt="Gambar Slider 2" width="200" height="250">
                  </div>
                @endif
                <label for="image2">Gambar Slider 4</label>
                <input type="file" name="slider4" class="form-control @error('slider4') is-invalid @enderror" id="slider4">
              </div>
            </div>
          </div>

          

            

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
