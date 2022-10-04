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
                            <form action="/updatedatabarang/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <input type="text" name="kategori" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->kategori }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->nama_barang }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Merek</label>
                                    <input type="text" name="merek" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->merek }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Stok</label>
                                    <input type="number" name="stok" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->stok }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Satuan</label>
                                    <select class="form-control" name="satuan" aria-label="Default select example">
                                        <option selected>{{ $data->satuan }}</option>
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
                                    <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->deskripsi }}">
                                </div>

                                <!-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->deskripsi }}"></textarea>
                                </div> -->

                                </div>
                                <button type="submit" class="btn btn-outline-warning">Ubah</button>
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

