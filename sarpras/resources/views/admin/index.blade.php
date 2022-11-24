@extends('layout.admin')

@section('content')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Selamat Datang Admin<a class="ti-hand-open"></a></h3>
                        <h6 class="font-weight-normal mb-0">Semoga harimu menyenangkan <span
                                class="text-primary">^_^</span></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('skydas/images/dashboard/people.svg')}}" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Malang</h4>
                                    <h6 class="font-weight-normal">Jawa Timur</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Permintaan Pengajuan ( Guru )</p>
                                <p class="fs-30 mb-2">{{ $permintaan_pengajuan }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Permintaan Peminjaman ( Siswa ) </p>
                                <p class="fs-30 mb-2">{{ $permintaan_pinjam_siswa }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Permintaan Pengembalian ( Guru )</p>
                                <p class="fs-30 mb-2">{{ $permintaan_pengembalian_guru }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Permintaan Pengembalian ( Siswa ) </p>
                                <p class="fs-30 mb-2">#dalamproses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--charts -->
    <div class="card-body">
        <div id="grafik" style="display: block; height: 210px; width: 421px;" width="631" height="315"
            class="chartjs-render-monitor"></div>
    </div>
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Detail Pemasukan Stok</p>
                    <!-- <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p> -->
                    <div class="d-flex flex-wrap mb-2">
                        <div class="mr-5 mt-2">
                            <p class="text-muted">Order value</p>
                            <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                        </div>
                        <div class="mr-5 mt-2">
                            <p class="text-muted">Orders</p>
                            <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                        </div>
                        <div class="mr-5 mt-2">
                            <p class="text-muted">Users</p>
                            <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                        </div>
                        <div class="mt-">
                            <p class="text-muted">Downloads</p>
                            <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                        </div>
                    </div>
                    <canvas id="order-chart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Dibuat oleh tim Gantari</span>
        </div>
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Template oleh <a
                    href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
        </div>
    </footer>
    <!-- partial -->
</div>
<!-- main-panel ends -->
@endsection



<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
     Highcharts.chart('grafik', {
        title: {
            text: 'Grafik Stok Bulanan'
        },
        xAxis : {
            categories : {!! json_encode($previousMonths) !!},
        },
        yAxis : {
            title: {
                text : 'Nominal Stok Bulanan'
            }
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [
            {
                name: 'Nominal Stok'
                data: {!! json_encode($array_pengeluaran) !!},
            }
        ]
     })
</script>
