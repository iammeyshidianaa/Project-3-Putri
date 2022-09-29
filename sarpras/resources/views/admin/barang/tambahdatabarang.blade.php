@extends('layout.admin')

@section('content')
@push('css')
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

      <h2 class="text-center text-primary">Tambah Data </h2>
    <form action="/insertdatabarang" method="POST" enctype="multipart/form-data">
    @csrf
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <input type="text" name="kategori" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('kategori')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('nama_barang')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Merek</label>
                                    <input type="text" name="merek" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('merek')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Stok</label>
                                    <input type="number" name="stok" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('stok')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Satuan</label>
                                    <select class="form-control" name="satuan" aria-label="Default select example">
                                        <option value="0" selected>Pilih Satuan :</option>
                                        <option value="Buah">Buah</option>
                                        <option value="Pasang">Pasang</option>
                                        <option value="Lembar">Lembar</option>
                                        <option value="Dus">Dus</option>
                                        <option value="Set">Set</option>
                                    </select>
                                    @error('satuan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp"></textarea>
                                    @error('deskripsi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- <div class=" mb-3">
                                    <label for="exampleInputEmail1"  class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="floatingTextarea2" style="height: 100px"></textarea>
                                    @error('deskripsi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div> -->
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
   </body>
   @endsection
   @push('scripts')


