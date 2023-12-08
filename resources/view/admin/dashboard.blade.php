@extends('layouts.admin')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <!-- chart caard section start -->
                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                        <div class="custome-1-bg b-r-4 card-body">
                            <div class="media align-items-center static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Tổng danh mục</span>
                                    <h4 class="mb-0 counter">{{number_format($totalCategory)}}
                                        <span class="badge badge-light-primary grow">
                                                    <i data-feather="trending-up"></i>8.5%</span>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-database-2-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-2-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Tổng sản phẩm</span>
                                    <h4 class="mb-0 counter">{{$totalProduct}}
                                        <span class="badge badge-light-danger grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-shopping-bag-3-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                        <div class="custome-3-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Giá thấp nhất</span>
                                    <h4 class="mb-0 counter">{{number_format($lowestPrice)}}
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-chat-3-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-4-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Giá cao nhất</span>
                                    <h4 class="mb-0 counter">{{number_format($highestPrice)}}
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-user-add-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-4-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Giá trung bình</span>
                                    <h4 class="mb-0 counter">{{number_format($mediumPrice)}}
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-user-add-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- visitors chart start-->
                <div class="col-xxl-4 col-md-6">
                    <div class="h-100">
                        <div class="card o-hidden card-hover">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="card-header-title">
                                        <h4>Visitors</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="pie-chart">
                                    <div id="pie-chart-visitors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- visitors chart end-->




            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
        <!-- footer End-->
    </div>
@endsection
@push('js')
    <script>
        var options = {
            series: @json($chartProduct),
            labels: @json($chartCategory),
            chart: {
                width: "100%",
                height: 275,
                type: 'donut',
            },

            legend: {
                fontSize: '12px',
                position: 'bottom',
                offsetX: 1,
                offsetY: -1,

                markers: {
                    width: 10,
                    height: 10,
                },

                itemMargin: {
                    vertical: 2
                },
            },

            colors: @json($chartColor),

            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 270
                }
            },

            dataLabels: {
                enabled: false
            },

            responsive: [{
                breakpoint: 1835,
                options: {
                    chart: {
                        height: 245,
                    },

                    legend: {
                        position: 'bottom',

                        itemMargin: {
                            horizontal: 5,
                            vertical: 1
                        },
                    },
                },
            },

                {
                    breakpoint: 1388,
                    options: {
                        chart: {
                            height: 330,
                        },

                        legend: {
                            position: 'bottom',
                        },
                    },
                },

                {
                    breakpoint: 1275,
                    options: {
                        chart: {
                            height: 300,
                        },

                        legend: {
                            position: 'bottom',
                        },
                    },
                },

                {
                    breakpoint: 1158,
                    options: {
                        chart: {
                            height: 280,
                        },

                        legend: {
                            fontSize: '10px',
                            position: 'bottom',
                            offsetY: 10,
                        },
                    },
                },

                {
                    theme: {
                        mode: 'dark',
                        palette: 'palette1',
                        monochrome: {
                            enabled: true,
                            color: '#255aee',
                            shadeTo: 'dark',
                            shadeIntensity: 0.65
                        },
                    },
                },

                {
                    breakpoint: 598,
                    options: {
                        chart: {
                            height: 280,
                        },

                        legend: {
                            fontSize: '12px',
                            position: 'bottom',
                            offsetX: 5,
                            offsetY: -5,

                            markers: {
                                width: 10,
                                height: 10,
                            },

                            itemMargin: {
                                vertical: 1
                            },
                        },
                    },
                },
            ],
        };

        var chart = new ApexCharts(document.querySelector("#pie-chart-visitors"), options);
        chart.render();
    </script>
@endpush