@extends('layouts.main')

@section('content')

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Edit Barang</h3>

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
        <form method="POST" action="{{ route('barang.update', $barang->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <!-- Left Column -->
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $barang->id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $barang->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" required>{{ $barang->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Image URL</label>
                        <input type="text" class="form-control" id="img" name="img" value="{{ $barang->img }}">
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <!-- Right Column -->
                    <div class="form-group">
                        <label for="stock_of_goods">Stock of Goods</label>
                        <input type="number" class="form-control" id="stock_of_goods" name="stock_of_goods" value="{{ $barang->stock_of_goods }}" required>
                    </div>
                    <div class="form-group">
                        <label for="good_stuf">Good Stuff</label>
                        <input type="number" class="form-control" id="good_stuf" name="good_stuf" value="{{ $barang->good_stuf }}" required>
                    </div>
                    <div class="form-group">
                        <label for="bad_stuf">Bad Stuff</label>
                        <input type="number" class="form-control" id="bad_stuf" name="bad_stuf" value="{{ $barang->bad_stuf }}" required>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" id="department" name="department" value="{{ $barang->department }}" required>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Edit Barang Details
    </div>
</div>
<!-- /.card -->

@endsection
