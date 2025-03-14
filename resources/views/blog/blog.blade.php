@extends("layout.layout")
@php
    $title="Artikel";
    $subTitle = "Artikel";
    $script = '
        <script>
            var options = {
        series: [{
            name: "Bumi",
            data: [20000, 16000, 14000, 25000, 45000, 18000, 28000, 11000, 26000, 48000, 18000, 22000]
        },{
            name: "Teknologi",
            data: [15000, 18000, 19000, 20000, 35000, 20000, 18000, 13000, 18000, 38000, 14000, 16000]
        },{
            name: "Finansial",
            data: [10000, 12000, 13000, 15000, 25000, 12000, 15000, 8000, 15000, 28000, 10000, 12000]
        }],
        colors: ["#6EDB40", "#1AB6FF", "#F3F62C"],
        labels: ["Total"],
        legend: {
            show: true 
        },
        chart: {
            type: "bar",
            height: 264,
            toolbar: {
            show: true
            },
        },
        grid: {
            show: true,
            borderColor: "#D1D5DB",
            strokeDashArray: 0, // Use a number for dashed style
            position: "front",
        },
        plotOptions: {
            bar: {
                borderRadius: 4,
                columnWidth: 10,
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ["transparent"]
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        },
        yaxis: {
            categories: ["0", "5000", "10,000", "20,000", "30,000", "50,000", "60,000", "60,000", "70,000", "80,000", "90,000", "100,000"],
        },
        yaxis: {
          labels: {
                formatter: function (value) {
                    return (value / 1000).toFixed(0) + "k";
                }
            }
        },
        tooltip: {
            y: {
                formatter: function (value) {
                    return value / 1000 + "k";
                }
            }
        },
        fill: {
            opacity: 1,
            width: 18,
        },
    };

    var chart = new ApexCharts(document.querySelector("#columnChart"), options);
    chart.render();
    
    var options = {
    series: [50, 50],
    chart: {
        type: "donut",
        
    },
    labels: ["Diterbitkan", "Diarsipkan"],
    colors: ["#16a34a", "#dc2626"],
    dataLabels: {
        enabled: true
    },
    legend: {
        position: "bottom",
        show: true
    }
};

var chart = new ApexCharts(document.querySelector("#donutChart"), options);
chart.render();



    var options = {
    series: [{
        data: [25, 18, 22, 17, 20, 18, 16] // Data jumlah tag artikel
    }],
    chart: {
        type: "bar",
        height: "100%", 
        width: "100%",
    },
    plotOptions: {
        bar: {
            horizontal: true,
            borderRadius: 15,
            distributed: true // Setiap batang memiliki warna berbeda
        }
    },
    colors: [
        "#487FFF", // IoT
        "#2AE020", // Pertanian
        "#1AB6FF", // Teknologi
        "#F3F62C", // Finansial
        "#25CB1C", // Agrikultur
        "#04FF00", // Tumbuhan
        "#6EDB40"  // Bumi
    ],
    dataLabels: {
        enabled: false
    },
    xaxis: {
        categories: ["IOT", "Pertanian", "Teknologi", "Finansial", "Agrikultur", "Tumbuhan", "Bumi"]
    },
    tooltip: {
    custom: function({ series, seriesIndex, dataPointIndex, w }) {
        let category = w.globals.labels[dataPointIndex]; // Ambil nama kategori
        let value = series[seriesIndex][dataPointIndex]; // Ambil nilai

        return `<div class="apexcharts-tooltip-custom" 
                    style="background: white; padding: 8px; border-radius: 5px; box-shadow: 0 2px 6px rgba(0,0,0,0.15);">
                    <strong>${category}</strong>: ${value}
                </div>`;
    }
}
};

var chart = new ApexCharts(document.querySelector("#lineChart"), options);
chart.render();

    </script>';
@endphp

@section("content")

<div class="row gy-4">
    <div class="col-md-4">
        <div class="card h-100">
            <div class="d-flex card-header border-bottom bg-base py-16 px-24 justify-content-between align-items-center">
                <h6 class="text-lg fw-bold mb-0">Overall Report</h6>
                <select class="form-select form-select-sm w-auto bg-base border-0 text-secondary-light">
                    <option>Yearly</option>
                    <option>Monthly</option>
                    <option>Weekly</option>
                    <option>Today</option>
                </select>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <div id="donutChart" class="" style="display: flex; justify-content: center; align-items: center;"></div>
            </div>
        </div>
    </div>    
    <div class="col-md-4">
        <div class="card h-100">
            <div class="d-flex card-header border-bottom bg-base justify-content-between align-items-center">
                <h6 class="text-lg fw-bold mb-0">Tag Artikel Terpopuler</h6>
                <select class="form-select form-select-sm w-auto bg-base border-0 text-secondary-light">
                    <option>Yearly</option>
                    <option>Monthly</option>
                    <option>Weekly</option>
                    <option>Today</option>
                </select>
            </div>
            <div class="card-body p-3">
                <div id="lineChart" class="w-100" style="height: 100%; min-height: 250px;"></div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 col-md-4">
        <div class="card h-100">
            <div class="card-header border-0 d-flex align-items-center flex-wrap gap-2 justify-content-between">
                <h6 class="text-lg fw-bold mb-0">Notifikasi Terakhir</h6>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                    <div class="col">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-md mb-0 fw-semibold">Sri Wahyuni</h6>
                            <h6 class="text-sm text-secondary">10 menit yang lalu</h6>
                        </div>
                        <span class="text-sm text-secondary-light fw-normal">Bagus sekali Artikel nya Inspira...</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                    <div class="col">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-md mb-0 fw-semibold">Amran Sulaiman</h6>
                            <h6 class="text-sm text-secondary">20 menit yang lalu</h6>
                        </div>
                        <span class="text-sm text-secondary-light fw-normal">Boleh nih idenya... sangat krea...</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                    <div class="col">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-md mb-0 fw-semibold">Agus Susanto</h6>
                            <h6 class="text-sm text-secondary">30 menit yang lalu</h6>
                        </div>
                        <span class="text-sm text-secondary-light fw-normal">iya juga ya... kenapa tidak kepi...</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                    <div class="col">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-md mb-0 fw-semibold">Nining Waningsih</h6>
                            <h6 class="text-sm text-secondary">40 menit yang lalu</h6>
                        </div>
                        <span class="text-sm text-secondary-light fw-normal">untuk bagian ini sepertinya keli...</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                    <div class="col">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-md mb-0 fw-semibold">Meutya Hafid</h6>
                            <h6 class="text-sm text-secondary">40 menit yang lalu</h6>
                        </div>
                        <span class="text-sm text-secondary-light fw-normal">Betul sekali, IoT dibutuhkan un...</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/images/nft/nft-items-img1.png') }}" alt="" class="flex-shrink-0 me-3 w-40-px h-40-px rounded-circle">
                    <div class="col">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-md mb-0 fw-semibold">Meutya Hafid</h6>
                            <h6 class="text-sm text-secondary">40 menit yang lalu</h6>
                        </div>
                        <span class="text-sm text-secondary-light fw-normal">Betul sekali, IoT dibutuhkan un...</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="col-12">
        <div class="card h-100">
            <div class="d-flex card-header border-bottom bg-base py-16 px-24 justify-content-between align-items-center">
                <h6 class="text-lg fw-bold mb-0">Jumlah Artikel</h6>
                <select class="form-select form-select-sm w-auto bg-base text-secondary-light border-0">
                    <option>Tahun</option>
                    <option>Bulan</option>
                    <option>Minggu</option>
                </select>
            </div>
            <div class="card-body p-24">
                <div id="columnChart" class=""></div>
            </div>
        </div>
    </div>
</div>
@endsection