@extends('layout.admin')
@section('content')
@push('css')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- css bootstrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- css untuk select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </div>
        <h2 class="text-center text-primary">Data Barang Tidak Habis</h2>
        <div class="container">
            @if ($massage = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $massage }}
            </div>
            @endif
            <div class="row mt-3">
                <div class="col-lg-6 sm-4">
                    <a href="/tambahdatabarang" class="btn btn-outline-primary">Tambah Barang</a><br><br>
                    <a href="/exportpdf2" class="btn btn-danger">Export PDF</a>
                    <a href="/exportexcel2" class="btn btn-success">Export Excel</a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="row">
                    <table class="table table-bordered" id="gas">
                        <thead class=table-success>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Barang / Merek</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Satuan</th>
                                <th scope="col">Deskripsi</th>
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
                                <td>{{ $row->nama_barang }}</td>
                                <td>{{ $row->jumlah_stok }}</td>
                                <td>{{ $row->satuan }}</td>
                                <td>{{ $row->deskripsi }}</td>
                                <td>
                                    <a href="/tampilkandatabarang/{{ $row->id }}" type="button" class="btn btn-sm btn-warning text-white"><i class="ti-eraser" title="Ubah"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger text-white delete" id="delete" data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"><i class="ti-trash" title="Hapus"></i>
                                    </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#gas').DataTable({
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
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('message') }}");
    @endif
</script>

<!-- jquery  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<!-- js untuk bootstrap5  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- js untuk select2  -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

<script>
    $(document).ready(function() {
        $("#ruang_id").select2({
            placeholder: "Pilih Ruang"
        });
    });
</script>

@endsection
@push('scripts')
