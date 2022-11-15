@extends('layout.admin')

@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">Grafik Peminjaman</div>
                            <div class="card-body">
                                <canvas id="grafik" style="display: block; height: 210px; width: 421px;" width="631" height="315" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </div>
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
