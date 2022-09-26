@extends('layout.admin')

@section('content')
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />@endpush

    <body>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
          </div></div></div>

<h2 class="text-center text-primary"> Tambah Data</h2>
                            <form action="/insertbarangmasuk" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <input type="text" name="kategori2" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('kategori2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('namabarang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Merek</label>
                                    <input type="text" name="merek_barang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('merek_barang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Pembelian</label>
                                    <input type="date" name="tanggal_pembelian" class="form-control" id="tanggal"
                                        aria-describedby="emailHelp">
                                    @error('tanggal_pembelian')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                                    <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('jumlah')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Asal Barang</label>
                                    <select class="form-control" name="asal_barang" aria-label="Default select example">
                                        <option  value="0" selected></option>
                                        <option value="Sekolah">Sekolah</option>
                                        <option value="Pemasok">Pemasok</option>
                                    </select>
                                    @error('asal_barang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
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
        <script>
    config={
        minDate:"today",
    }
    flatpickr("input[type=date]",config);
</script>
   </body>
   @endsection
   @push('scripts')

