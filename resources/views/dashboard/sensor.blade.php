@extends('layout.layout')
@php
    $title='Dashboard';
    $subTitle = 'NFT & Gaming';
    $script = '<script>
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


                // ================================ Area chart Start ================================ 
                function createChart(chartId, chartColor) {

                    let currentYear = new Date().getFullYear();

                    var options = {
                        series: [{
                            name: "series1",
                            data: [0, 10, 8, 25, 15, 26, 13, 35, 15, 39, 16, 46, 42],
                        }, ],
                        chart: {
                            type: "area",
                            width: 164,
                            height: 72,

                            sparkline: {
                                enabled: true // Remove whitespace
                            },

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
                            width: 2,
                            colors: [chartColor],
                            lineCap: "round"
                        },
                        grid: {
                            show: true,
                            borderColor: "transparent",
                            strokeDashArray: 0,
                            position: "back",
                            xaxis: {
                                lines: {
                                    show: false
                                }
                            },
                            yaxis: {
                                lines: {
                                    show: false
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
                                top: -3,
                                right: 0,
                                bottom: 0,
                                left: 0
                            },
                        },
                        fill: {
                            type: "gradient",
                            colors: [chartColor], // Set the starting color (top color) here
                            gradient: {
                                shade: "light", // Gradient shading type
                                type: "vertical", // Gradient direction (vertical)
                                shadeIntensity: 0.5, // Intensity of the gradient shading
                                gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                                inverseColors: false, // Do not invert colors
                                opacityFrom: .8, // Starting opacity
                                opacityTo: 0.3, // Ending opacity
                                stops: [0, 100],
                            },
                        },
                        // Customize the circle marker color on hover
                        markers: {
                            colors: [chartColor],
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
                            categories: [`Jan ${currentYear}`, `Feb ${currentYear}`, `Mar ${currentYear}`, `Apr ${currentYear}`, `May ${currentYear}`, `Jun ${currentYear}`, `Jul ${currentYear}`, `Aug ${currentYear}`, `Sep ${currentYear}`, `Oct ${currentYear}`, `Nov ${currentYear}`, `Dec ${currentYear}`],
                            tooltip: {
                                enabled: false,
                            },
                        },
                        yaxis: {
                            labels: {
                                show: false
                            }
                        },
                        tooltip: {
                            x: {
                                format: "dd/MM/yy HH:mm"
                            },
                        },
                    };

                    var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
                    chart.render();
                }

                // Call the function for each chart with the desired ID and color
                createChart("areaChart", "#FF9F29");
                // ================================ Area chart End ================================ 


                // ================================ Bar chart Start ================================ 
                var options = {
                    series: [{
                        name: "Sales",
                        data: [{
                            x: "Mon",
                            y: 20,
                        }, {
                            x: "Tue",
                            y: 40,
                        }, {
                            x: "Wed",
                            y: 20,
                        }, {
                            x: "Thur",
                            y: 30,
                        }, {
                            x: "Fri",
                            y: 40,
                        }, {
                            x: "Sat",
                            y: 35,
                        }]
                    }],
                    chart: {
                        type: "bar",
                        width: 164,
                        height: 80,
                        sparkline: {
                            enabled: true // Remove whitespace
                        },
                        toolbar: {
                            show: false
                        }
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 6,
                            horizontal: false,
                            columnWidth: 14,
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    states: {
                        hover: {
                            filter: {
                                type: "none"
                            }
                        }
                    },
                    fill: {
                        type: "gradient",
                        colors: ["#E3E6E9"], // Set the starting color (top color) here
                        gradient: {
                            shade: "light", // Gradient shading type
                            type: "vertical", // Gradient direction (vertical)
                            shadeIntensity: 0.5, // Intensity of the gradient shading
                            gradientToColors: ["#E3E6E9"], // Bottom gradient color (with transparency)
                            inverseColors: false, // Do not invert colors
                            opacityFrom: 1, // Starting opacity
                            opacityTo: 1, // Ending opacity
                            stops: [0, 100],
                        },
                    },
                    grid: {
                        show: false,
                        borderColor: "#D1D5DB",
                        strokeDashArray: 1, // Use a number for dashed style
                        position: "back",
                    },
                    xaxis: {
                        labels: {
                            show: false // Hide y-axis labels
                        },
                        type: "category",
                        categories: ["Mon", "Tue", "Wed", "Thur", "Fri", "Sat"]
                    },
                    yaxis: {
                        labels: {
                            show: false,
                            formatter: function(value) {
                                return (value / 1000).toFixed(0) + "k";
                            }
                        }
                    },
                    tooltip: {
                        y: {
                            formatter: function(value) {
                                return value / 1000 + "k";
                            }
                        }
                    }
                };

                var chart = new ApexCharts(document.querySelector("#dailyIconBarChart"), options);
                chart.render();
                // ================================ Bar chart End ================================ 


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
                </script>';
@endphp

@section('content')
    <div class="row gy-4">
        <div class="col-12 mb-16">
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
                                            </span>This week</span>
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
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col-xxl-8 col-md-6">
                    <div class="card h-100">
                        <div class="card-header border-bottom d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="fw-bold text-lg mb-0">ETH Price</h6>
                            <select class="form-select form-select-sm w-auto bg-base border text-secondary-light rounded-pill">
                                <option>November </option>
                                <option>December</option>
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                            </select>
                        </div>
                        <div class="card-body">
                            <div id="enrollmentChart" class="apexcharts-tooltip-style-1 yaxies-more"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header border-bottom d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="fw-bold text-lg mb-0">Statistics</h6>
                            <a  href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-1 justify-content-between mb-44">
                                <div>
                                    <h5 class="fw-semibold mb-12">145</h5>
                                    <span class="text-secondary-light fw-normal text-xl">Total Art Sold</span>
                                </div>
                                <div id="dailyIconBarChart"></div>
                            </div>
                            <div class="d-flex align-items-center gap-1 justify-content-between">
                                <div>
                                    <h5 class="fw-semibold mb-12">750 ETH</h5>
                                    <span class="text-secondary-light fw-normal text-xl">Total Earnings</span>
                                </div>
                                <div id="areaChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid gy-4">
            <div class="row gy-4">
                <div class="col-xxl-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-header border-bottom d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="fw-bold text-lg mb-0">Featured Creators</h6>
                            <a  href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between gap-8 flex-wrap">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-12 w-40-px h-40-px rounded-circle me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-semibold">Theresa Webb</h6>
                                        <span class="text-sm text-secondary-light fw-normal">Owned by ABC</span>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-outline-primary-600 px-24 rounded-pill">Follow</button>
                            </div>
                            <div class="mt-24">
                                <div class="row gy-3">
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="nft-card bg-base radius-16 overflow-hidden shadow-4">
                                            <div class="radius-16 overflow-hidden">
                                                <img src="{{ asset('assets/images/nft/featured-creator1.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                                            </div>
                                            <div class="p-12">
                                                <h6 class="text-md fw-bold text-primary-light mb-12">New Figures</h6>
                                                <div class="d-flex align-items-center gap-8">
                                                    <img src="{{ asset('assets/images/nft/bitcoin.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                                    <span class="text-sm text-secondary-light fw-medium">0.10 BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="nft-card bg-base radius-16 overflow-hidden shadow-4">
                                            <div class="radius-16 overflow-hidden">
                                                <img src="{{ asset('assets/images/nft/featured-creator2.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                                            </div>
                                            <div class="p-12">
                                                <h6 class="text-md fw-bold text-primary-light mb-12">Abstrac Girl</h6>
                                                <div class="d-flex align-items-center gap-8">
                                                    <img src="{{ asset('assets/images/nft/bitcoin.png') }}" class="w-28-px h-28-px rounded-circle object-fit-cover" alt="">
                                                    <span class="text-sm text-secondary-light fw-medium">0.10 BTC</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-md-6">
                    <div class="card h-100">
                        <div class="card-header border-bottom d-flex align-items-center flex-wrap gap-2 justify-content-between">
                            <h6 class="fw-bold text-lg mb-0">Featured Creators</h6>
                            <a  href="javascript:void(0)" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                                View All
                                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                            </a>
                        </div>
                        <div class="card-body pt-24">
                            <div class="d-flex align-items-center justify-content-between gap-8 flex-wrap mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/nft/creator-img1.png') }}" alt="" class="flex-shrink-0 me-12 w-40-px h-40-px rounded-circle me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-semibold">Theresa Webb</h6>
                                        <span class="text-sm text-secondary-light fw-normal">@wishon</span>
                                    </div>
                                </div>
                                <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-24 rounded-pill follow-btn transition-2">Follow</button>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-8 flex-wrap mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/nft/creator-img2.png') }}" alt="" class="flex-shrink-0 me-12 w-40-px h-40-px rounded-circle me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-semibold">Arlene McCoy</h6>
                                        <span class="text-sm text-secondary-light fw-normal">@nemccoy</span>
                                    </div>
                                </div>
                                <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-24 rounded-pill follow-btn transition-2">Follow</button>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-8 flex-wrap mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/nft/creator-img3.png') }}" alt="" class="flex-shrink-0 me-12 w-40-px h-40-px rounded-circle me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-semibold">Kathryn Murphy</h6>
                                        <span class="text-sm text-secondary-light fw-normal">@kathrynmur</span>
                                    </div>
                                </div>
                                <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-24 rounded-pill follow-btn transition-2">Follow</button>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-8 flex-wrap mb-32">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/nft/creator-img4.png') }}" alt="" class="flex-shrink-0 me-12 w-40-px h-40-px rounded-circle me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-semibold">Marvin McKinney</h6>
                                        <span class="text-sm text-secondary-light fw-normal">@marvinckin</span>
                                    </div>
                                </div>
                                <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-24 rounded-pill follow-btn transition-2">Follow</button>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-8 flex-wrap mb-0">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/nft/creator-img5.png') }}" alt="" class="flex-shrink-0 me-12 w-40-px h-40-px rounded-circle me-12">
                                    <div class="flex-grow-1">
                                        <h6 class="text-md mb-0 fw-semibold">Dianne Russell</h6>
                                        <span class="text-sm text-secondary-light fw-normal">@dinne_r</span>
                                    </div>
                                </div>
                                <button type="button" class="btn bg-primary-600 border-primary-600 text-white px-24 rounded-pill follow-btn transition-2">Follow</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection