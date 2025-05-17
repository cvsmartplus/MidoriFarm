@extends('layout.layout')
@php
    $title = 'Laporan Sensor IOT';
    $subTitle = 'IOT - Laporan Sensor IOT';
@endphp
@section('content')
<div class="card">
    <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3">
        <div class="d-flex flex-wrap align-items-center gap-3">
            <label class="fw-medium fs-5 me-2">Tanggal</label>
            <div>
                <input type="date" class="form-control border-secondary-light" value="">
            </div>
            <span>-</span>
            <div>
                <input type="date" class="form-control border-secondary-light" value="">
            </div>
            <div class="vr text-dark-1" style="width: 2px;"></div>
            <label class="fw-medium fs-5 me-2">Waktu</label>
            <div>
                <input type="time" name="time_start" class="form-control border-secondary-light" value="">
            </div>
            <span>-</span>
            <div>
                <input type="time" name="time_end" class="form-control border-secondary-light" value="">
            </div>
        </div>
        <div class="d-flex flex-wrap align-items-center">
            <select id="category" class="form-select form-select-md w-auto">
                <option id="udara" value="udara">Udara</option>
                <option id="air" value="air">Air</option>
                <option id="tanah" value="tanah">Tanah</option>
            </select>
        </div>
    </div>
    <div class="card-body">
        <table class="table bordered-table mb-0">
            <thead></thead>
            <tbody></tbody>
        </table>

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-24">
            <span>Showing 1 to 5 of 5 entries</span>
            <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
                <!-- pagination here -->
            </ul>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const columns = {
        udara: [
            { title: 'Suhu Udara', data: 'suhu' },
            { title: 'Kelembapan Udara', data: 'kelembapan' },
            { title: 'Nilai UV', data: 'uv' },
            { title: 'Curah Hujan', data: 'hujan' },
            { title: 'Kualitas Udara', data: 'kualitas' }
        ],
        air: [
            { title: 'Suhu Air', data: 'suhu' },
            { title: 'pH Air', data: 'ph' },
            { title: 'Volume Air', data: 'volume' },
            { title: 'Kualitas Air', data: 'kualitas' }
        ],
        tanah: [
            { title: 'Suhu Tanah', data: 'suhu' },
            { title: 'Kelembaban Tanah', data: 'kelembaban' },
            { title: 'pH Tanah', data: 'ph' },
            { title: 'Nitrogen Tanah', data: 'nitrogen' },
            { title: 'EC Tanah', data: 'ec' },
            { title: 'Fosfat Tanah', data: 'fosfat' },
            { title: 'Kalium Tanah', data: 'kalium' }
        ]
    };

    const dummyData = {
        udara: [
            { suhu: '30°C', kelembapan: '70%', uv: '30 W/m²', hujan: '50 mm', kualitas: '1000 PPM' },
            { suhu: '28°C', kelembapan: '65%', uv: '25 W/m²', hujan: '10 mm', kualitas: '800 PPM' },
            { suhu: '32°C', kelembapan: '60%', uv: '40 W/m²', hujan: '5 mm', kualitas: '1200 PPM' }
        ],
        air: [
            { suhu: '25°C', ph: '7', volume: '50%', kualitas: '500 PPM' },
            { suhu: '24°C', ph: '6.8', volume: '55%', kualitas: '450 PPM' },
            { suhu: '26°C', ph: '7.2', volume: '60%', kualitas: '520 PPM' }
        ],
        tanah: [
            { suhu: '32°C', kelembaban: '45%', ph: '6.8', nitrogen: '1000 PPM', ec: '1.4 dS/m', fosfat: '1000 PPM', kalium: '300 PPM' },
            { suhu: '30°C', kelembaban: '50%', ph: '6.5', nitrogen: '900 PPM', ec: '1.2 dS/m', fosfat: '950 PPM', kalium: '280 PPM' },
            { suhu: '33°C', kelembaban: '42%', ph: '7.0', nitrogen: '1050 PPM', ec: '1.5 dS/m', fosfat: '1020 PPM', kalium: '310 PPM' }
        ]
    };

    // Render thead berdasarkan kolom
    function renderHeader(cols) {
        const tr = document.createElement('tr');
        cols.forEach(col => {
            const th = document.createElement('th');
            th.scope = 'col';
            th.textContent = col.title;
            tr.appendChild(th);
        });
        return tr;
    }

    // Render tbody berdasarkan data
    function renderBody(category) {
        const tbody = document.querySelector('.table tbody');
        tbody.innerHTML = '';

        const rows = dummyData[category] || [];

        rows.forEach(item => {
            const tr = document.createElement('tr');
            Object.values(item).forEach(value => {
                const td = document.createElement('td');
                td.textContent = value;
                tr.appendChild(td);
            });
            tbody.appendChild(tr);
        });
    }

    // Update tabel saat kategori berubah
    document.getElementById('category').addEventListener('change', function (e) {
        const category = e.target.value;
        const cols = columns[category] || [];

        const thead = document.querySelector('.table thead');
        thead.innerHTML = '';
        thead.appendChild(renderHeader(cols));

        renderBody(category);
    });

    // Trigger render awal
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('category').dispatchEvent(new Event('change'));
    });
</script>

@endpush

@endsection
