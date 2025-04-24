    {{-- <div class="card-header pt-16 pb-0 px-24 bg-base border border-end-0 border-start-0 border-top-0 d-flex align-items-center justify-content-between">
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
    </div> --}}
<div class="container-fluid">
  <div class="card p-0 overflow-hidden position-relative radius-12 h-100">
    
    <!-- HEADER & TABS -->
    <div class="card-header pt-8 pb-0 px-24 bg-base border border-end-0 border-start-0 border-top-0 d-flex align-items-center justify-content-between">
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

        <!-- SENSOR UDARA -->
        <div class="tab-pane fade show active" id="sensor-udara" role="tabpanel" aria-labelledby="sensor-udara-tab">
          <div style="display: flex; gap: 8px; align-items: stretch;">
            
            <!-- LEFT: Suhu Udara -->
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
            
            <!-- RIGHT: 4 sensor -->
            <div style="flex: 1; padding-left: 8px; box-sizing: border-box;">
              <div style="
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-template-rows: auto auto;
                    gap: 16px;
                  ">
                
                <!-- Kelembapan Udara -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mdi:humidity-outline" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">Kelembapan Udara</h6>
                    <h1 class="fs-2 mb-0 fw-bolder">70%</h1>
                  </div>
                </div>
                
                <!-- Nilai UV -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mdi:uv-ray-outline" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">Nilai UV</h6>
                    <h1 class="fs-2 mb-0 fw-bolder">30%</h1>
                  </div>
                </div>
                
                <!-- Curah Hujan -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mi:rain" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">Curah Hujan</h6>
                    <h1 class="fs-2 mb-0 fw-bolder">50%</h1>
                  </div>
                </div>
                
                <!-- Kualitas Udara -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="material-symbols:air-rounded" height="60" style="color: #5CDB07"></iconify-icon>
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
            </div>

          </div>
        </div>

        <!-- SENSOR AIR -->
        <div class="tab-pane fade" id="sensor-air" role="tabpanel" aria-labelledby="sensor-air-tab">
          <div style="display: flex; gap: 8px; align-items: stretch;">
            
            <!-- LEFT: Suhu Air -->
            <div style="flex: 1; padding-right: 8px; box-sizing: border-box;">
              <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="
                    height: 100%;
                    align-items: center;
                    justify-content: flex-start;
                    gap: 16px;
                  ">
                <iconify-icon icon="solar:temperature-outline" height="80" style="color: #5CDB07"></iconify-icon>
                <div>
                  <h6 class="text-primary-light fs-2 fw-light mb-8">Suhu Air</h6>
                  <h1 class="fs-1 mb-0 fw-bolder">25°C</h1>
                </div>
              </div>
            </div>
            
            <!-- RIGHT: pH + Volume + Kualitas -->
            <div style="flex: 1; padding-left: 8px; box-sizing: border-box;">
              
              <!-- pH Air -->
              <div style="
                    display: block;
                    grid-template-columns: 1fr 1fr;
                    grid-template-rows: auto auto;
                    gap: 16px;
                  ">
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
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
                      grid-template-rows: auto auto;
                    ">
                  
                  <!-- Volume Air -->
                  <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; margin-right: 16px;">
                    <iconify-icon icon="mdi:water-percent" height="60" style="color: #5CDB07"></iconify-icon>
                    <div>
                      <h6 class="text-primary-light text-md fw-light mb-4">Volume Air</h6>
                      <h1 class="fs-2 mb-0 fw-bolder">50%</h1>
                    </div>
                  </div>
                  
                  <!-- Kualitas Air -->
                  <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                    <iconify-icon icon="mdi:water-drop-outline" height="60" style="color: #5CDB07"></iconify-icon>
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

            </div>
            
          </div>
        </div>

        <!-- SENSOR TANAH -->
        <div class="tab-pane fade" id="sensor-tanah" role="tabpanel" aria-labelledby="sensor-tanah-tab">
          <div style="display: flex; gap: 8px; align-items: stretch;">
            
            <!-- LEFT: Suhu Tanah -->
            <div style="flex: 1; padding-right: 8px; box-sizing: border-box;">
              <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="
                    height: 100%;
                    align-items: center;
                    justify-content: flex-start;
                    gap: 16px;
                  ">
                <iconify-icon icon="solar:temperature-outline" height="80" style="color: #5CDB07"></iconify-icon>
                <div>
                  <h6 class="text-primary-light fs-2 fw-light mb-8">Suhu Tanah</h6>
                  <h1 class="fs-1 mb-0 fw-bolder">32°C</h1>
                </div>
              </div>
            </div>
            
            <!-- RIGHT: 6 sensor -->
            <div style="flex: 1; padding-left: 8px; box-sizing: border-box;">
              <div style="
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-template-rows: auto auto;
                    gap: 16px;
                  ">
                
                <!-- Kelembapan Tanah -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mdi:water-percent" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">Kelembapan Tanah</h6>
                    <h1 class="fs-2 mb-0 fw-bolder">45%</h1>
                  </div>
                </div>
                
                <!-- pH Tanah -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mdi:chart-line" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">pH Tanah</h6>
                    <h1 class="fs-2 mb-0 fw-bolder">6.8</h1>
                  </div>
                </div>
                
                <!-- Kadar Nutrien -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mdi:leaf" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">Kadar Nutrien</h6>
                    <h1 class="fs-2 mb-0 fw-bolder">Medium</h1>
                  </div>
                </div>
                
                <!-- Kadar Nitrogen -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mdi:chemical-weapon" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">Kadar Nitrogen</h6>
                    <h1 class="fs-2 mb-0 fw-bolder">10%</h1>
                  </div>
                </div>
                
                <!-- Kadar Fosfor -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mdi:flask" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">Kadar Fosfor</h6>
                    <h1 class="fs-2 mb-0 fw-bolder">50%</h1>
                  </div>
                </div>
                
                <!-- Kadar Kalium -->
                <div class="d-flex p-16 bg-primary-50 radius-8 border-start-width-3-px border-primary-500" style="align-items: center; gap: 12px;">
                  <iconify-icon icon="mdi:pot" height="60" style="color: #5CDB07"></iconify-icon>
                  <div>
                    <h6 class="text-primary-light text-md fw-light mb-4">Kadar Kalium</h6>
                    <h1 class="fs-2 mb-0 fw-bolder d-flex align-items-center" style="gap:4px;">
                      <span>300</span>
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

          </div>
        </div>

      </div><!-- /.tab-content -->
    </div><!-- /.card-body -->

  </div><!-- /.card -->
</div><!-- /.container-fluid -->

