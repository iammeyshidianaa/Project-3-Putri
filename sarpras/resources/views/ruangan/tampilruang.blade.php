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
                            <form action="/updateruang/{{ $ruang->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Gambar</label>
                                    <input type="file" name="gambar" class="form-control" >
                                    <img src="/gambar/{{ $ruang->gambar }}" height="80px" />
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ruangan</label>
                                    <input type="text" name="ruang" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $ruang->ruang }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $ruang->jurusan }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $ruang->deskripsi }}">
                                </div>



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
