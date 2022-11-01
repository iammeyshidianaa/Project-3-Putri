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
                  <h4 class="card-title text-center">Tambah Stock Barang Habis </h4>
                  <form action="/insert_stok_baranghabis" method="POST" enctype="multipart/form-data">
                    <br>
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword4">Nama Barang / Merek</label>
                            <select name="nama" class="form-control">
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

</body>
@endsection
@push('scripts')

