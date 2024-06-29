@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="card-title">Detail Gambar</h3>
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
                <div class="form-group text-center">
                    <label for="image">Gambar</label><br>
                    <img src="{{ asset('images/' . $slider->slider1) }}" alt="Gambar Pengumuman" width="200" height="250">
                </div>
                {{-- Additional content related to slider details --}}
            </div>
        </div>
    </div>

    <!-- Additional columns or content can be added here -->

</div>

<!-- Modal for additional description -->
<div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readMoreModalLabel">Deskripsi Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- Modal body content can be added here --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

@endsection
