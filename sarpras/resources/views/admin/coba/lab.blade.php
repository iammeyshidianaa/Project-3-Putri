@extends('layout.admin')

@section('content')
@push('css')
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
          <div class="col-sm-6">
          </div></div></div>


<section class="content">
    <div class="container-fluid">
    <div class="row">

    <div class="col-md-6 col-xl-4">
<div class="card" style="width:18rem;">
  <img src="https://i.pinimg.com/736x/c9/b5/ea/c9b5ea0e9bb5324f8c433c5f12edcf3d.jpg" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Laboratorium</h5>
    <a href="/coba" class="btn btn-outline-primary">Detail</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4">
<div class="card" style="width:18rem;">
  <img src="https://png.pngtree.com/illustrations/20190321/ourlarge/pngtree-campus-life-library-bookshelf-png-image_32644.jpg" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Perpustakaan</h5>
    <a href="/coba" class="btn btn-outline-primary">Detail</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4">
<div class="card" style="width:18rem;">
  <img src="https://media.istockphoto.com/vectors/presentation-business-cartoon-vector-id694295156?k=6&m=694295156&s=612x612&w=0&h=RWGnGsHgiqUq7XIBO365bw-irBuByDCX8uHFFuIo1NU=" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Aula</h5>
    <a href="/coba" class="btn btn-outline-primary">Detail</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4 my-5">
<div class="card" style="width:18rem;">
  <img src="https://www.creatopy.com/blog/wp-content/uploads/2018/12/Create-Animated-SVGS.png" style="height:165px;">
  <div class="card-body">
    <h5 class="card-title">Studio</h5>
    <a href="/coba" class="btn btn-outline-primary">Detail</a>
</div>
    </div>
    </div>

    <div class="col-md-6 col-xl-4 my-5">
<div class="card" style="width:18rem;">
  <img src="https://i.ytimg.com/vi/0NPCbR7k5YA/maxresdefault.jpg" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
    <a href="/coba" class="btn btn-outline-primary">X</a>
    <a href="/coba" class="btn btn-outline-primary">XI</a>
    <a href="/coba" class="btn btn-outline-primary">XII</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4 my-5">
<div class="card" style="width:18rem;">
  <img src="https://cms-assets.tutsplus.com/uploads/users/2273/posts/35705/image/Multimedia-Production-Concept.jpg" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Multimedia</h5>
    <a href="/coba" class="btn btn-outline-primary">X</a>
    <a href="/coba" class="btn btn-outline-primary">XI</a>
    <a href="/coba" class="btn btn-outline-primary">XII</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4 my-1">
<div class="card" style="width:18rem;">
  <img src="https://bhaktianindya.sch.id/wordpress/wp-content/uploads/2015/03/prodi-tkj.jpg" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Teknik Komputer Jaringan</h5>
    <a href="/coba" class="btn btn-outline-primary">X</a>
    <a href="/coba" class="btn btn-outline-primary">XI</a>
    <a href="/coba" class="btn btn-outline-primary">XII</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4 my-1">
<div class="card" style="width:18rem;">
  <img src="https://static.vecteezy.com/system/resources/previews/000/405/351/non_2x/character-people-and-car-insurance-icons-vector.jpg" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Teknik Kendaraan Ringan</h5>
    <a href="/coba" class="btn btn-outline-primary">X</a>
    <a href="/coba" class="btn btn-outline-primary">XI</a>
    <a href="/coba" class="btn btn-outline-primary">XII</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4 my-1">
<div class="card" style="width:18rem;">
  <img src="https://th.bing.com/th/id/OIP.V8zhO2w0L8ODaB0slA35fwAAAA?pid=ImgDet&rs=1" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Teknik Bisnis Sepeda Motor</h5>
    <a href="/coba" class="btn btn-outline-primary">X</a>
    <a href="/coba" class="btn btn-outline-primary">XI</a>
    <a href="/coba" class="btn btn-outline-primary">XII</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4 my-5">
<div class="card" style="width:18rem;">
  <img src="https://th.bing.com/th/id/OIP.IjIK4YEuxYW2MEpVFNkqPwHaFj?pid=ImgDet&rs=1" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Tata Boga</h5>
    <a href="/coba" class="btn btn-outline-primary">X</a>
    <a href="/coba" class="btn btn-outline-primary">XI</a>
    <a href="/coba" class="btn btn-outline-primary">XII</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4 my-5">
<div class="card" style="width:18rem;">
  <img src="https://www.soltius.co.id/site/uploads/images/5c930c370d202-software-akuntansi.jpg" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Akutansi</h5>
    <a href="/coba" class="btn btn-outline-primary">X</a>
    <a href="/coba" class="btn btn-outline-primary">XI</a>
    <a href="/coba" class="btn btn-outline-primary">XII</a>
  </div>
</div>
    </div>

    <div class="col-md-6 col-xl-4 my-5">
<div class="card" style="width:18rem;">
  <img src="https://i1.wp.com/www.tercanggih.com/wp-content/uploads/2019/04/Komponen-Komputer.jpg?resize=608%2C312" style="height:165px;" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Teknik Komputer Jaringan</h5>
    <a href="/coba" class="btn btn-outline-primary">X</a>
    <a href="/coba" class="btn btn-outline-primary">XI</a>
    <a href="/coba" class="btn btn-outline-primary">XII</a>
  </div>
</div>
    </div>









</section>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
    $('#gas').DataTable( {
        language: {
            url: "{{asset('skydas/js/bahasa.json')}}"
        }
    } );
} );
    </script>
    </body>
    <script>
        // var button = document.getElementById('id');
        $('.delete').click(function() {
            var barangmasukid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');

            swal({
                    title: "Yakin?",
                    text: "Apa kamu ingin menghapus data ini? " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletebarangmasuk/" + barangmasukid + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script>


    </div>
    @endsection
@push('scripts')
