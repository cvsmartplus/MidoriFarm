<div class="container-fluid">
  <div class="card p-0 overflow-hidden position-relative radius-12 h-100">
    <!-- HEADER & TABS -->
    <div class="card-header pt-16 pb-0 px-24 bg-base border border-end-0 border-start-0 border-top-0 d-flex align-items-center justify-content-between">
      <h6 class="text-lg mb-0">Pemantauan Perangkat IoT</h6>
      <ul class="nav bordered-tab nav-pills mb-0" id="sensor-iot-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link px-16 py-10 active" id="sensor-udara-tab" data-bs-toggle="pill"
                  data-bs-target="#sensor-udara" type="button" role="tab"
                  aria-controls="sensor-udara" aria-selected="true">
            Sensor Udara
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link px-16 py-10" id="sensor-air-tab" data-bs-toggle="pill"
                  data-bs-target="#sensor-air" type="button" role="tab"
                  aria-controls="sensor-air" aria-selected="false">
            Sensor Air
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link px-16 py-10" id="sensor-tanah-tab" data-bs-toggle="pill"
                  data-bs-target="#sensor-tanah" type="button" role="tab"
                  aria-controls="sensor-tanah" aria-selected="false">
            Sensor Tanah
          </button>
        </li>
      </ul>
    </div>

    <!-- BODY & TAB CONTENT -->
    <div class="card-body p-24">
      <div class="tab-content" id="sensor-iot-tabContent">

        <!-- SENSOR UDARA (Original Layout: 3‑per‑row wrap otomatis) -->
        <div class="tab-pane fade show active" id="sensor-udara" role="tabpanel" aria-labelledby="sensor-udara-tab">
          <div class="row gy-4 justify-content-evenly">
            <!-- 5 Cards -->
            <div class="col-lg-4 col-sm-6">
              <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
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
              <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
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
              <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
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
              <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
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
              <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                <div class="me-3 text-black">
                  <iconify-icon icon="material-symbols:air-rounded" height="73"></iconify-icon>
                </div>
                <div>
                  <h6 class="text-primary-light text-md mb-8">Kualitas Udara</h6>
                  <h1 class="fs-1 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                    <span>1000</span>
                    <span style="writing-mode: vertical-rl; text-orientation: upright; font-size:0.75rem;">PPM</span>
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SENSOR AIR (2×2 fixed‑width cards, bukan 50%) -->
        <div class="tab-pane fade" id="sensor-air" role="tabpanel" aria-labelledby="sensor-air-tab">
        <div class="row gy-4 justify-content-center">
            <!-- Row 1 -->
            <div class="col-lg-6 col-sm-12" style="min-width: 120px; max-width: 320px;">
            <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                <div class="me-3 text-black">
                <iconify-icon icon="solar:temperature-bold" height="73"></iconify-icon>
                </div>
                <div>
                <h6 class="text-primary-light text-md mb-8">Suhu Air</h6>
                <h1 class="fs-1 mb-0 fw-bolder">30°C</h1>
                </div>
            </div>
            </div>

            <div class="col-lg-6 col-sm-12" style="min-width: 120px; max-width: 320px;">
            <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                <div class="me-3 text-black">
                <iconify-icon icon="mdi:water-drop" height="73"></iconify-icon>
                </div>
                <div>
                <h6 class="text-primary-light text-md mb-8">Kualitas Air</h6>
                <h1 class="fs-1 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                    <span>1000</span>
                    <span style="writing-mode: vertical-rl; text-orientation: upright; font-size:0.75rem;">PPM</span>
                </h1>
                </div>
            </div>
            </div>

        </div>
          <!-- paksa break ke row kedua -->
          <div class="row mt-24 justify-content-center">
            <!-- Row 2 -->
            <div class="col-lg-6 col-sm-12" style="min-width: 120px; max-width: 320px;">
            <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                <div class="me-3 text-black">
                <iconify-icon icon="material-symbols-light:water-ph-outline" height="73"></iconify-icon>
                </div>
                <div>
                <h6 class="text-primary-light text-md mb-8">pH Air</h6>
                <h1 class="fs-1 mb-0 fw-bolder">7</h1>
                </div>
            </div>
            </div>

            <div class="col-lg-6 col-sm-12" style="min-width: 120px; max-width: 320px;">
            <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                <div class="me-3 text-black">
                <iconify-icon icon="mdi:water-percent" height="73"></iconify-icon>
                </div>
                <div>
                <h6 class="text-primary-light text-md mb-8">Nilai Air</h6>
                <h1 class="fs-1 mb-0 fw-bolder">45%</h1>
                </div>
            </div>
            </div>
          </div>
        </div>


        <!-- SENSOR TANAH (7 cards, grid 4‑columns) -->
        <div class="tab-pane fade" id="sensor-tanah" role="tabpanel" aria-labelledby="sensor-tanah-tab">
          <div class="row gy-4 justify-content-evenly">
            <!-- 7 Cards, masing‑masing col-lg-3 col-sm-6 -->
            <div class="col-lg-3 col-sm-6">
              <div class="d-flex p-16 bg-info-50 radius-8 border-start-width-3-px border-info">
                <div class="me-3 text-black">
                  <iconify-icon icon="mdi:water-percent" height="73"></iconify-icon>
                </div>
                <div>
                  <h6 class="text-primary-light text-md mb-8">Lembap Tanah</h6>
                  <h1 class="fs-1 mb-0 fw-bolder">45%</h1>
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
                  <h1 class="fs-1 mb-0 fw-bolder">6.8</h1>
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
                  <h1 class="fs-1 mb-0 fw-bolder">22°C</h1>
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
                  <h1 class="fs-1 mb-0 fw-bolder">15%</h1>
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
                  <h1 class="fs-1 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                    <span>10</span>
                    <span style="writing-mode: vertical-rl; text-orientation: upright; font-size:0.75rem;">PPM</span>
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
                <h1 class="fs-1 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                    <span>20</span>
                    <span style="writing-mode: vertical-rl; text-orientation: upright; font-size:0.75rem;">PPM</span>
                </h1>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /.tab-content -->
    </div><!-- /.card-body -->
  </div><!-- /.card -->
</div><!-- /.container-fluid -->
