@extends('layout.admin')

@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
        from {
            opacity: .99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
        position: absolute;
        direction: ltr;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        pointer-events: none;
        visibility: hidden;
        z-index: -1
    }

    .chartjs-size-monitor-expand>div {
        position: absolute;
        width: 1000000px;
        height: 1000000px;
        left: 0;
        top: 0
    }

    .chartjs-size-monitor-shrink>div {
        position: absolute;
        width: 200%;
        height: 200%;
        left: 0;
        top: 0
    }
</style>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div><br>
                                <h5 class="card-title"><center>Detail Pemasukan Stok</center></h5><br>
                                <canvas id="order-chart" style="display: block; height: 210px; width: 421px;"
                                    width="631" height="315" class="chartjs-render-monitor"></canvas>
                                <div class="d-flex flex-wrap mb-5">
                                    <div class="mr-5 mt-3">
                                        <h3 class="text-twitter fs-30 font-weight-medium">
                                            <center>___</center>
                                        </h3>
                                        <p class="text-muted">Barang Habis</p>
                                    </div>
                                    <div class="mr-5 mt-3">
                                        <h3 class="text-dribbble fs-30 font-weight-medium">
                                            <center>___</center>
                                        </h3>
                                        <p class="text-muted">Barang Tidak Habis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div>
    </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('skydas/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('skydas/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('skydas/js/off-canvas.js') }}"></script>
    <script src="{{ asset('skydas/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('skydas/js/template.js') }}"></script>
    <script src="{{ asset('skydas/js/settings.js') }}"></script>
    <script src="{{ asset('skydas/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('skydas/js/chart.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var stok = <?php echo json_encode($stok) ?>:
         var bulan = <?php echo json_encode($bulan) ?>;
         Highcharts.chart('grafik', {
            title: {
                text: 'Grafik Stok Bulanan'
            },
            xAxis : {
                categories : bulan
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
                    data: pendapatan
                }
            ]
         })
    </script>
</body>
@endsection
@push('scripts')
