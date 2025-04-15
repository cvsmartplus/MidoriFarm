@extends('layout.layout')
@php
    $title='Sensor IOT';
    $subTitle = 'Sensor IOT';
    $script = '';
@endphp

@section('content')
    <div class="row gy-4">
        <div class="col-12 mb-16">
            <div class="row gy-4 mb-8">
                <div class="col-lg-4 col-sm-4">
                    <div class="card px-24 py-16 shadow-none radius-12 border h-100 bg-gradient-start-3">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1">
                                <div class="d-flex align-items-center flex-wrap gap-16">
                                    <span class="mb-0 w-40-px h-40-px bg-primary-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                        <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-semibold text-xl">Total Green House</h6>
                                        <span class="fw-medium text-secondary-light text-xl">3</span>
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
                <div class="col-lg-4 col-sm-4">
                    <div class="card px-24 py-16 shadow-none radius-12 border h-100 bg-gradient-start-5">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1">
                                <div class="d-flex align-items-center flex-wrap gap-16">
                                    <span class="mb-0 w-40-px h-40-px bg-primary-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                        <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-semibold text-xl">Total Sensor</h6>
                                        <span class="fw-medium text-secondary-light text-lg">15</span>
                                        <p class="text-sm mb-0 d-flex align-items-center flex-wrap gap-12 mt-12">
                                            <span class="bg-danger-focus px-6 py-2 rounded-2 fw-medium text-danger-main text-sm d-flex align-items-center gap-8">
                                                +168.001%
                                                <i class="ri-arrow-down-line"></i>
                                            </span>This week</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="card px-24 py-16 shadow-none radius-12 border h-100 bg-gradient-start-2">
                        <div class="card-body p-0">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-1">
                                <div class="d-flex align-items-center flex-wrap gap-16">
                                    <span class="mb-0 w-40-px h-40-px bg-primary-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                                        <iconify-icon icon="flowbite:users-group-solid" class="icon"></iconify-icon>
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="fw-semibold text-xl">Total Notifikasi</h6>
                                        <span class="fw-medium text-secondary-light text-md">50</span>
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
            </div>
        </div>
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="card p-0 overflow-hidden position-relative radius-12 h-100">
                    <div class="col-xxl-12">
                        <div class="card-header pt-16 pb-0 px-24 bg-base border border-end-0 border-start-0 border-top-0 d-flex align-items-center flex-wrap justify-content-between">
                            <h6 class="text-lg mb-0">Pemantauan Perangkat IoT</h6>
                            <ul class="nav bordered-tab d-inline-flex nav-pills mb-0" id="pills-tab-six" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link px-16 py-10 active" id="pills-header-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-header-home" type="button" role="tab"
                                        aria-controls="pills-header-home" aria-selected="true">Sensor Udara</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link px-16 py-10" id="pills-header-details-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-header-details" type="button" role="tab"
                                        aria-controls="pills-header-details" aria-selected="false">Sensor Tanah</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link px-16 py-10" id="pills-header-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-header-profile" type="button" role="tab"
                                        aria-controls="pills-header-profile" aria-selected="false">Sensor Air</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-24">
                            <div class="tab-content" id="pills-tabContent-six">
                                <div class="tab-pane fade show active" id="pills-header-home" role="tabpanel"
                                    aria-labelledby="pills-header-home-tab" tabindex="0">
                                    <div class="row  justify-content-evenly  gy-4">
                                        <div class="col-lg-4 col-sm-6">
                                            <div
                                                class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                <div class="me-3 text-black">
                                                    <iconify-icon icon="solar:temperature-bold" height="73"></iconify-icon>
                                                </div>
                                                <div>
                                                <h6 class="text-primary-light text-md mb-8">Suhu Udara</h6>
                                                <h1 class="fs-1 mb-0 fw-bolder">30°C</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div
                                                class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                <div class="me-3 text-black">
                                                    <iconify-icon icon="mdi:humidity-outline" height="73"></iconify-icon>
                                                </div>
                                                <div>
                                                <h6 class="text-primary-light text-md mb-8">Kelembapan Udara</h6>
                                                <h1 class="fs-1 mb-0 fw-bolder">70%</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div
                                                class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                <div class="me-3 text-black">
                                                    <iconify-icon icon="mdi:uv-ray-outline" height="73"></iconify-icon>
                                                </div>
                                                <div>
                                                <h6 class="text-primary-light text-md mb-8">Nilai UV</h6>
                                                <h1 class="fs-1 mb-0 fw-bolder">30%</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div
                                                class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                <div class="me-3 text-black">
                                                    <iconify-icon icon="mi:rain" height="73"></iconify-icon>
                                                </div>
                                                <div>
                                                <h6 class="text-primary-light text-md mb-8">Curah Hujan</h6>
                                                <h1 class="fs-1 mb-0 fw-bolder">50%</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div
                                                class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                <div class="me-3 text-black">
                                                    <iconify-icon icon="material-symbols:air-rounded" height="73"></iconify-icon>
                                                </div>
                                                <div>
                                                <h6 class="text-primary-light text-md mb-8">Kualitas Udara</h6>
                                                <h1 class="fs-1 mb-0 fw-bolder">1000ppm</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card-body p-24">
                                <div class="tab-content" id="pills-tabContent-six">
                                    <div class="tab-pane fade show active" id="pills-header-home" role="tabpanel"
                                        aria-labelledby="pills-header-home-tab" tabindex="0">
                                        <div class="row  justify-content-evenly  gy-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <div
                                                    class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                    <div class="me-3 text-black">
                                                        <iconify-icon icon="solar:temperature-bold" height="73"></iconify-icon>
                                                    </div>
                                                    <div>
                                                    <h6 class="text-primary-light text-md mb-8">Suhu Udara</h6>
                                                    <h1 class="fs-1 mb-0 fw-bolder">30°C</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div
                                                    class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                    <div class="me-3 text-black">
                                                        <iconify-icon icon="mdi:humidity-outline" height="73"></iconify-icon>
                                                    </div>
                                                    <div>
                                                    <h6 class="text-primary-light text-md mb-8">Kelembapan Udara</h6>
                                                    <h1 class="fs-1 mb-0 fw-bolder">70%</h1>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div
                                                    class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                    <div class="me-3 text-black">
                                                        <iconify-icon icon="mdi:uv-ray-outline" height="73"></iconify-icon>
                                                    </div>
                                                    <div>
                                                    <h6 class="text-primary-light text-md mb-8">Nilai UV</h6>
                                                    <h1 class="fs-1 mb-0 fw-bolder">30%</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div
                                                    class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                    <div class="me-3 text-black">
                                                        <iconify-icon icon="mi:rain" height="73"></iconify-icon>
                                                    </div>
                                                    <div>
                                                    <h6 class="text-primary-light text-md mb-8">Curah Hujan</h6>
                                                    <h1 class="fs-1 mb-0 fw-bolder">50%</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div
                                                    class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info border-top-0 border-end-0 border-bottom-0">
                                                    <div class="me-3 text-black">
                                                        <iconify-icon icon="material-symbols:air-rounded" height="73"></iconify-icon>
                                                    </div>
                                                    <div>
                                                    <h6 class="text-primary-light text-md mb-8">Kualitas Udara</h6>
                                                    <h1 class="fs-1 mb-0 fw-bolder">1000ppm</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>        
        <div class="container-fluid gy-4">
            <div class="row gy-4">
                <div class="col-xxl-4 col-md-4">
                    <div class="card h-100">
                        <div class="card-header border-bottom d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="fw-bold text-lg mb-0">Notifikasi Terakhir</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                                <div class="col">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="text-md mb-0 fw-semibold">Suhu Air</h6>
                                        <h6 class="text-sm text-secondary">10 menit yang lalu</h6>
                                    </div>
                                    <span class="text-sm text-secondary-light fw-normal">Suhu Air Menurun</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                                <div class="col">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="text-md mb-0 fw-semibold">Kelembaban</h6>
                                        <h6 class="text-sm text-secondary">20 menit yang lalu</h6>
                                    </div>
                                    <span class="text-sm text-secondary-light fw-normal">Kelembaban Tanah Menurun</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                                <div class="col">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="text-md mb-0 fw-semibold">Cahaya</h6>
                                        <h6 class="text-sm text-secondary">30 menit yang lalu</h6>
                                    </div>
                                    <span class="text-sm text-secondary-light fw-normal">Intensitas Cahaya Menurun</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                                <div class="col">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h6 class="text-md mb-0 fw-semibold">Air</h6>
                                        <h6 class="text-sm text-secondary">40 menit yang lalu</h6>
                                    </div>
                                    <span class="text-sm text-secondary-light fw-normal">Kualitas Air Menurun</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xxl-4 col-md-4">
                    <div class="card h-100">
                        <div class="card-header border-bottom d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="fw-bold text-lg mb-0">Riwayat Data Sensor</h6>
                            <select class="form-select form-select-sm w-auto bg-base border-0 text-secondary-light">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                        </div>
                        <div class="card-body pt-24">
                            <div id="enrollmentChart" class="apexcharts-tooltip-style-1 yaxies-more"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-4">
                    <div class="card h-100">
                        <div class="card-header border-bottom d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="fw-bold text-lg mb-0">Lokasi Green House</h6>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d881.2124232847582!2d107.28624019522965!3d-6.2838345360442345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6982aca5fe0815%3A0xa7ea3fae1f54165b!2sSMK%20Negeri%201%20Karawang!5e0!3m2!1sid!2sid!4v1739171150060!5m2!1sid!2sid" width="100%" height="100%"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

