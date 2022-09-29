@extends('layout.admin')

@section('content')
    <body>
    <body>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
          </div></div></div>

<h2 class="text-center text-primary"> Ubah Data</h2>
                            <form action="/updatebaranghabis/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <input type="text" name="kategori1" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->kategori1 }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="nama_barang1" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->nama_barang1 }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Merek</label>
                                    <input type="text" name="merek1" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->merek1 }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Stok</label>
                                    <input type="number" name="stok1" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->stok1 }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Satuan</label>
                                    <select class="form-control" name="satuan1" aria-label="Default select example">
                                        <option selected>{{ $data->satuan1 }}</option>
                                        <option value="Buah">Buah</option>
                                        <option value="Pasang">Pasang</option>
                                        <option value="Lembar">Lembar</option>
                                        <option value="Dus">Dus</option>
                                        <option value="Set">Set</option>
                                    </select>
                                    @error('satuan1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi1" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->deskripsi1 }}">
                                </div>

                                <!-- <div class=" mb-3">
                                    <label for="exampleInputEmail1"  class="form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi1" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    style="height: 100px" value="{{ $data->deskripsi1 }}"></textarea>
                                </div> -->

                                </div>
                                <div class="mb-3">
                                <button type="submit" class="btn btn-outline-warning">Ubah</button>
                                </div>
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
