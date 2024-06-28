@extends('layouts.main')

@section('content')

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Details Demografi Desa</h3>

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
            <div class="row">
                <div class="col-md-6">
                    <!-- Left Column -->
                    <div class="form-group">
                        <label for="username">Angka Kelahiran</label>
                        <input type="text" class="form-control" value="{{ $demografidesa->angka_kelahiran }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Angka Kematian</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $demografidesa->angka_kematian }}" readonly>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <!-- Right Column -->
                    <div class="form-group">
                     <label for="email">Jumlah Penduduk</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $demografidesa->jumlah_penduduk }}" readonly>
                    </div>
                   
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Details Demografi Desa
    </div>
</div>
<!-- /.card -->

@endsection
