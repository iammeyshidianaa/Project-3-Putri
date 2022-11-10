@extends('layout.admin')

@section('content')
@push ('css')

<!-- css bootstrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- css untuk select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<!-- css bootstrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- css untuk select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
 <!-- Plugin css for this page -->
 <link rel="stylesheet" href="{{ asset('skydas/vendors/select2/select2.min.css')}}">
 <link rel="stylesheet" href="{{ asset('skydas/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('skydas/css/vertical-layout-light/style.css')}}">

        <style>
            .wrap.select2-selection--multiple (heigth: 100%)
            .select2-container .wrap.select2-selection--multiple .select2-selection_rendered li { word-wrap: break-word; text-overflow: inherit; white-space: normal !important }
        </style>


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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Tambah Data Barang Tidak Habis </h4>
                  <form action="/insertdatabarang" method="POST" enctype="multipart/form-data">
                    <br>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Barang / Merek</label>
                            <input type="text"  name="nama_barang" class="form-control" id="exampleInputName1" placeholder="">
                                @error('nama_barang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Stok</label>
                            <input type="number"  name="jumlah_stok"  class="form-control" id="exampleInputCity1" placeholder="">
                                @error('stok')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Satuan</label>
                            <input type="text"  name="satuan"  class="form-control" id="exampleInputCity1" placeholder="">
                                @error('satuan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="form-group">
                        <label>Ruangan</label>
                        <select id="ruang_id" name="ruang_id" class="form-control" >
                                <option value=""></option>
                                @foreach($data as $d)
                                    <option value="{{$d->id}}">{{ $d->ruang }} {{ $d->jurusan }} {{ $d->rombel }}</option>
                                @endforeach
                            </select>
                                @error('ruang_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                        <div class="form-group">
                            <label for="exampleTextarea1">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            @error('deskripsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button class="btn btn-light" href="/databarang">Cancel</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

 <!-- js untuk select2  -->
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
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

<script>
            $(document).ready(function () {
                $("#ruang_id").select2({
                    placeholder: "--Pilih Barang--",
                    containerCssClass: 'wrap'
                });
            });
        </script>
   @endsection
   @push('scripts')

