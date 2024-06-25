@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Details Pengumuman</h3>

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
                <form method="POST" action="#">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="username">Judul</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $pengumuman->judul }}" readonly>
                    </div>
                          <div class="form-group">
                        <label for="email">Penulis</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $pengumuman->penulis }}" readonly>
                    </div>
                   <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <div>
                    {!! (strlen($pengumuman->deskripsi) > 200) ? substr($pengumuman->deskripsi, 0, 200) . '...' : $pengumuman->deskripsi !!}
                    @if (strlen($pengumuman->deskripsi) > 200)
                        <a href="#" class="btn btn-link" data-toggle="modal" data-target="#readMoreModal">Baca Selengkapnya</a>
                    @endif
                </div>
            </div>

                   

                    <div class="form-group">
                        <label for="email">Deskripsi Singkat</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $pengumuman->deskripsi_singkat }}" readonly>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Details lembagadesa
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->

    <div class="col-md-4">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Informasi Tambahan</h3>

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
                <div class="form-group">
                    <label for="email">Caption</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $pengumuman->caption_capture }}" readonly>
                </div>

                <div class="form-group">
                    <label for="image">Gambar</label><br>
                    <img src="{{ asset('images/' . $pengumuman->image) }}" alt="Gambar Pengumuman" width="200" height="250">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Informasi tambahan terkait pengumuman
            </div>
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readMoreModalLabel">Deskripsi Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto; text-align: justify;">
                {!! $pengumuman->deskripsi !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

{{-- 
<div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readMoreModalLabel">Deskripsi Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                {!! $pengumuman->deskripsi !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div> --}}

{{-- 
<div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readMoreModalLabel">Deskripsi Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $pengumuman->deskripsi !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div> --}}

@endsection
