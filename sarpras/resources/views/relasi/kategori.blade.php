@extends('layout.admin')
@section('content')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">

          </div></div></div>

          <h2 class="text-center text-primary">Kategori</h2>
     <div class="container">


<!-- <a href="/kategori_tambah"  class="btn btn-outline-primary">Tambah Barang</a> -->
<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
 Tambah Data
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nama Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/insertkategori" method="POST" enctype="multipart/form-data">
      @csrf

<input type="text" name="kategorii" class="form-control" id="exampleInputEmail1"
    aria-describedby="emailHelp">
@error('kategorii')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </div>
    </form>
    </div>
  </div>
</div>


<div class="row mt-3">
                <div class="row">
    <table class="table table-bordered" id="gas">
    <thead class= table-success>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

                                @php
                            $no = 1;
                        @endphp
                        @foreach($data as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $row->kategorii }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-danger text-white delete" id="delete"
                                        data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"><i class="ti-trash" title="Hapus"></i></a></a>
                                </td>
                            </tr>
                        @endforeach



    </tr>

  </tbody>
</table>
     </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
    $('#gas').DataTable( {
        language: {
            url: "{{asset('skydas/js/bahasa.json')}}"
        }
    } );
} );
    </script>
     <script>
        // var button = document.getElementById('id');
        $('.delete').click(function() {
            var databarangid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');

            swal({
                    title: "Yakin?",
                    text: "Apa kamu ingin menghapus data ini? " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletekategori/" + databarangid + ""
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
            <script>
                @if ($massage = Session::get('success'))
                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
                        toastr.success("{{ $massage }}");
                @endif

            </script>
    </div>

    @endsection
@push('scripts')

