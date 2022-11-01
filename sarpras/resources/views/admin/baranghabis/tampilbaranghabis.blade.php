@extends('layout.admin')

@section('content')
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
                  <h4 class="card-title text-center">Ubah Data Barang Habis</h4>
                  <form action="/updatebaranghabis/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    <br>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nama Barang / Merek</label>
                            <input type="text"  name="nama_barang1" class="form-control" id="exampleInputName1" value="{{ $data->nama_barang1 }}">
                                @error('nama_barang1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Stok</label>
                            <input type="number"  name="stok1"  class="form-control" id="exampleInputCity1" value="{{ $data->stok1 }}">
                                @error('stok1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">Satuan</label>
                            <input type="text"  name="satuan1"  class="form-control" id="exampleInputCity1" value="{{ $data->satuan1 }}">
                                @error('satuan1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Deskripsi</label>
                            <textarea name="deskripsi1" class="form-control" id="exampleTextarea1" rows="4" value="{{ $data->deskripsi1 }}"></textarea>
                            @error('deskripsi1')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button class="btn btn-light" href="/databarang">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body >

@endsection
@push('scripts')
