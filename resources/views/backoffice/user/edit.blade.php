@extends('layouts.main3')

@section('form')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Dashboard User</h3>

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

        <form class="card" action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <div class="col-md-6">
              <div class="form-group ml-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ $user->username }}" required>
                @error('username')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group ml-4">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email address" value="{{ $user->email }}" required>
                @error('email')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group ml-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group ml-4">
                <label>User Role</label>
                <select class="form-control select2 short-select" name="role" style="width: 100%;">
                  <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                  <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-primary mr-5 mb-4">Update</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Dashboard
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
