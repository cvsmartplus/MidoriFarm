@extends('layout.layout')
@php
    $title='Beranda';' <script></script>';

    $script = '<script src="' . asset('assets/js/homeFiveChart.js') . '"></script>';
    $script .= '<script>
                    // ===================== Revenue Chart Start ===============================
                    function createChartTwo(chartId, color1, color2) {
                        var options = {
                            series: [{
                                name: "series1",
                                data: [6, 20, 15, 48, 28, 55, 28, 52, 25, 32, 15, 25]
                            }, {
                                name: "series2",
                                data: [0, 8, 4, 36, 16, 42, 16, 40, 12, 24, 4, 12]
                            }],
                            legend: {
                                show: false
                            },
                            chart: {
                                type: "area",
                                width: "100%",
                                height: 150,
                                toolbar: {
                                    show: false
                                },
                                padding: {
                                    left: 0,
                                    right: 0,
                                    top: 0,
                                    bottom: 0
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: "smooth",
                                width: 3,
                                colors: [color1, color2], // Use two colors for the lines
                                lineCap: "round"
                            },
                            grid: {
                                show: true,
                                borderColor: "#D1D5DB",
                                strokeDashArray: 1,
                                position: "back",
                                xaxis: {
                                    lines: {
                                        show: false
                                    }
                                },
                                yaxis: {
                                    lines: {
                                        show: true
                                    }
                                },
                                row: {
                                    colors: undefined,
                                    opacity: 0.5
                                },
                                column: {
                                    colors: undefined,
                                    opacity: 0.5
                                },
                                padding: {
                                    top: -20,
                                    right: 0,
                                    bottom: -10,
                                    left: 0
                                },
                            },
                            fill: {
                                type: "gradient",
                                colors: [color1, color2], // Use two colors for the gradient
                                // gradient: {
                                //     shade: "light",
                                //     type: "vertical",
                                //     shadeIntensity: 0.5,
                                //     gradientToColors: [`${color1}`, `${color2}00`], // Bottom gradient colors with transparency
                                //     inverseColors: false,
                                //     opacityFrom: .6,
                                //     opacityTo: 0.3,
                                //     stops: [0, 100],
                                // },
                                gradient: {
                                    shade: "light",
                                    type: "vertical",
                                    shadeIntensity: 0.5,
                                    gradientToColors: [undefined, `${color2}00`], // Apply transparency to both colors
                                    inverseColors: false,
                                    opacityFrom: [0.4, 0.6], // Starting opacity for both colors
                                    opacityTo: [0.3, 0.3], // Ending opacity for both colors
                                    stops: [0, 100],
                                },
                            },
                            // markers: {
                            //     colors: [color1, color2], // Use two colors for the markers
                            //     strokeWidth: 3,
                            //     size: 0,
                            //     hover: {
                            //         size: 10
                            //     }
                            // },

                            markers: {
                                colors: [color1, color2],
                                strokeWidth: 2,
                                size: 0,
                                hover: {
                                    size: 8
                                }
                            },

                            xaxis: {
                                labels: {
                                    show: false
                                },
                                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                tooltip: {
                                    enabled: false
                                },
                                labels: {
                                    formatter: function(value) {
                                        return value;
                                    },
                                    style: {
                                        fontSize: "14px"
                                    }
                                }
                            },
                            yaxis: {
                                labels: {
                                    formatter: function(value) {
                                        return "Rp" + value + "m";
                                    },
                                    style: {
                                        fontSize: "14px"
                                    }
                                },
                            },
                            tooltip: {
                                x: {
                                    format: "dd/MM/yy HH:mm"
                                }
                            }
                        };

                        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
                        chart.render();
                    }

                    createChartTwo("revenueChart", "#CD20F9", "#6593FF");
                    // ===================== Revenue Chart End ===============================
                    </script>';

 @endphp

@section('content')

<div class="row gy-4">
    <div class="col-xxl-3 col-lg-4 col-sm-6">
        <div class="card h-100 p-0 radius-12 overflow-hidden">
            <div class="card-body p-0">
                <a href="{{ route('blogDetails') }}" class="w-100 max-h-266-px radius-0 overflow-hidden">
                    <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                </a>
                <div class="p-20">
                    <h6 class="mb-16">
                        <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                    </h6>
                    <p class="text-line-3 text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                    <span class="d-block border-bottom border-neutral-300 border-dashed my-20"></span>
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-6">
                        <div class="d-flex align-items-center gap-8">
                            <img src="{{ asset('assets/images/user-list/user-list5.png') }}" alt="" class="w-40-px h-40-px rounded-circle object-fit-cover">
                            <div class="d-flex flex-column">
                                <h6 class="text-sm mb-0">Agan</h6>
                                <span class="text-xs text-neutral-500">1 Hari yang lalu</span>
                            </div>
                        </div>
                        <a  href="{{ route('blogDetails') }}" class="btn btn-sm btn-primary-600 d-flex align-items-center gap-1 text-xs px-8 py-6">
                            Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6">
        <div class="card h-100 p-0 radius-12 overflow-hidden">
            <div class="card-body p-0">
                <a  href="{{ route('blogDetails') }}" class="w-100 max-h-266-px radius-0 overflow-hidden">
                    <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                </a>
                <div class="p-20">
                    <h6 class="mb-16">
                        <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                    </h6>
                    <p class="text-line-3 text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                    <span class="d-block border-bottom border-neutral-300 border-dashed my-20"></span>
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-6">
                        <div class="d-flex align-items-center gap-8">
                            <img src="{{ asset('assets/images/user-list/user-list5.png') }}" alt="" class="w-40-px h-40-px rounded-circle object-fit-cover">
                            <div class="d-flex flex-column">
                                <h6 class="text-sm mb-0">Agan</h6>
                                <span class="text-xs text-neutral-500">1 Hari yang lalu</span>
                            </div>
                        </div>
                        <a  href="{{ route('blogDetails') }}" class="btn btn-sm btn-primary-600 d-flex align-items-center gap-1 text-xs px-8 py-6">
                            Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6">
        <div class="card h-100 p-0 radius-12 overflow-hidden">
            <div class="card-body p-0">
                <a  href="{{ route('blogDetails') }}" class="w-100 max-h-266-px radius-0 overflow-hidden">
                    <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                </a>
                <div class="p-20">
                    <h6 class="mb-16">
                        <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                    </h6>
                    <p class="text-line-3 text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                    <span class="d-block border-bottom border-neutral-300 border-dashed my-20"></span>
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-6">
                        <div class="d-flex align-items-center gap-8">
                            <img src="{{ asset('assets/images/user-list/user-list5.png') }}" alt="" class="w-40-px h-40-px rounded-circle object-fit-cover">
                            <div class="d-flex flex-column">
                                <h6 class="text-sm mb-0">Agan</h6>
                                <span class="text-xs text-neutral-500">1 Hari yang lalu</span>
                            </div>
                        </div>
                        <a  href="{{ route('blogDetails') }}" class="btn btn-sm btn-primary-600 d-flex align-items-center gap-1 text-xs px-8 py-6">
                            Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-sm-6">
        <div class="card h-100 p-0 radius-12 overflow-hidden">
            <div class="card-body p-0">
                <a  href="{{ route('blogDetails') }}" class="w-100 max-h-266-px radius-0 overflow-hidden">
                    <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                </a>
                <div class="p-20">
                    <h6 class="mb-16">
                        <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                    </h6>
                    <p class="text-line-3 text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                    <span class="d-block border-bottom border-neutral-300 border-dashed my-20"></span>
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-6">
                        <div class="d-flex align-items-center gap-8">
                            <img src="{{ asset('assets/images/user-list/user-list5.png') }}" alt="" class="w-40-px h-40-px rounded-circle object-fit-cover">
                            <div class="d-flex flex-column">
                                <h6 class="text-sm mb-0">Agan</h6>
                                <span class="text-xs text-neutral-500">1 Hari yang lalu</span>
                            </div>
                        </div>
                        <a  href="{{ route('blogDetails') }}" class="btn btn-sm btn-primary-600 d-flex align-items-center gap-1 text-xs px-8 py-6">
                            Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- dari sini -->
    <div class="col-xxl-12">
    <div class="mb-16 mt-8 d-flex flex-wrap justify-content-between gap-16">
        <h6 class="my-4s">Monitoring</h6>
        {{-- <ul class="nav button-tab nav-pills mb-16 gap-12" id="pills-tab-three" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link fw-semibold text-secondary-light rounded-pill px-20 py-6 border border-neutral-300 active" id="pills-button-all-tab" data-bs-toggle="pill" data-bs-target="#pills-button-all" type="button" role="tab" aria-controls="pills-button-all" aria-selected="false" tabindex="-1">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link fw-semibold text-secondary-light rounded-pill px-20 py-6 border border-neutral-300" id="pills-button-art-tab" data-bs-toggle="pill" data-bs-target="#pills-button-art" type="button" role="tab" aria-controls="pills-button-art" aria-selected="false" tabindex="-1">Art</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link fw-semibold text-secondary-light rounded-pill px-20 py-6 border border-neutral-300" id="pills-button-music-tab" data-bs-toggle="pill" data-bs-target="#pills-button-music" type="button" role="tab" aria-controls="pills-button-music" aria-selected="false" tabindex="-1">Music</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link fw-semibold text-secondary-light rounded-pill px-20 py-6 border border-neutral-300" id="pills-button-utility-tab" data-bs-toggle="pill" data-bs-target="#pills-button-utility" type="button" role="tab" aria-controls="pills-button-utility" aria-selected="true">Utility</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link fw-semibold text-secondary-light rounded-pill px-20 py-6 border border-neutral-300" id="pills-button-fashion-tab" data-bs-toggle="pill" data-bs-target="#pills-button-fashion" type="button" role="tab" aria-controls="pills-button-fashion" aria-selected="true">Fashion</button>
            </li>
        </ul> --}}
    </div>
    <div class="tab-content" id="pills-tab-threeContent">
        <div class="tab-pane fade show active" id="pills-button-all" role="tabpanel" aria-labelledby="pills-button-all-tab" tabindex="0">
            <div class="row mb-24 g-3">
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">Sensor tanah</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            {{-- <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div> --}}
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">

                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Lihat Disini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light"> Sensor udara</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>

                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">

                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Lihat Disini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">Sensor Air</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>

                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">

                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Lihat Disini</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">Sensor Suara</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>

                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">

                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Lihat Disini</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-button-art" role="tabpanel" aria-labelledby="pills-button-art-tab" tabindex="0">
            <div class="row g-3">
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">Fantastic Alien</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-button-music" role="tabpanel" aria-labelledby="pills-button-music-tab" tabindex="0">
            <div class="row g-3">
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">Fantastic Alien</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-button-utility" role="tabpanel" aria-labelledby="pills-button-utility-tab" tabindex="0">
            <div class="row g-3">
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">Fantastic Alien</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-button-fashion" role="tabpanel" aria-labelledby="pills-button-fashion-tab" tabindex="0">
            <div class="row g-3">
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">Fantastic Alien</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img1.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img2.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img3.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-sm-6 col-xs-6">
                    <div class="nft-card bg-base radius-16 overflow-hidden">
                        <div class="radius-16 overflow-hidden">
                            <img src="{{ asset('assets/images/nft/nft-img4.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="p-10">
                            <h6 class="text-md fw-bold text-primary-light">New Figures</h6>
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/nft/nft-user-img4.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                <span class="text-sm text-secondary-light fw-medium">Watson Kristin</span>
                            </div>
                            <div class="mt-10 d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <span class="text-sm text-secondary-light fw-medium">Price:
                                    <span class="text-sm text-primary-light fw-semibold">1.44 ETH</span>
                                </span>
                                <span class="text-sm fw-semibold text-primary-600">$4,224.96</span>
                            </div>
                            <div class="d-flex align-items-center flex-wrap mt-12 gap-8">
                                <a  href="#" class="btn rounded-pill border text-neutral-500 border-neutral-500 radius-8 px-12 py-6 bg-hover-neutral-500 text-hover-white flex-grow-1">History</a>
                                <a  href="#" class="btn rounded-pill btn-primary-600 radius-8 px-12 py-6 flex-grow-1">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
<!-- Revenue Statistics Start -->
<div class="col-xxl-12 my-16">
    <div class="card h-100 radius-8 border-0">
        <div class="card-body p-24">
            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                <div>
                    <h6 class="mb-2 fw-bold text-lg">Revenue Statistics</h6>
                    <span class="text-sm fw-medium text-secondary-light">Yearly earning overview</span>
                </div>
                <div class="">
                    <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                        <option>Yearly</option>
                        <option>Monthly</option>
                        <option>Weekly</option>
                        <option>Today</option>
                    </select>
                </div>
            </div>

            <div class="mt-24 mb-24 d-flex flex-wrap">
                <div class="me-40">
                    <span class="text-secondary-light text-sm mb-1">Income</span>
                    <div class="">
                        <h6 class="fw-semibold d-inline-block mb-0">Rp26.201</h6>
                        <span class="text-success-main fw-bold d-inline-flex align-items-center gap-1">10% <iconify-icon icon="iconamoon:arrow-up-2-fill" class="icon"></iconify-icon> </span>
                    </div>
                </div>
                <div>
                    <span class="text-secondary-light text-sm mb-1">Expenses</span>
                    <div class="">
                        <h6 class="fw-semibold d-inline-block mb-0">Rp18.120</h6>
                        <span class="text-danger-main fw-bold d-inline-flex align-items-center gap-1">10% <iconify-icon icon="iconamoon:arrow-down-2-fill" class="icon"></iconify-icon> </span>
                    </div>
                </div>
            </div>

            <div id="upDownBarchart"></div>

        </div>
    </div>
</div>
<!-- Revenue Statistics End -->

    <!-- revenue -->
            <div class="col-xxl-12">
            <div class="card h-100">
                <div class="card-body p-24 mb-8">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
                        <h6 class="mb-2 fw-bold text-lg mb-0">Statistik Pendapatan</h6>
                        <select class="form-select form-select-sm w-auto bg-base border text-secondary-light">
                            <option>Pertahun</option>
                            <option>Perbulan</option>
                            <option>Perminggu</option>
                            <option>Hari Ini</option>
                        </select>
                    </div>
                    <ul class="d-flex flex-wrap align-items-center justify-content-center my-3 gap-24">
                        <li class="d-flex flex-column gap-1">
                            <div class="d-flex align-items-center gap-2">
                                <span class="w-8-px h-8-px rounded-pill bg-primary-600"></span>
                                <span class="text-secondary-light text-sm fw-semibold">Untung </span>
                            </div>
                            <div class="d-flex align-items-center gap-8">
                                <h6 class="mb-0"> Rp425.337.000</h6>
                                <span class="text-success-600 d-flex align-items-center gap-1 text-sm fw-bolder">
                                    10%
                                    <i class="ri-arrow-up-s-fill d-flex"></i>
                                </span>
                            </div>
                        </li>
                        <li class="d-flex flex-column gap-1">
                            <div class="d-flex align-items-center gap-2">
                                <span class="w-8-px h-8-px rounded-pill bg-lilac-600"></span>
                                <span class="text-secondary-light text-sm fw-semibold">Rugi </span>
                            </div>
                            <div class="d-flex align-items-center gap-8">
                                <h6 class="mb-0"> Rp294.464.160</h6>
                                <span class="text-danger-600 d-flex align-items-center gap-1 text-sm fw-bolder">
                                    10%
                                    <i class="ri-arrow-down-s-fill d-flex"></i>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <div id="revenueChart" class="apexcharts-tooltip-style-1"></div>
                </div>
            </div>
        </div>
    <!-- Earning Statistic -->
                    <!-- Trending Bids -->
                    <div class="col-12">
                    <h6 class="my-16">Statistik</h6>
                    <div class="row gy-4 mb-16">
                        <!-- Dashboard Widget Start -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card px-24 py-16 shadow-none radius-12 border h-100 bg-gradient-start-3">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-1">
                                        <div class="d-flex align-items-center flex-wrap gap-16">
                                            <span class="mb-0 w-40-px h-40-px bg-primary-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                                <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                            </span>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-semibold mb-0">24,000</h6>
                                                <span class="fw-medium text-secondary-light text-md">Artworks</span>
                                                <p class="text-sm mb-0 d-flex align-items-center flex-wrap gap-12 mt-12">
                                                    <span class="bg-success-focus px-6 py-2 rounded-2 fw-medium text-success-main text-sm d-flex align-items-center gap-8">
                                                        +168.001%
                                                        <i class="ri-arrow-up-line"></i>
                                                    </span> This week
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--     Widget End -->

                        <!-- Dashboard Widget Start -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card px-24 py-16 shadow-none radius-12 border h-100 bg-gradient-start-5">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-1">
                                        <div class="d-flex align-items-center flex-wrap gap-16">
                                            <span class="mb-0 w-40-px h-40-px bg-primary-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                                <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                            </span>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-semibold mb-0">82,000</h6>
                                                <span class="fw-medium text-secondary-light text-md">Auction</span>
                                                <p class="text-sm mb-0 d-flex align-items-center flex-wrap gap-12 mt-12">
                                                    <span class="bg-danger-focus px-6 py-2 rounded-2 fw-medium text-danger-main text-sm d-flex align-items-center gap-8">
                                                        +168.001%
                                                        <i class="ri-arrow-down-line"></i>
                                                    </span> This week
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Widget End -->

                        <!-- Dashboard Widget Start -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card px-24 py-16 shadow-none radius-12 border h-100 bg-gradient-start-2">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-1">
                                        <div class="d-flex align-items-center flex-wrap gap-16">
                                            <span class="mb-0 w-40-px h-40-px bg-primary-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                                <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                            </span>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-semibold mb-0">800</h6>
                                                <span class="fw-medium text-secondary-light text-md">Creators</span>
                                                <p class="text-sm mb-0 d-flex align-items-center flex-wrap gap-12 mt-12">
                                                    <span class="bg-success-focus px-6 py-2 rounded-2 fw-medium text-success-main text-sm d-flex align-items-center gap-8">
                                                        +168.001%
                                                        <i class="ri-arrow-up-line"></i>
                                                    </span> This week
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Widget End -->
                    </div>
                    </div>
                        <div class="col-xxl-12">
                            <div class="card h-100">
                                <div class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center justify-content-between">
                                    <h6 class="text-lg fw-semibold mb-0">Latest Appointments</h6>
                                    <a  href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                        View All
                                        <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                                    </a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive scroll-sm">
                                        <table class="table bordered-table mb-0 rounded-0 border-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="bg-transparent rounded-0">Name</th>
                                                    <th scope="col" class="bg-transparent rounded-0">ID</th>
                                                    <th scope="col" class="bg-transparent rounded-0">Date</th>
                                                    <th scope="col" class="bg-transparent rounded-0">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>General Checkup</td>
                                                    <td>#63254</td>
                                                    <td>27 Mar 2024</td>
                                                    <td> <span class="bg-success-focus text-success-main px-10 py-4 radius-8 fw-medium text-sm">Completed</span> </td>
                                                </tr>
                                                <tr>
                                                    <td>Blood test results </td>
                                                    <td>3.053 ETH</td>
                                                    <td>2h 5m 40s</td>
                                                    <td> <span class="bg-danger-focus text-danger-main px-10 py-4 radius-8 fw-medium text-sm">Canceled</span> </td>
                                                </tr>
                                                <tr>
                                                    <td>Heart Checkup</td>
                                                    <td>3.053 ETH</td>
                                                    <td>2h 5m 40s</td>
                                                    <td> <span class="bg-success-focus text-success-main px-10 py-4 radius-8 fw-medium text-sm">Completed</span> </td>
                                                </tr>
                                                <tr>
                                                    <td>Vaccination</td>
                                                    <td>3.053 ETH</td>
                                                    <td>2h 5m 40s</td>
                                                    <td> <span class="bg-danger-focus text-danger-main px-10 py-4 radius-8 fw-medium text-sm">Canceled</span> </td>
                                                </tr>
                                                <tr>
                                                    <td>Dental Cleanup</td>
                                                    <td>3.053 ETH</td>
                                                    <td>2h 5m 40s</td>
                                                    <td> <span class="bg-success-focus text-success-main px-10 py-4 radius-8 fw-medium text-sm">Completed</span> </td>
                                                </tr>
                                                <tr>
                                                    <td>Follow up Appointment </td>
                                                    <td>3.053 ETH</td>
                                                    <td>2h 5m 40s</td>
                                                    <td> <span class="bg-danger-focus text-danger-main px-10 py-4 radius-8 fw-medium text-sm">Canceled</span> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Latest Performance End -->
                    </div>
                </div>

                {{-- <div class="col-xxl-12"> --}}
                    <div class="flex justify-content-lg-center mb-24">
                        <div class=" px-28 col-md-8 col-md-8 col-md-12 ">
                            <div class="card h-100 radius-8 border-0">
                                <div class="card-header border-bottom d-flex align-items-center flex-wrap gap-2 justify-content-between">
                                    <h6 class="mb-2 fw-bold text-lg">Total Income</h6>
                                    <div class="">
                                        <select class="form-select form-select-sm w-auto bg-base border-0 text-secondary-light">
                                            <option>This Month</option>
                                            <option>This Week</option>
                                            <option>This Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body p-24">

                                    <div class="position-relative">
                                        <div id="statisticsDonutChart" class="mt-36 flex-grow-1 apexcharts-tooltip-z-none title-style circle-none"></div>
                                        <div class="text-center position-absolute top-50 start-50 translate-middle">
                                            <span class="text-secondary-light">Income</span>
                                            <h6 class="">$28,500</h6>
                                        </div>
                                    </div>

                                    <ul class="row gy-4 mt-3">
                                        <li class="col-6 d-flex flex-column align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="w-12-px h-8-px rounded-pill bg-warning-600"></span>
                                                <span class="text-secondary-light text-sm fw-normal">Net Income</span>
                                            </div>
                                            <h6 class="text-primary-light fw-bold mb-0">$50,000</h6>
                                        </li>
                                        <li class="col-6 d-flex flex-column align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="w-12-px h-8-px rounded-pill bg-success-600"></span>
                                                <span class="text-secondary-light text-sm fw-normal">Commission </span>
                                            </div>
                                            <h6 class="text-primary-light fw-bold mb-0">$20,000</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
