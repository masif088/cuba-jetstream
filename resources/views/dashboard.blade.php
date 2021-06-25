<x-app-layout>
    <x-slot name="header">
        <div class="col-6">
            <h3>Dashboard</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Default</li>
            </ol>
        </div>
    </x-slot>

    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-xl-6 box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tag Populer</h5>
                        </div>
                        <div class="card-body">
                            <div id="basic-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-6 box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Kampus Populer</h5>
                        </div>
                        <div class="card-body chart-block">
                            <div id="bar-chart2"></div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-sm-12 col-xl-6 box-col-6">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h5>Akurasi Pengaksesan Sistem</h5>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div id="basic-apex"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-sm-12 col-xl-6 box-col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Jumlah Mahasiswa dan Universitas</h5>
                        </div>
                        <div class="card-body chart-block">
                            <div class="chart-overflow" id="column-chart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 box-col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Statistik Akses Sistem</h5>
                        </div>
                        <div class="card-body chart-block">
                            <div class="chart-overflow" id="line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('livewire:load', function () {
                var options2 = {
                    chart: {
                        height: 350,
                        type: 'bar',
                        toolbar:{
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    series: [{
                        data: [1121, 965, 901, 841, 800, 789, 746, 708, 556, 521]
                    }],
                    xaxis: {
                        categories: ['Belajar', 'Informatika', 'Ngoding', 'PHP', 'Laravel', 'Matematika', 'Open Source', 'UNEJ', 'Semangat', 'Indonesia'],
                    },
                    colors:[ CubaAdminConfig.primary ]
                }

                var chart2 = new ApexCharts(
                    document.querySelector("#basic-bar"),
                    options2
                );

                chart2.render();
            });
        </script>
        <script>
            document.addEventListener('livewire:load', function () {
                google.charts.load('current', {packages: ['corechart', 'bar']});
                google.charts.load('current', {'packages':['line']});
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {
                    if ($("#column-chart1").length > 0) {
                        var a = google.visualization.arrayToDataTable([
                                ["Tahun", "Universitas", "Mahasiswa"],
                                ["2018", 35, 122],
                                ["2019", 40, 190],
                                ["2020", 54, 232],
                                ["2021", 69, 290]
                            ]),
                            b = {
                                chart: {
                                    title: "Title",
                                    subtitle: "Sub title"
                                },
                                bars: "vertical",
                                vAxis: {
                                    format: "decimal"
                                },
                                height: 400,
                                width:'100%',
                                colors: [CubaAdminConfig.primary, CubaAdminConfig.secondary , "#51bb25"]


                            },
                            c = new google.charts.Bar(document.getElementById("column-chart1"));
                        c.draw(a, google.charts.Bar.convertOptions(b))
                    }
                    if ($("#bar-chart2").length > 0) {
                        var a = google.visualization.arrayToDataTable([
                                ["Element", "Total Materi", {
                                    role: "style"
                                }],
                                ["Universitas Jember", 124, "#a927f9"],
                                ["Universitas Brawijaya", 110, "#f8d62b"],
                                ["Universitas Gadjah Mada", 95, "#f73164"],
                                ["Universitas Indonesia", 93, "color: #7366ff"],
                                ["Universitas Airlangga", 82, "#51cf7b"]
                            ]),
                            d = new google.visualization.DataView(a);
                        d.setColumns([0, 1, {
                            calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation"
                        }, 2]);
                        var b = {
                                // title: "aaaa",
                                width:'100%',
                                height: 400,
                                bar: {
                                    groupWidth: "95%"
                                },
                                legend: {
                                    position: "none"
                                }
                            },
                            c = new google.visualization.BarChart(document.getElementById("bar-chart2"));
                        c.draw(d, b)
                    }
                    if ($("#line-chart").length > 0) {
                        var data = new google.visualization.DataTable();
                        data.addColumn('number', 'Bulan');
                        data.addColumn('number', 'Mahasiswa');
                        data.addColumn('number', 'Tim MBKM');
                        // data.addColumn('number', 'Transformers: Age of Extinction');
                        data.addRows([
                            [1,  123, 100],
                            [2,  139, 89],
                            [3,  129, 101],
                            [4,  122, 110],
                            [5,  145, 116],
                            [6,   157, 123],
                            [7,   188, 133],
                            [8,  189, 144],
                            [9,  156, 132],
                            [10, 167, 135],
                            [11,  176,  155],
                            [12,  188,  153],
                        ]);
                        var options = {
                            chart: {
                                title: 'Title',
                                subtitle: 'sub-title'
                            },
                            colors: [CubaAdminConfig.primary , CubaAdminConfig.secondary , "#51bb25"],
                            height: 500,
                            width:'100%',
                        };
                        var chart = new google.charts.Line(document.getElementById('line-chart'));
                        chart.draw(data, google.charts.Line.convertOptions(options));
                    }
                }
            });
        </script>
        <script>
            document.addEventListener('livewire:load', function () {
                    // basic area chart
                    var options = {
                        chart: {
                            height: 350,
                            type: 'area',
                            zoom: {
                                enabled: false
                            },
                            toolbar: {
                                show: false
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'straight'
                        },
                        series: [{
                            name: "STOCK ABC",
                            data: series.monthDataSeries1.prices
                        }],
                        title: {
                            text: 'Judul Utama',
                            align: 'left'
                        },
                        subtitle: {
                            text: 'Sub Judul',
                            align: 'left'
                        },
                        labels: series.monthDataSeries1.dates,
                        xaxis: {
                            type: 'datetime',
                        },
                        yaxis: {
                            opposite: true
                        },
                        legend: {
                            horizontalAlign: 'left'
                        },
                        colors: [CubaAdminConfig.primary]

                    }

                    var chart = new ApexCharts(
                        document.querySelector("#basic-apex"),
                        options
                    );

                    chart.render();
            });
        </script>
        <script>
            document.addEventListener('livewire:load', function () {
                (function($) {
                    "use strict";
                    new Chartist.Line('.ct-1', {
                        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                        series: [
                            [12, 9, 7, 8, 5],
                            [2, 1, 3.5, 7, 3],
                            [1, 3, 4, 5, 6]
                        ]
                    }, {
                        fullWidth: true,
                        chartPadding: {
                            right: 40
                        }
                    });
                    var chart = new Chartist.Line('.ct-3', {
                        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16],
                        series: [
                            [5, 5, 10, 8, 7, 5, 4, null, null, null, 10, 10, 7, 8, 6, 9],
                            [10, 15, null, 12, null, 10, 12, 15, null, null, 12, null, 14, null, null, null],
                            [null, null, null, null, 3, 4, 1, 3, 4,  6,  7,  9, 5, null, null, null],
                            [{x:3, y: 3},{x: 4, y: 3}, {x: 5, y: undefined}, {x: 6, y: 4}, {x: 7, y: null}, {x: 8, y: 4}, {x: 9, y: 4}]
                        ]
                    }, {
                        fullWidth: true,
                        chartPadding: {
                            right: 10
                        },
                        lineSmooth: Chartist.Interpolation.cardinal({
                            fillHoles: true,
                        }),
                        low: 0
                    });
                    new Chartist.Line('.ct-4', {
                        labels: [1, 2, 3, 4, 5, 6, 7, 8],
                        series: [
                            [5, 9, 7, 8, 5, 3, 5, 4]
                        ]
                    }, {
                        low: 0,
                        showArea: true
                    });
                    new Chartist.Line('.ct-5', {
                        labels: [1, 2, 3, 4, 5, 6, 7, 8],
                        series: [
                            [1, 2, 3, 1, -2, 0, 1, 0],
                            [-2, -1, -2, -1, -2.5, -1, -2, -1],
                            [0, 0, 0, 1, 2, 2.5, 2, 1],
                            [2.5, 2, 1, 0.5, 1, 0.5, -1, -2.5]
                        ]
                    }, {
                        high: 3,
                        low: -3,
                        showArea: true,
                        showLine: false,
                        showPoint: false,
                        fullWidth: true,
                        axisX: {
                            showLabel: false,
                            showGrid: false
                        }
                    });
                })(jQuery);
            });
        </script>

    </div>
</x-app-layout>
