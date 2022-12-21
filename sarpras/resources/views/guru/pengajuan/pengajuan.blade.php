@extends('layout.guru')

@section('content')
@push('css')

<!-- css bootstrap5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- css untuk select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('skydas/vendors/select2/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('skydas/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('skydas/css/vertical-layout-light/style.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

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
                        <h4 class="card-title text-center">Ajukan Permintaan Barang</h4>
                        <form action="/insertp" method="POST" enctype="multipart/form-data">
                            <br>
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="namap" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" readonly value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label">Nama Barang</label>
                                <select id="666" name="barangp" class="form-control">
                                    <option value=""></option>
                                    @foreach($baranghabis as $d)
                                        <option value="{{ $d->nama_barang1 }}">{{ $d->nama_barang1 }} - {{ $d->ruang->ruang}} - {{ $d->ruang->jurusan}} - {{ $d->ruang->rombel}}  </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label">Jumlah Permintaan</label>
                                <input type="number" name="jumlahp" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                                <div class="col-LG-13">
                                    <input type="date" name="tanggalp" id="tanggal" class="form-control"
                                        id="inputEmail3">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

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
<script>
    config={
    minDate:"today",
}
flatpickr("input[type=date]",config);
</script>


@endsection
@push('scripts')
<!-- js untuk select2  -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
<script src="{{ asset('skydas/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('skydas/js/select2.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#666").select2({
            placeholder: "-- Pilih Barang --",
            containerCssClass: 'wrap',
            width: '100%'
        });
    });
</script>
