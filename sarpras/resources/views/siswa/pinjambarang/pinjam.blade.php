@extends('layout.siswa')

@section('content')
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <body>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                <div class="col-sm-6"></div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
                    <h2 class="text-center text-primary">Ajukan Peminjaman Barang</h2>
            </div>
                <form action="/insertpinjamsiswa" method="POST" enctype="multipart/form-data">
                @csrf
                        <br><br>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="namapeminjam" class="form-control" id="exampleInputPassword1" readonly value="{{ Auth::user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="exampleInputPassword1">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                            <input type="text" name="namabarang3" class="form-control" id="exampleInputPassword1">
                        </div> -->

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                            <select id="hallo" name="namabarang3" class="form-control">
                                @foreach( $pinjambarang as $nbs )
                                <option value="{{ $nbs->nama_barang }}">{{ $nbs->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" name="tanggalpinjam" class="form-control"id="tanggal">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Ajukan</button>
                </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
                element.addEventListener('keyup', function(e) {
                    let cursorPostion = this.selectionStart;
                    let value = parseInt(this.value.replace(/[^,\d]/g, ''));
                    let originalLenght = this.value.length;
                    if (isNaN(value)) {
                        this.value = "";
                    } else {
                        this.value = value.toLocaleString('id-ID', {
                            currency: 'IDR',
                            style: 'currency',
                            minimumFractionDigits: 0
                        });
                        cursorPostion = this.value.length - originalLenght + cursorPostion;
                        this.setSelectionRange(cursorPostion, cursorPostion);
                    }
                });
            });
        });
    </script>
    <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script>
    config={
        minDate:"today",
    }
    flatpickr("input[type=date]",config);
</script>
    <script>
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif

    </script>
@endsection
   @push('scripts')
