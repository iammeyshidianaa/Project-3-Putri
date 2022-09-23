<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SIN SARPRAS</title>
  </head>
    <body>
        <h1 class="text-center mb-4">Edit data barang</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatebarangmasuk/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <input type="text" name="kategori2" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->kategori2 }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">nama barang</label>
                                    <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->namabarang }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">merek</label>
                                    <input type="text" name="merek_barang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->merek_barang }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">tanggal pembelian</label>
                                    <input type="date" name="tanggal_pembelian" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->tanggal_pembelian }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">jumlah</label>
                                    <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->jumlah }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">asal barang</label>
                                    <select class="form-control" name="asal_barang" aria-label="Default select example">
                                        <option selected>{{ $data->asal_barang }}</option>
                                        <option value="Sekolah">Sekolah</option>
                                        <option value="Pemasok">Pemasok</option>
                                    </select>
                                </div>

                                </div>
                                <button type="submit" class="btn btn-outline-primary">Ubah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
    </body>

