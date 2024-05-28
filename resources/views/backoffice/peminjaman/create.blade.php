<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="mt-5">Daftar Barang</h1>
  
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peminjaman.store') }}" method="POST">
        @csrf
        <table id="barangTable" class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Checkbox</th>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    {{-- <th>Image</th> --}}
                    <th>Stok</th>
                    {{-- <th>Bagus</th> --}}
                    {{-- <th>Jelek</th> --}}
                    {{-- <th>Departemen</th> --}}
                    <th>Jumlah Peminjaman</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                        <td>
                            <input type="checkbox" name="barang_id[]" value="{{ $item->id }}" id="barang_{{ $item->id }}" onchange="toggleQuantity({{ $item->id }})">
                        </td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        {{-- MANGGIL IMG PAKE NAMA JUGA --}}
                        {{-- <td><img src="{{ $item->img }}" alt="{{ $item->name }}" width="50"></td> --}}
                        {{-- <td><img src="{{ $item->img }}"  width="50"></td> --}}
                        <td>{{ $item->stock_of_goods }}</td>
                        {{-- <td>{{ $item->good_stuf }}</td> --}}
                        {{-- <td>{{ $item->bad_stuf }}</td> --}}
                        {{-- <td>{{ $item->department }}</td> --}}
                        <td>
                            <input type="number" name="quantity[{{ $item->id }}]" id="quantity_{{ $item->id }}" class="form-control" placeholder="Jumlah" min="1" max="{{ $item->stock_of_goods }}" style="display:none;">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
   <div style="text-align: center;">
    <a href="{{ route('/welcome') }}" class="btn btn-secondary btn-lg active">BACK TO DASHBOARD</a>
</div>
<div style="text-align: center;">
    <a href="{{ route('/welcome') }}" style="position: absolute; top: 430px; left: 300px;" class="btn btn-primary"> <= BACK</a>
</div>
        {{-- <button style="position: absolute; top: 450px; left: 300px;" type="submit" class="btn btn-dark">BACK</button> --}}
<button style="position: absolute; top: 430px; right: 300px;" type="submit" class="btn btn-success">SUBMIT</button>
{{-- <button style="position: absolute; top: 430px; left: 300px;" type="submit" class="btn btn-outline-dark">BACK</button> --}}

    </form>
 
</div>

<script>
    $(document).ready(function() {
        $('#barangTable').DataTable();
    });

    function toggleQuantity(id) {
        var quantityInput = document.getElementById('quantity_' + id);
        if (document.getElementById('barang_' + id).checked) {
            quantityInput.style.display = 'block';
        } else {
            quantityInput.style.display = 'none';
            quantityInput.value = ''; // Clear the quantity input if unchecked
        }
    }
</script>
</body>
</html>
