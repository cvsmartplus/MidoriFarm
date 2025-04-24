@extends('layout.layout')
@php
    $title = 'Monitoring Sensor IOT';
    $subTitle = 'Monitoring';
@endphp

@section('content')
    <div class="container-fluid p-0">
        <div class="card p-0 overflow-hidden position-relative radius-12 h-100">
            <!-- HEADER & TABS -->
            <div class="card-header pt-16 pb-14 px-24 bg-base border border-end-0 border-start-0 border-top-0
                                            d-flex align-items-center justify-content-between">
                <h6 class="text-lg mb-0">Sensor Udara</h6>
            </div>

            <!-- SENSOR UDARA (BENTO LAYOUT RESPONSIVE HEIGHT) -->
            <div class="card-body p-24" style="display: flex; gap: 8px; align-items: stretch;">

                <!-- LEFT: Suhu Udara (stretch sesuai total tinggi kanan) -->
                <div style="flex: 1; padding-right: 8px; box-sizing: border-box;">
                    <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="
                                            height: 100%;
                                            align-items: center;
                                            justify-content: flex-start;
                                            gap: 16px;
                                            ">
                        <iconify-icon icon="solar:temperature-outline" height="80" style="color: #5CDB07"></iconify-icon>
                        <div>
                            <h6 class="text-primary-light fs-2 fw-light mb-8">Suhu Udara</h6>
                            <h1 class="fs-1 mb-0 fw-bolder">30°C</h1>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: 4 sensor (grid-auto-rows: auto supaya tinggi mengikuti konten) -->
                <div style="flex: 1; padding-left: 8px; box-sizing: border-box;">
                    <div style="
                                            display: grid;
                                            grid-template-columns: 1fr 1fr;
                                            grid-template-rows: auto auto;  /* <--- auto rows */
                                            gap: 16px;
                                            ">
                        <!-- Kelembapan Udara -->
                        <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500"
                            style="align-items: center; gap: 12px;">
                            <iconify-icon icon="mdi:humidity-outline" height="60" style="color: #5CDB07"></iconify-icon>
                            <div>
                                <h6 class="text-primary-light text-md fw-light mb-4">Kelembapan Udara</h6>
                                <h1 class="fs-2 mb-0 fw-bolder">70%</h1>
                            </div>
                        </div>

                        <!-- Nilai UV -->
                        <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500"
                            style="align-items: center; gap: 12px;">
                            <iconify-icon icon="mdi:uv-ray-outline" height="60" style="color: #5CDB07"></iconify-icon>
                            <div>
                                <h6 class="text-primary-light text-md fw-light mb-4">Nilai UV</h6>
                                <h1 class="fs-2 mb-0 fw-bolder">30%</h1>
                            </div>
                        </div>

                        <!-- Curah Hujan -->
                        <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500"
                            style="align-items: center; gap: 12px;">
                            <iconify-icon icon="mi:rain" height="60" style="color: #5CDB07"></iconify-icon>
                            <div>
                                <h6 class="text-primary-light text-md fw-light mb-4">Curah Hujan</h6>
                                <h1 class="fs-2 mb-0 fw-bolder">50%</h1>
                            </div>
                        </div>

                        <!-- Kualitas Udara -->
                        <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500"
                            style="align-items: center; gap: 12px;">
                            <iconify-icon icon="material-symbols:air-rounded" height="60"
                                style="color: #5CDB07"></iconify-icon>
                            <div>
                                <h6 class="text-primary-light text-md fw-light mb-4">Kualitas Udara</h6>
                                <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                                    <span>1000</span>
                                    <span style="
                                                writing-mode: vertical-rl;
                                                text-orientation: upright;
                                                font-size:0.75rem;
                                                ">PPM</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div><!-- /.container-fluid -->


    <div class="container-fluid p-0">
        <div class="card p-0 my-16 overflow-hidden position-relative radius-12 h-100">
            <!-- HEADER & TABS -->
            <div
                class="card-header pt-16 pb-14 px-24 bg-base border border-end-0 border-start-0 border-top-0 d-flex align-items-center justify-content-between">
                <h6 class="text-lg mb-0">Sensor Air</h6>
            </div>

            <!-- SENSOR AIR (BENTO LAYOUT RESPONSIVE HEIGHT) -->
            <div class="card-body p-24" style="display: flex; gap: 8px; align-items: stretch;">

                <!-- LEFT: Suhu AIR (stretch sesuai total tinggi kanan) -->
                <div style="flex: 1; padding-right: 8px; box-sizing: border-box;">
                    <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="
                                    height: 100%;
                                    align-items: center;
                                    justify-content: flex-start;
                                    gap: 16px;
                                    ">
                        <iconify-icon icon="solar:temperature-outline" height="80"
                            style="color: #5CDB07"></iconify-icon>
                        <div>
                            <h6 class="text-primary-light fs-2 fw-light mb-8">Suhu Air</h6>
                            <h1 class="fs-1 mb-0 fw-bolder">25°C</h1>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: 4 sensor (grid-auto-rows: auto supaya tinggi mengikuti konten) -->
                <div style="flex: 1; padding-left: 8px; box-sizing: border-box;">
                    <div style="
                                    display: block;
                                    grid-template-columns: 1fr 1fr;
                                    grid-template-rows: auto auto;  /* <--- auto rows */
                                    gap: 16px;
                                    ">
                        <!-- pH Air -->
                        <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500"
                            style="align-items: center; gap: 12px;">
                            <iconify-icon icon="material-symbols-light:water-ph-outline" height="60" style="color: #5CDB07"></iconify-icon>
                            <div>
                                <h6 class="text-primary-light text-md fw-light mb-4">pH Air</h6>
                                <h1 class="fs-2 mb-0 fw-bolder">7</h1>
                            </div>
                        </div>
                    </div>

                    <div class="mt-16" style="flex: 1; box-sizing: border-box;">
                        <div style="
                                    display: grid;
                                    grid-template-columns: 1fr 1fr;
                                    grid-template-rows: auto auto;  /* <--- auto rows */
                                    /* gap: 16px; */
                                    ">
                            <!-- Volume Air -->
                            <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500"
                                style="
                                        align-items: center;
                                        /* gap: 12px; */
                                        margin-right: 16px;
                                        ">
                                <iconify-icon icon="mdi:water-percent" height="60" style="color: #5CDB07"></iconify-icon>
                                <div>
                                    <h6 class="text-primary-light text-md fw-light mb-4">Volume Air</h6>
                                    <h1 class="fs-2 mb-0 fw-bolder">50%</h1>
                                </div>
                            </div>

                            <!-- Kualitas Air -->
                            <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500"
                                style="
                                        align-items:
                                        center;
                                        gap: 12px; 
                                        ">
                                <iconify-icon icon="mdi:water-drop-outline" height="60"
                                    style="color: #5CDB07"></iconify-icon>
                                <div>
                                    <h6 class="text-primary-light text-md fw-light mb-4">Kualitas Air</h6>
                                    <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                                        <span>500</span>
                                        <span style="
                                            writing-mode: vertical-rl;
                                            text-orientation: upright;
                                            font-size:0.75rem;
                                            ">PPM</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.container-fluid -->


    <div class="container-fluid p-0">
        <div class="card p-0 overflow-hidden position-relative radius-12 h-100">
            <!-- HEADER & TABS -->
            <div class="card-header pt-16 pb-14 px-24 bg-base border border-end-0 border-start-0 border-top-0
                                            d-flex align-items-center justify-content-between">
                <h6 class="text-lg mb-0">Sensor Udara</h6>
            </div>

            <!-- SENSOR TANAH (7 cards, grid 4‑columns) -->
            <div class="card-body p-24" style="display: flex; gap: 8px; align-items: stretch;">
            <div class="row gy-4 justify-content-evenly">
                <!-- 7 Cards, masing‑masing col-lg-3 col-sm-6 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                        <div class="me-3 text-black">
                            <iconify-icon icon="mdi:water-percent" height="73"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-primary-light text-md mb-8">Lembap Tanah</h6>
                            <h1 class="fs-2 mb-0 fw-bolder">45%</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                        <div class="me-3 text-black">
                            <iconify-icon icon="mdi:chart-line" height="73"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-primary-light text-md mb-8">pH Tanah</h6>
                            <h1 class="fs-2 mb-0 fw-bolder">6.8</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                        <div class="me-3 text-black">
                            <iconify-icon icon="mdi:thermometer" height="73"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-primary-light text-md mb-8">Suhu Tanah</h6>
                            <h1 class="fs-2 mb-0 fw-bolder">22°C</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                        <div class="me-3 text-black">
                            <iconify-icon icon="mdi:leaf" height="73"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-primary-light text-md mb-8">Kadar Nutrien</h6>
                            <h1 class="fs-2 mb-0 fw-bolder">Medium</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                        <div class="me-3 text-black">
                            <iconify-icon icon="mdi:chemical-weapon" height="73"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-primary-light text-md mb-8">Kadar Nitrogen</h6>
                            <h1 class="fs-2 mb-0 fw-bolder">15%</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                        <div class="me-3 text-black">
                            <iconify-icon icon="mdi:flask" height="73"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-primary-light text-md mb-8">Kadar Fosfor</h6>
                            <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                                <span>10</span>
                                <span
                                    style="writing-mode: vertical-rl; text-orientation: upright; font-size:0.75rem;">PPM</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                        <div class="me-3 text-black">
                            <iconify-icon icon="mdi:pot" height="73"></iconify-icon>
                        </div>
                        <div>
                            <h6 class="text-primary-light text-md mb-8">Kadar Kalium</h6>
                            <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                                <span>20</span>
                                <span
                                    style="writing-mode: vertical-rl; text-orientation: upright; font-size:0.75rem;">PPM</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
                </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.container-fluid -->

</div><!-- biar footer ga masuk card -->

@endsection