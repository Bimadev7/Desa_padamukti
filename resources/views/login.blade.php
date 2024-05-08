<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- css style --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="/app/resources/css/style.css">
    <title>Hello, JDA ID!</title>
    <style>

        h1{
            text-align: center
        }
        p{
            text-align: center
        }

        .display-4{
            color: brown
        }
    </style>
  </head>


  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">login</a>
          </li>
          <li type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</li>
          {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
          </button> --}}
        </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  {{-- jumbotron --}}
  <section class="jumbotron text-center">
     
      <img src="{{ asset('image/Logo_jda.png') }}"  width="200" alt="Nama Gambar">
     
    <h1 class="display-4">JDA </h1>
    <p class="lead styele text-align: center">Jabar Digital Akademi</p>
 
@if(auth()->check())
    <p>Sudah Login</p>
@else
    <p></p>
@endif


@if(auth()->check())
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Exit
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endif

</section>

    {{-- end --}}






<section class="button text-center">

<button type="button" href="bac" class="btn btn-primary btn-lg btn-block">pinjam Barang</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">kembali Barang</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-body">
          <!-- Isi form login disini -->
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
              <label for="password" style="float: left;">Email</label>
              {{-- <input type="password" class="form-control" id="password" name="Email" placeholder="Password"> --}}
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
            <div class="form-group">
              <label for="password" style="float: left;">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</section>

  