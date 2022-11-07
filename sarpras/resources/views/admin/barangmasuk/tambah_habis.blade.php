@extends('layout.admin')
@section('content')
        <!-- css bootstrap5-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- css untuk select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Tambah Stock Barang Habis </h4>
                  <form action="/insert_stok_baranghabis" method="POST" enctype="multipart/form-data">
                    <br>
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputCity1">Nama Barang</label>
                        <select id="nabar" name="nama" class="form-control">
                                <option value=""></option>
                                @foreach($baranghabis as $d)
                                    <option value="{{ $d->nama_barang1 }}">{{ $d->nama_barang1 }}</option>
                                @endforeach
                        </select>
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Tanggal Masuk</label>
                            <input type="date"  name="tanggal_pembelian"  class="form-control" id="exampleInputCity1" placeholder="">
                                @error('tanggal_pembelian')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Stok</label>
                            <input type="number"  name="stok"  class="form-control" id="exampleInputCity1" placeholder="">
                                @error('stok')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button class="btn btn-light" href="/masukadmin">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>

        <!-- jquery  -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <!-- js untuk bootstrap5  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- js untuk select2  -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>


</body>
@endsection

@push('scripts')
<script>
            $(document).ready(function () {
                $("#nabar").select2({
                    placeholder: "--Pilih Barang--",
                    containerCssClass: 'wrap'
                });
            });
        </script>
@endpush


