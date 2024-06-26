@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">Profil Desa</h1>

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Visi</th>
                {{-- <th class="text-center">Visi</th> --}}
                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach ($profildesa_visi as $visi)
            <tr>
                <td>
                   <div class="form-group">
                        {{-- <label for="visi">Visi Desa</label> --}}
                        <div>
                            {!! (strlen($visi->visi) > 200) ? substr($visi->visi, 0, 300) . '...' : $visi->visi !!}
                            @if (strlen($visi->visi) > 200)
                                <a href="#" class="btn btn-link" data-toggle="modal" data-target="#readMoreModal">Baca Selengkapnya</a>
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</div>
<table class="table">
        <thead>
            <tr>
                <th class="text-center">Misi</th>
                {{-- <th class="text-center">Visi</th> --}}
                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach ($profildesa_visi as $visi)
            <tr>
                <td>
                   <div class="form-group">
                        {{-- <label for="visi">Visi Desa</label> --}}
                        <div>
                            {!! (strlen($visi->visi) > 200) ? substr($visi->visi, 0, 300) . '...' : $visi->visi !!}
                            @if (strlen($visi->visi) > 200)
                                <a href="#" class="btn btn-link" data-toggle="modal" data-target="#readMoreModal">Baca Selengkapnya</a>
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</div>
<div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readMoreModalLabel">Deskripsi visi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 400px; overflow-y: auto; text-align: justify;">
                {!! $visi->visi !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endsection
