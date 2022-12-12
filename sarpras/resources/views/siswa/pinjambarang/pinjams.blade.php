@extends('layout.siswa')

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
                        <h4 class="card-title text-center">Ajukan Peminjaman Barang </h4>
                        <form action="/insertpinjamsiswa" method="POST" enctype="multipart/form-data">
                            <br>
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="namapeminjam" class="form-control" id="exampleInputPassword1"
                                    readonly value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Kelas</label>
                                <select id="kelas" name="kelas" class="form-control">
                                    <option value=""></option>
                                    @foreach($ruang as $rua)
                                        <option value="{{$rua->id}}">{{$rua->ruang}} - {{$rua->jurusan}} - {{$rua->rombel}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kelas')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                                <select id="namabarang3" name="namabarang3" class="form-control">
                                    <option value=""></option>
                                    @foreach($namabarangs as $nabar)
                                    <option value="{{ $nabar->nama_barang }} ">{{ $nabar->nama_barang }}
                                        -{{$nabar->ruang->ruang}} - {{$nabar->ruang->jurusan}} -
                                        {{$nabar->ruang->rombel}}</option>
                                    @endforeach
                                </select>
                                @error('namabarang3')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" id="exampleInputPassword1">
                                @error('jumlah')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Peminjaman</label>
                                <input type="date" name="tanggalpinjam" class="form-control" id="tanggal">
                                @error('tanggalpinjam')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" name="tanggalkembali" class="form-control" id="tanggal">
                                @error('tanggalkembali')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Pinjam</button>
                        </form>
                    </div>

                    <!-- jquery  -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                        crossorigin="anonymous"></script>
                    <!-- js untuk bootstrap5  -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                        crossorigin="anonymous">
                    </script>
                    <!-- js untuk select2  -->
                    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
                    <script src="{{ asset('skydas/vendors/select2/select2.min.js') }}"></script>
                    <script src="{{ asset('skydas/js/select2.js') }}"></script>


                    <script>
                        $(document).ready(function() {
                            $("#kelas").select2({
                                placeholder: "--Pilih Kelas--"
                            });
                        });
                    </script>

                    <script>
                        $(document).ready(function() {
                            $("#namabarang3").select2({
                                placeholder: "--Pilih Barang--"
                            });
                        });
                    </script>

                    <script>
                        config = {
                            minDate: "today",
                        }
                        flatpickr("input[type=date]", config);
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
</body>
@endsection
@push('scripts')
