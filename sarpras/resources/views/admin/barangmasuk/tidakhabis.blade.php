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
                    <div class="col-sm-6"></div>
                </div>
            </div>

            <h2 class="text-center text-primary">Stok Opname Barang Tidak Habis</h2>
            <div class="container">

                    @if ($massage = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $massage }}
                        </div>
                    @endif

                <a href="/tambahstok"  class="btn btn-outline-primary">Tambah Stok</a>
                <div class="row mt-3">
                    <div class="row">
                        <table class="table table-bordered" id="gas">
                            <thead class= table-success>
                                <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Barang / Merek</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Tanggal Masuk</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @php
                                    $no = 1;
                                @endphp
                                @foreach ($barangmasukadmin as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->nama2 }}</td>
                                        <!-- <td>{{ $row->tanggal_pembelian}}</td> -->
                                        <td>{{ $row->stok }}</td>
                                        <td>{{ $row->created_at->format('d/m/Y')}}</td>

                                        <td>
                                            <a href="#" class="btn btn-sm btn-danger text-white delete" id="delete"
                                            data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"><i class="ti-trash" title="Hapus"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
                    });
                });
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
                                window.location = "/delete/" + databarangid + ""
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
    @endsection
@push('scripts')

