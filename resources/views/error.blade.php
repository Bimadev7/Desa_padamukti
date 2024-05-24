














<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-bfLT5UetKDbL+eWVqqfRQK21Xp9hH5l7Kl8Oz2dktDI5pY/15cC1xXeXkmF8xqnv2psu21y2uVrFsXcsEpWIlw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Errorr</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public_view/assets/img/favicon.png" rel="icon">
  <link href="public_view/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public_view/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public_view/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public_view/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public_view/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public_view/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public_view/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  {{-- <link href="public_view/assets/css/style.css" rel="stylesheet"> --}}
</head>

{{-- Tugas JDA --}}
{{-- View --}}

<body>
  <!-- ======= Header ======= -->
  


 
  <!-- Template Main JS File -->
  <script src="public_view/assets/js/main.js"></script>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head> 
  <body>

  <div class="modal fade" id="modal-primary">
  <div class="modal-dialog">
    <div class="modal-content bg-primary">
      <div class="modal-header">
        <h4 class="modal-title">Form Login</h4>
  
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="password" style="float: left;">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
          <div class="form-group">
            <label for="password" style="float: left;">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
           <div class="row">
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
              </div>
              
  </form>
      </div>
    </div>
  </div>
  </div>
  </body>
  <!-- /.modal -->

  <!-- Include Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
        $('#modal-primary').modal('show');
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="../../plugins/toastr/toastr.min.js"></script>


































<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Alert Example</title>
    <style>
        /* Basic styling for the alert box */
        .alert {
            padding: 20px;
            background-color: #f44336; /* Red */
            color: white;
            margin-bottom: 15px;
            opacity: 1;
            transition: opacity 0.6s; /* 600ms to fade out */
            border-radius: 5px;
        }

        /* The close button */
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        /* Hidden by default */
        .alert.hidden {
            opacity: 0;
            pointer-events: none; /* Prevents interaction */
        }
    </style>
</head>
<body>
 <script src="public_view/assets/js/main.js"></script>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head> 
  <body>

  <div class="modal fade" id="modal-primary">
  <div class="modal-dialog">
    <div class="modal-content bg-primary">
      <div class="modal-header">
        <h4 class="modal-title">Form Login</h4>
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
        
        <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="password" style="float: left;">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
          <div class="form-group">
            <label for="password" style="float: left;">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
           <div class="row">
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
              </div>
              
  </form>
      </div>
    </div>
  </div>
  </div>
  </body>
  <!-- /.modal -->
    <div class="alert error-alert" id="errorAlert">
        <span class="closebtn" onclick="closeAlert()">&times;</span>
        <strong>Error!</strong> This is an error message.
    </div>
    <div class="alert error-alert" id="errorAlert">
        <span class="closebtn" onclick="closeAlert()">&times;</span>
        <strong>Error!!!</strong> Anda belum login 
      <span  onclick="closeAlert()">&times;</span>
        <strong>Back to</strong> Dasboard
        
    </div>
    
    <script>
        function closeAlert() {
            var alertBox = document.getElementById('errorAlert');
            alertBox.classList.add('hidden');
        }

        // Show alert when the page loads
        window.onload = function() {
            var alertBox = document.getElementById('errorAlert');
            alertBox.classList.remove('hidden');
        };
    </script>
</body>
</html> 
