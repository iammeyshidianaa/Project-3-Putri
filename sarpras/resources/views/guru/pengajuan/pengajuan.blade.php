@extends('layout.guru')

@section('content')
@push('css')
<!-- css bootstrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- css untuk select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
 <!-- Plugin css for this page -->
 <link rel="stylesheet" href="{{ asset('skydas/vendors/select2/select2.min.css')}}">
 <link rel="stylesheet" href="{{ asset('skydas/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('skydas/css/vertical-layout-light/style.css')}}">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>>

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

            <h2 class="text-center text-primary">Ajukan Permintaan</h2>
        </div>
        <br><br>
        <form action="/insertp" method="POST" enctype="multipart/form-data">
            @csrf
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="text" name="namap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly value="{{ Auth::user()->name }}">
            </div>
            <!-- <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                <input type="text" name="barangp" class="form-control" id="exampleInputPassword1">
            </div> -->
            <div class="form-group">
                <label for="exampleInputCity1">Nama Barang</label>
                    <input type="text" name="barangp" class="form-control" id="exampleInputCity1" placeholder="">
                        @error('barangp')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Alasan Pengajuan</label>
                <input type="text" name="alasanp" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="form-label">Harga</label>
                <div class="col-LG-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input type="text" name="hargap"  id="hargap" class="form-control" id="inputEmail3">
                        <!-- type-currency="IDR" -->
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="form-label">Jumlah Beli</label>
                <div class="col-LG-12">
                    <input type="number" name="jumlahp" id="jumlahp" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="form-label">Total</label>
                <div class="col-LG-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                        <input type="text" name="totalp" type-currency="IDR" readonly id="totalp" placeholder="0" class="form-control" id="inputEmail3">
                    </div>

                    <button type="submit" class="btn btn-primary">Ajukan</button>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>
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

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzNa41tkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ" crossorigin="anonymous"></script> -->


    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("#jumlahp").change(function() {
                var jumlah = $("#jumlahp").val();
                var harga = $("#hargap").val();
                var total = jumlah * harga
                $("#totalp").val(total);
            });
        });
        $("#jumlahp").keyup(function() {
            var jumlah = $("#jumlahp").val();
            var harga = $("#hargap").val();
            var total = jumlah * harga
            $("#totalp").val(total);
        });
    </script>

    <!-- <script>
                $(document).ready(function(){
                    var jumlah = $("#jumlah").val();
                    var harga = $("#harga").val();
                    var total = jumlah * harga
                    $("#total").val(total);
                });
                $(document).keyup(function(){
                    var jumlah = $("#jumlah").val();
                    var harga = $("#harga").val();
                    var total = jumlah * harga
                    $("#total").val(total);
                });
            </script>
            <script type="IDR/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script type="javascript">
        $(".perhitungan").keyup(function(){
        var bil1 = parseInt($("#bil1").val())
        var bil2 = parseInt($("#bil2").val())

        var hasil = bil1 + bil2;
        $("#hasil").attr("value",hasil)
    });
        </script> -->
</body>

</html>
@endsection
@push('scripts')
