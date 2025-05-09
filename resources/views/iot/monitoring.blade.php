@extends('layout.layout')

@php
    $title = 'Monitoring Sensor IOT';
    $subTitle = 'Monitoring';
@endphp

@section('content')
<div class="col-12 mb-16">
  <div class="row gy-4">

    <!-- Rolling Roof -->
    <div class="col-lg-4 col-sm-4">
      <div class="card h-100 p-3 position-relative"
           style="background-color:#00D75C; border-radius:12px;">
        <div class="form-check form-switch position-absolute"
             style="top:16px; right:16px;">
          <input class="form-check-input custom-switch"
                 type="checkbox" id="switch-rolling-roof" checked>
        </div>
        <div class="d-flex align-items-center">
          <iconify-icon icon="bi:house-fill"
                         height="48"
                         class="text-white me-3"></iconify-icon>
          <p class="text-white fw-semibold fs-5 mb-0">
            Rolling Roof
          </p>
        </div>
      </div>
    </div>

    <!-- Water Pump (Siram) -->
    <div class="col-lg-4 col-sm-4">
      <div class="card h-100 p-3 position-relative"
           style="background-color:#00D75C; border-radius:12px;">
        <div class="form-check form-switch position-absolute"
             style="top:16px; right:16px;">
          <input class="form-check-input custom-switch"
                 type="checkbox" id="switch-pump-siram" checked>
        </div>
        <div class="d-flex align-items-center">
          <iconify-icon icon="mdi:water-pump"
                         height="48"
                         class="text-white me-3"></iconify-icon>
          <p class="text-white fw-semibold fs-5 mb-0">
            Water Pump (Siram)
          </p>
        </div>
      </div>
    </div>

    <!-- Water Pump (Nutrisi) -->
    <div class="col-lg-4 col-sm-4">
      <div class="card h-100 p-3 position-relative"
           style="background-color:#00D75C; border-radius:12px;">
        <div class="form-check form-switch position-absolute"
             style="top:16px; right:16px;">
          <input class="form-check-input custom-switch"
                 type="checkbox" id="switch-pump-nutrisi" checked>
        </div>
        <div class="d-flex align-items-center">
          <iconify-icon icon="mdi:water-pump"
                         height="48"
                         class="text-white me-3"></iconify-icon>
          <p class="text-white fw-semibold fs-5 mb-0">
            Water Pump (Nutrisi)
          </p>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- SENSOR UDARA -->
<div class="container-fluid p-0">
  <div class="card p-0 overflow-hidden position-relative radius-12 h-100">

    <div class="card-header pt-16 pb-14 px-24 bg-base
                border border-end-0 border-start-0 border-top-0
                d-flex align-items-center justify-content-between">
      <h6 class="text-lg mb-0">Sensor Udara</h6>
    </div>

    <div class="card-body p-24" style="display:flex; gap:8px; align-items:stretch;">

      <!-- Suhu Udara -->
      <div style="flex:1; padding-right:8px; box-sizing:border-box;">
        <div class="d-flex p-16 bg-primary-50 radius-8
                    border-start-width-3-px border-primary-500"
             style="height:100%; align-items:center; justify-content:flex-start; gap:16px;">
          <iconify-icon icon="solar:temperature-outline"
                         height="80"
                         style="color:#5CDB07"></iconify-icon>
          <div>
            <h6 class="text-primary-light fs-2 fw-light mb-8">
              Suhu Udara
            </h6>
            <h1 class="fs-1 mb-0 fw-bolder">30°C</h1>
          </div>
        </div>
      </div>

      <!-- 4 Sensor Kanan -->
      <div style="flex:1; padding-left:8px; box-sizing:border-box;">
        <div style="display:grid;
                    grid-template-columns:1fr 1fr;
                    grid-template-rows:auto auto;
                    gap:16px;">

          <!-- Kelembapan Udara -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="mdi:humidity-outline"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                Kelembapan Udara
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder">70%</h1>
            </div>
          </div>

          <!-- Nilai UV -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="mdi:uv-ray-outline"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                Nilai UV
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder">
                30<span class="fs-6">W/m²</span>
              </h1>
            </div>
          </div>

          <!-- Curah Hujan -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="mi:rain"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                Curah Hujan
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder">
                50<span class="fs-6">mm</span>
              </h1>
            </div>
          </div>

          <!-- Kualitas Udara -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="material-symbols:air-rounded"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                Kualitas Udara
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                <span>1000</span>
                <span style="writing-mode: vertical-rl;
                             text-orientation: upright;
                             font-size:0.75rem;">
                  PPM
                </span>
              </h1>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<!-- SENSOR AIR -->
