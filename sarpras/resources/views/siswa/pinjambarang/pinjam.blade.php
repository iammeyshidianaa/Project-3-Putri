@extends('layout.siswa')

@section('content')
@push('css')
<!-- css bootstrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        <h4 class="card-title text-center">Peminjaman Barang Habis</h4>
                        <form action="/insertpinjamsiswa" method="POST" enctype="multipart/form-data">
                            <br>
                            @csrf

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="namapeminjam" class="form-control" id="exampleInputPassword1" readonly value="{{ Auth::user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Barang / Merek</label>
                                <select id="nama" name="namabarang3" class="form-control">
                                    <option value=""></option>
                                    @foreach($nabar as $n)
                                    <option value="{{ $n->nama_barang }} - ">{{ $n->nama_barang }} - {{$n->ruang}}</option>
                                    @endforeach
                                </select>
                                @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" name="tanggalpinjam" class="form-control"id="tanggal">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Ajukan</button>
                </form>
    </div>

            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- js untuk select2  -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
        <script src="{{ asset('skydas/vendors/select2/select2.min.js') }}"></script>
        <script src="{{ asset('skydas/js/select2.js') }}"></script>

        <script>
            $(document).ready(function() {
                $("#nama").select2({
                    placeholder: "--Pilih Barang--",
                    containerCssClass: 'wrap'
                });
            });
        </script>

        <script>
            config={
                minDate:"today",
            }
            flatpickr("input[type=date]",config);
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
    </body>
@endsection
   @push('scripts')
