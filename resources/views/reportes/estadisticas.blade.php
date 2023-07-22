@extends('layouts.layout')

@section('icon_title')
    <i class="fas fa-school"></i>
@endsection

@section('title', 'Graficos Estadisticos')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <!-- PIE CHART -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Estado de eventos</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="pieChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- AREA CHART -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Usuarios por eventos</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">

                                @foreach ($eventos as $e)
                                    <div class="progress-group">
                                        Evento: {{ $e->nombre }}
                                        <span class="float-right">Registrados = {{ $e->publicos->count() }}</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-gray" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                @endforeach

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <!-- /.col (LEFT) -->
                <div class="col-md-6">
                    <!-- BAR CHART -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Cantidad de suscriptores</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="barChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- DONUT CHART -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Tipos de usuarios</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-body text-center">
                                <p>Suscriptores | Clientes | Administradores</p>
                                <div class="progress vertical">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="10"
                                        aria-valuemin="0" aria-valuemax="100" style="height: {{ $cantPublico*10 }}%">{{ $cantPublico }}
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                                <div class="progress vertical">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="10"
                                        aria-valuemin="0" aria-valuemax="100" style="height: {{ $clientes*10 }}%">{{ $clientes }}
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                                <div class="progress vertical">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="10"
                                        aria-valuemin="0" aria-valuemax="100" style="height: {{ $admins*10 }}%">{{ $admins }}
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
        </div>
        @php
            /* dd($paginaMayor->visitas); */
        @endphp
    </section>
    <!-- /.content -->

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            /* ChartJS */
            const MIN = 0;
            const MAX = 10;
            const cantEventosDes = '{{ $cantEventosDes }}';
            const cantEventosHab = '{{ $cantEventosHab }}';
            const cantPublico = '{{ $cantPublico }}';
            /* let dato = @json($cantEventosDes) */

            //--------------
            //- AREA CHART - 2
            //--------------
            var areaChartData = {
                labels: ['Suscritos'],
                datasets: [{
                        label: 'Gestión 2022',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [cantPublico, MAX]
                    },
                    {
                        label: 'Gestión 2021',
                        backgroundColor: 'rgba(210, 214, 222, 1)',
                        borderColor: 'rgba(210, 214, 222, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [1, MIN]
                    },
                ]
            }

            var areaChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }]
                }
            }

            //-------------
            //- PIE CHART - 1
            //-------------
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var donutDataRe = {
                labels: [
                    'Habilitado',
                    'Desabilitado',
                ],
                datasets: [{
                    data: [cantEventosHab, cantEventosDes],
                    backgroundColor: ['#3d9970', '#ff851b'],
                }]
            }
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            new Chart(pieChartCanvas, {
                type: 'pie',
                data: donutDataRe,
                options: pieOptions
            })

            //-------------
            //- BAR CHART - 2
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false
            }
            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

            //-------------
            //- DONUT CHART - 4
            //-------------
            var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
            var donutData = {
                labels: [
                    'Habilitado',
                    'Desabilitado',
                ],
                datasets: [{
                    data: [cantEventosHab, cantEventosDes],
                    backgroundColor: ['#00a65a', '#f56954'],
                }]
            }

            var donutOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions
            })





        })
    </script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
@endsection
