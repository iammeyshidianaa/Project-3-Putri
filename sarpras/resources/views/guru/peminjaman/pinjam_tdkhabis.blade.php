@extends('layout.guru')

@section('content')
@push('css')
<!-- css bootstrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- css untuk select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('skydas/vendors/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('skydas/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('skydas/css/vertical-layout-light/style.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6"></div>
                </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Peminjaman Barang Tidak Habis </h4>
                        <form action="/insertpinjam_guru" method="POST" enctype="multipart/form-data">
                            <br>
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="namag" class="form-control" id="exampleInputPassword1" readonly
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                                <select id="oke" name="barangg" class="form-control">
                                    <option value=""></option>
                                    @foreach($namabarangs as $nabar)
                                    <option value="{{ $nabar->nama_barang }}">{{ $nabar->nama_barang }} - {{ $nabar->ruang->ruang }} - {{ $nabar->ruang->jurusan }} - {{ $nabar->ruang->rombel }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                <input type="number" name="jumlahg" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" name="tanggalg" class="form-control" id="tanggal">
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Pinjam</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!-- js untuk bootstrap5  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    <script src="{{ asset('skydas/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('skydas/js/select2.js') }}"></script>
</body>
<script>
    $(document).ready(function() {
            $("#oke").select2({
                placeholder: "-- Pilih Barang --",
                containerCssClass: 'wrap'
            });
        });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script>
    config={
        minDate:"today",
    }
    flatpickr("input[type=date]",config);
</script>

@endsection
@push('scripts')