<script>
    // ===================== Average Enrollment Rate Start =============================== 
    function createChartTwo(chartId, color1, color2) {
        var options = {
            series: [{
                name: "series2",
                data: [20000, 45000, 30000, 50000, 32000, 40000, 30000, 42000, 28000, 34000, 38000, 26000]
            }],
            legend: {
                show: false
            },
            chart: {
                type: "area",
                width: "100%",
                height: 240,
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
                curve: "straight",
                width: 3,
                colors: [color1], // Use two colors for the lines
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
                    bottom: 0,
                    left: 0
                },
            },
            fill: {
                type: "gradient",
                colors: [color1], // Use two colors for the gradient
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
                    opacityFrom: [0.4, 0.4], // Starting opacity for both colors
                    opacityTo: [0.1, 0.1], // Ending opacity for both colors
                    stops: [0, 100],
                },
            },
            markers: {
                colors: [color1], // Use two colors for the markers
                strokeWidth: 3,
                size: 0,
                hover: {
                    size: 10
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
                        fontSize: "12px"
                    }
                }
            },
            yaxis: {
                labels: {
                    // formatter: function (value) {
                    //     return "$" + value + "k";
                    // },
                    style: {
                        fontSize: "12px"
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

    createChartTwo("enrollmentChart", "#487FFF");
    // ===================== Average Enrollment Rate End =============================== 


    // ===================== Delete Table Item Start =============================== 
    $(".remove-btn").on("click", function() {
        $(this).closest("tr").addClass("d-none");
    });
    // ===================== Delete Table Item End =============================== 

    // ================================ Follow Btn Start ================================ 
    $(".follow-btn").on("click", function() {
        if ($(this).text() === "Follow") {
            $(this).text("Unfollow");
        } else {
            $(this).text("Follow");
        }
        $(this).toggleClass("bg-neutral-200 border-neutral-200 text-neutral-900");
    });
    // ================================ Follow Btn End ================================ 
    </script>
@endpush