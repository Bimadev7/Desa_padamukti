
@extends('layouts.main')

@section('content')
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Tambah Barang</h3>
        <div class="card-body">
            <form action="{{ route('backoffice.barang.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
                <div class="mb-3">
                    <label for="stock_of_goods" class="form-label">Stock of Goods</label>
                    <input type="number" class="form-control" id="stock_of_goods" name="stock_of_goods" required>
                </div>
                <div class="mb-3">
                    <label for="good_stuf" class="form-label">Good Stuff</label>
                    <input type="number" class="form-control" id="good_stuf" name="good_stuf" required>
                </div>
                <div class="mb-3">
                    <label for="bad_stuf" class="form-label">Bad Stuff</label>
                    <input type="number" class="form-control" id="bad_stuf" name="bad_stuf" required>
                </div>
                {{-- <div class="mb-3">
                    <label for="department" class="form-label">Department</label>
                    <select class="form-select" id="department" name="department" required>
                        <option value="finance">tkj</option>
                        <option value="hr">tkr</option>
                        <option value="it">-</option>
                        </select>
                </div> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
