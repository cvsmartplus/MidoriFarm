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
                <input type="time" name="time" id="time" class="form-control border-secondary-light" value="">
            </div>
            <span>-</span>
            <div>
                <input type="time" name="time" id="time" class="form-control border-secondary-light" value="">
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
            <thead>
                <tr>
                    <th>Suhu Air</th>
                    <th>Kelembapan Udara</th>
                    <th>Nilai UV</th>
                    <th>Curah Hujan</th>
                    <th>Kualitas Udara</th>
                </tr>
            </thead>
        </table>

        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-24">
            <span>Showing 1 to 10 of 12 entries</span>
            <ul class="pagination d-flex flex-wrap align-items-center gap-2 justify-content-center">
                <li class="page-item">
                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"  href="javascript:void(0)">
                        <iconify-icon icon="ep:d-arrow-left" class="text-xl"></iconify-icon>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary-600 text-white fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary-50 text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px"  href="javascript:void(0)">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-secondary-light fw-medium radius-4 border-0 px-10 py-10 d-flex align-items-center justify-content-center h-32-px w-32-px bg-base"  href="javascript:void(0)">
                        <iconify-icon icon="ep:d-arrow-right" class="text-xl"></iconify-icon>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        // mapping kategori dan daftar kolomnya
        const column = {
            udara: ['Suhu Udara', 'Kelembapan Udara', 'Nilai UV', 'Curah Hujan', 'Kualitas Udara'],
            air: ['Suhu Air', 'Kualitas Air', 'pH Air', 'Nilai Air'],
            tanah: ['Suhu Tanah', 'pH Tanah', 'Nitrogen Tanah', 'Kelembaban Tanah', 'Fosfat Tanah'],
        };

        // function untuk render table head
        function renderHeader(cols) {
            const tr = document.createElement('tr');
            cols.forEach(text => {
                const th = document.createElement('th');
                th.scope = 'col';
                th.textContent = text;
                tr.appendChild(th);
            });
            return tr;
        }

        // listener buat mendeteksi pergantian kategori
        document.getElementById('category')
            .addEventListener('change', function(e){
                const key =  e.target.value // udara, air, tanah
                const cols = column[key] || []; // ambil header array
                const thead = document.querySelector('.table thead');
                thead.innerHTML = ''; // kosongin dulu
                thead.appendChild( renderHeader(cols) ); // render ulang
            })
        
        // render awal sesuai default selected
        document.addEventListener('DOMContentLoaded', () => {
            const ev = new Event('change');
            document.getElementById('category').dispatchEvent(ev);
        });
    </script>
@endpush

@endsection