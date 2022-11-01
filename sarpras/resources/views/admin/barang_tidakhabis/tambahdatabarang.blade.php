@extends('layout.admin')

@section('content')
@push('css')
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
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
   @endsection
   @push('scripts')


