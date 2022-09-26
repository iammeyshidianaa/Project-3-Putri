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
                            <form action="/updatebarangmasuk/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <input type="text" name="kategori2" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->kategori2 }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->namabarang }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Merek</label>
                                    <input type="text" name="merek_barang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->merek_barang }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Pembelian</label>
                                    <input type="date" name="tanggal_pembelian" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->tanggal_pembelian }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                                    <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->jumlah }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Asal Barang</label>
                                    <select class="form-control" name="asal_barang" aria-label="Default select example">
                                        <option selected>{{ $data->asal_barang }}</option>
                                        <option value="Sekolah">Sekolah</option>
                                        <option value="Pemasok">Pemasok</option>
                                    </select>
                                </div>

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

