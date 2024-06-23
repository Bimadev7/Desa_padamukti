@extends('layouts.main')

@section('content')
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
        <div class="card-body">
            <h6 class="card-header p-3">Tambah Data Pengumuman</h6>
            <div class="card-body">
                <!-- Your form content here -->
                <form action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Pengumuman</label>
                        <input type="text" name="judul" class="form-control" id="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="caption_capture">Caption Gambar</label>
                        <input type="text" name="caption_capture" class="form-control" id="caption_capture" required>
                    </div>
                     <div class="form-group">
                        <label for="caption_capture">Deskripsi Singkat</label>
                        <input type="text" name="deskripsi_singkat" class="form-control" id="deskripsi_singkat" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Detail</label>
                        <textarea name="deskripsi" class="form-control" id="editor" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" class="form-control" id="penulis" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Pengumuman</label>
                        <input type="file" id="image" name="image" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Pengumuman</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endpush
