@extends('layout.admin')

@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                                <div id="grafik"></div>
                                {{-- <canvas id="grafik" style="display: block; height: 210px; width: 421px;" width="631"
                                    height="315" class="chartjs-render-monitor"></canvas> --}}
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                <script>
                    const chart = Highcharts.chart('grafik', {
                        title: {
                            text: 'Laporan Stok Opname Bulanan'
                        },
                        xAxis: {
                            categories: {!! json_encode($previousMonths) !!},
                        },
                        series: [{
                            type: 'column',
                            name: 'Total Stok',
                            colorByPoint: true,
                            data: {!! json_encode($array_pengeluaran) !!},
                            showInLegend: false
                        }]
                    });
                </script>
</body>
@endsection
@push('scripts')