<div class="container-fluid p-0">
  <div class="card p-0 my-16 overflow-hidden position-relative radius-12 h-100">

    <div class="card-header pt-16 pb-14 px-24 bg-base
                border border-end-0 border-start-0 border-top-0
                d-flex align-items-center justify-content-between">
      <h6 class="text-lg mb-0">Sensor Air</h6>
    </div>

    <div class="card-body p-24" style="display:flex; gap:8px; align-items:stretch;">

      <!-- Suhu Air -->
      <div style="flex:1; padding-right:8px; box-sizing:border-box;">
        <div class="d-flex p-16 bg-primary-50 radius-8
                    border-start-width-3-px border-primary-500"
             style="height:100%; align-items:center; gap:16px;">
          <iconify-icon icon="solar:temperature-outline"
                         height="80"
                         style="color:#5CDB07"></iconify-icon>
          <div>
            <h6 class="text-primary-light fs-2 fw-light mb-8">
              Suhu Air
            </h6>
            <h1 class="fs-1 mb-0 fw-bolder">25°C</h1>
          </div>
        </div>
      </div>

      <!-- pH + Volume + Kualitas -->
      <div style="flex:1; padding-left:8px; box-sizing:border-box;">
        <!-- pH Air -->
        <div class="d-flex p-16 bg-primary-50 radius-8
                    border-start-width-3-px border-primary-500 mb-16"
             style="align-items:center; gap:12px;">
          <iconify-icon icon="material-symbols-light:water-ph-outline"
                         height="60" style="color:#5CDB07"></iconify-icon>
          <div>
            <h6 class="text-primary-light text-md fw-light mb-4">pH Air</h6>
            <h1 class="fs-2 mb-0 fw-bolder">7</h1>
          </div>
        </div>
        <div style="display:grid;
                    grid-template-columns:1fr 1fr;
                    gap:16px;">
          <!-- Volume Air -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="mdi:water-percent"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">Volume Air</h6>
              <h1 class="fs-2 mb-0 fw-bolder">50%</h1>
            </div>
          </div>
          <!-- Kualitas Air -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="mdi:water-drop-outline"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">Kualitas Air</h6>
              <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                <span>500</span>
                <span style="writing-mode: vertical-rl;
                             text-orientation: upright;
                             font-size:0.75rem;">
                  PPM
                </span>
              </h1>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- SENSOR TANAH -->
<div class="container-fluid p-0">
  <div class="card p-0 overflow-hidden position-relative radius-12 h-100">

    <div class="card-header pt-16 pb-14 px-24 bg-base
                border border-end-0 border-start-0 border-top-0
                d-flex align-items-center justify-content-between">
      <h6 class="text-lg mb-0">Sensor Tanah</h6>
    </div>

    <div class="card-body p-24" style="display:flex; gap:8px; align-items:stretch;">

      <!-- Suhu Tanah -->
      <div style="flex:1; padding-right:8px; box-sizing:border-box;">
        <div class="d-flex p-16 bg-primary-50 radius-8
                    border-start-width-3-px border-primary-500"
             style="height:100%; align-items:center; gap:16px;">
          <iconify-icon icon="solar:temperature-outline"
                         height="80"
                         style="color:#5CDB07"></iconify-icon>
          <div>
            <h6 class="text-primary-light fs-2 fw-light mb-8">
              Suhu Tanah
            </h6>
            <h1 class="fs-1 mb-0 fw-bolder">32°C</h1>
          </div>
        </div>
      </div>

      <!-- 6 Sensor Kanan -->
      <div style="flex:1; padding-left:8px; box-sizing:border-box;">
        <div style="display:grid;
                    grid-template-columns:1fr 1fr;
                    grid-template-rows:auto auto;
                    gap:16px;">
          <!-- Kelembaban Tanah -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="bi:moisture"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                Kelembaban Tanah
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder">45%</h1>
            </div>
          </div>
          <!-- pH Tanah -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="mdi:chart-line"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                pH Tanah
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder">6.8</h1>
            </div>
          </div>
          <!-- Nitrogen Tanah -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="iconoir:nitrogen"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                Nitrogen Tanah
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                <span>1000</span>
                <span style="writing-mode: vertical-rl;
                             text-orientation:upright;
                             font-size:0.75rem;">
                  PPM
                </span>
              </h1>
            </div>
          </div>
          <!-- EC Tanah -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="iconoir:soil"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                EC Tanah
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder">
                1.4<span class="fs-6">dS/m</span>
              </h1>
            </div>
          </div>
          <!-- Fosfat Tanah -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="iconoir:soil-alt"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                Fosfat Tanah
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                <span>1000</span>
                <span style="writing-mode: vertical-rl;
                             text-orientation:upright;
                             font-size:0.75rem;">
                  PPM
                </span>
              </h1>
            </div>
          </div>
          <!-- Kalium Tanah -->
          <div class="d-flex p-16 bg-primary-50 radius-8
                      border-start-width-3-px border-primary-500"
               style="align-items:center; gap:12px;">
            <iconify-icon icon="iconoir:soil"
                           height="60"
                           style="color:#5CDB07"></iconify-icon>
            <div>
              <h6 class="text-primary-light text-md fw-light mb-4">
                Kalium Tanah
              </h6>
              <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                <span>300</span>
                <span style="writing-mode: vertical-rl;
                             text-orientation:upright;
                             font-size:0.75rem;">
                  PPM
                </span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
