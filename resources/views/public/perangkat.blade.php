@extends('layout.main')

@section('title', 'Sejarah Desa')

@section('content')
<!-- Breadcrumbs -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Perangkat Desa</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Perangkat Desa</li>
            </ol>
        </div>
    </div>
</section>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
        }
        .profile-card {
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 200px;
            text-align: center;
            padding: 10px;
        }
        .profile-card img {
            width: 100%;
            border-radius: 10px;
        }
        .profile-card .name {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }
        .profile-card .position {
            font-size: 14px;
            color: #555;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-card">
            <img src="your-image-url.png" alt="Kades Padamukti">
            <div class="name">Kades Padamukti</div>
            <div class="position">KEPALA DESA</div>
        </div>
    </div>
</body>
@endsection
