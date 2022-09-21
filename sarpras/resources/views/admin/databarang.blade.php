<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SIN - SARPRAS</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
  </head>
  <body>
    <h1 class="text-center mb-4">Data Barang</h1>

<div class="container">
<a href="/tambahdatabarang" class="btn btn-success">Tambah Stok</a>
    <div class="row">

    <div class="row mt-3">
                @if ($massage = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $massage }}
                    </div>
                @endif

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Merek</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
                 @php
                $no = 1;
               @endphp
             @foreach ($data as $row)
                 <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->kategori }}</td>
                                <td>{{ $row->nama_barang }}</td>
                                <td>{{ $row->merek}}</td>
                                <td>{{ $row->stok }}</td>

                                <td>
                                    <a href="/tampilkandatabarang/{{ $row->id }}" type="button"
                                        class="btn btn-outline-warning">Ubah</a>
                                    <a href="#" class="btn btn-outline-danger delete" id="delete"
                                        data-id="{{ $row->id }}" data-nama="{{ $row->nama }}">Hapus</a>
                                </td>

                            </tr>
                        @endforeach

    </tr>

  </tbody>
</table>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </body>
    <script>
        // var button = document.getElementById('id');
        $('.delete').click(function() {
            var databarangid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');

            swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus data dapurkue dengan id " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletedatabarang/" + databarangid + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script>

            <script>
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif

    </script>
    </div>
</html>
