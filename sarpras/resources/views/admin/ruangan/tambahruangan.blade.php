@extends('layout.admin')

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
                        <h4 class="card-title text-center">Tambah Stock Barang Habis </h4>
                        <form action="/insertruang" method="POST" enctype="multipart/form-data">
                            <br>
                            @csrf
                            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                    @error('gambar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Pilih Ruangan</label>
                    <select class="form-select" name="ruang" aria-label="Default select example">
                        <option selected>Pilih Ruang</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                        <option value="XIV">XIII</option>
                        <option value="LAB">LAB</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control">
                    @error('jurusan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Rombel</label>
                    <input type="number" name="rombel" class="form-control">
                    @error('rombel')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control">
                    @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
             
                <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- js untuk bootstrap5  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- js untuk select2  -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
    <script src="{{ asset('skydas/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('skydas/js/select2.js') }}"></script>

</body>
@endsection

@push('scripts')

