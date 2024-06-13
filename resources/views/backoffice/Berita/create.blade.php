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

        <form class="card" action="{{ route('backoffice.user.store') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row">
            <div class="col-md-6">
              <div class="form-group ml-4">
                <label for="username">Username</label>
                <input type="text" class="form-control ml-4 @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukan Nama" value="{{ old('username') }}">
                @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

            
              <div class="form-group  ml-4">
                <label for="email">Email address</label>
                <input type="email" class="form-control ml-4 @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group mb-4 ml-4">
                <label for="password">Password</label>
                <input type="password" class="form-control mb-4 ml-4" id="password" name="password" placeholder="Password">
              </div>
            </div>
            <!-- /.col -->

         

              <div class="form-group ml-5">
                <label>User Sebagai</label>
                <select class="form-control select2 short-select ml-5" name="role" style="width: 100px;">
                  <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                  <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <div>
          <!-- /.row -->

          <div class="row">
            <div class="col-12 text-right">
              <button type="submit" class="btn btn-primary mr-5 mb-4">Submit</button>
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
