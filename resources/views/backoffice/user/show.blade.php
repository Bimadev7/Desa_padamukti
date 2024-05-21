@extends('layouts.main')

@section('content')

<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Details User</h3>

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
        {{-- <form method="POST" action="{{ route('users.update', $user->id) }}"> --}}

        <form method="POST" action="#">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <!-- Left Column -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <!-- Right Column -->
                    <div class="form-group">
                     <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="minimal">role</label>
                        {{-- <input type="text" class="form-control" id="minimal" name="minimal" value="{{ old('minimal') }}" required> --}}
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->role }}" required>
                  
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </form>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Details User
    </div>
</div>
<!-- /.card -->

@endsection
