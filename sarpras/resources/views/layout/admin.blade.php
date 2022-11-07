<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIN SARPRAS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('skydas/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{ asset('skydas/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('skydas/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('skydas/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{ asset('skydas/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('skydas/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('skydas/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('landing/assets/img/logo.png')}}" />
@stack('css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="index.html"><strong>SIN SARPRAS</strong></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('skydas/images/logo-mini.svg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <i class="ti-settings"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item"  href="/changePassworda">
                    <i class="ti-lock text-primary"></i>
                        Ubah Kata Sandi
                </a>
                <a class="dropdown-item" href="/logout">
                    <i class="ti-power-off text-primary"></i>
                        Keluar
                </a>
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <!-- Beranda -->

          <li class="nav-item">
            <a class="nav-link" href="/indexadmin">
              <i class="ti-world menu-icon"></i>
              <span class="menu-title">Beranda</span>
            </a>
          </li>

          <!-- Data Pengguna -->

          <li class="nav-item">
            <a class="nav-link" href="{{url('/user')}}" >
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Data Pengguna</span>
            </a>
          </li>

         <!-- Data Ruangan -->

         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ruang" aria-expanded="false" aria-controls="ruang">
            <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Data Ruangan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ruang">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/ruang">Ruangan</a></li>
                <li class="nav-item"> <a class="nav-link" href="/ruangan">Tambah Ruangan</a></li>
              </ul>
            </div>
          </li>

          <!-- Stok Opname/Barang Masuk -->

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#oke" aria-expanded="false" aria-controls="oke">
            <i class="ti-import menu-icon"></i>
              <span class="menu-title">Stok Opname</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="oke">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/masukadmin">Barang Habis</a></li>
                <li class="nav-item"> <a class="nav-link" href="/barangmasukadmin">Barang Tidak Habis</a></li>
              </ul>
            </div>
          </li>

          <!-- Data Barang -->

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#aman" aria-expanded="false" aria-controls="aman">
            <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Data Barang</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="aman">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/baranghabis">Barang Habis</a></li>
                <li class="nav-item"> <a class="nav-link" href="/databarang">Barang Tidak Habis</a></li>
              </ul>
            </div>
          </li>

          <!-- Permintaan Pengajuan -->

          <li class="nav-item">
            <a class="nav-link" href="/pengajuanguru" >
              <i class="ti-thought menu-icon"></i>
              <span class="menu-title">Permintaan</br>Pengajuan</span>
            </a>
          </li>

          <!-- Permintaan Peminjaman Barang -->

          <li class="nav-item">
            <a class="nav-link" href="/peminjamanadmin" >
              <i class="ti-location-arrow menu-icon"></i>
              <span class="menu-title">Permintaan</br>Peminjaman</span>
            </a>
          </li>

          <!-- Pengembalian Barang -->

          <li class="nav-item">
            <a class="nav-link" href="/pengembalianadmin" >
              <i class="ti-reload menu-icon"></i>
              <span class="menu-title">Permintaan</br>Pengembalian</span>
           </a>
          </li>

          <!-- Denda -->

          <!-- <li class="nav-item">
            <a class="nav-link" href="#" >
              <i class="ti-money menu-icon"></i>
              <span class="menu-title">Denda</span>
           </a>
          </li> -->

          <!-- Riwayat -->

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="ti-time menu-icon"></i>
              <span class="menu-title">Riwayat</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/sedangdipinjam">Sedang Dipinjam</a></li>
                <li class="nav-item"> <a class="nav-link" href="/dikembalikan">Peminjaman Barang</a></li>
                <li class="nav-item"> <a class="nav-link" href="/riwayatpengajuan">Pengajuan</a></li>
              </ul>
            </div>
          </li>

        <!-- Relasi -->

          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="ti-link menu-icon"></i>
              <span class="menu-title">Relasi</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/nabarr">Nama Barang</a></li>
              </ul>
            </div>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/merkk">Merek</a></li>
              </ul>
            </div>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/satuan">Satuan</a></li>
              </ul>
            </div>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('skydas/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('skydas/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('skydas/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('skydas/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('skydas/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('skydas/js/off-canvas.js')}}"></script>
  <script src="{{ asset('skydas/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('skydas/js/template.js')}}"></script>
  <script src="{{ asset('skydas/js/settings.js')}}"></script>
  <script src="{{ asset('skydas/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('skydas/js/dashboard.js')}}"></script>
  <script src="{{ asset('skydas/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>


</html>

@stack('scripts')
