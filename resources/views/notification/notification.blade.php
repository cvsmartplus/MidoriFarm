@extends('layout.layout')
@php
    $title = 'Notifikasi';
    $subTitle = 'Notifikasi';
@endphp

@section('content')

    {{-- Dummy data untuk demo, nanti di-replace dengan data DB --}}
    @php
        $grouped = [
            '15 Menit yang lalu' => [
                [
                    'time'    => '19:45',
                    'title'   => 'Sistem',
                    'message' => 'Sistem mendeteksi adanya kerusakan pada sensor (...). Segera perbaiki atau ganti dengan yang baru.',
                ],
            ],
            '15 Jam yang lalu' => [
                [
                    'time'    => '04:30',
                    'title'   => 'Sistem',
                    'message' => 'Sistem mendeteksi adanya kerusakan pada sensor (...). Segera perbaiki atau ganti dengan yang baru.',
                ],
            ],
            '1 Hari yang lalu' => [
                [
                    'time'    => '10:15',
                    'title'   => 'Sistem',
                    'message' => 'Sistem mendeteksi adanya kerusakan pada sensor (...). Segera perbaiki atau ganti dengan yang baru.',
                ],
            ],
            '3 Minggu yang lalu' => [
                [
                    'time'    => '14 Maret, 2025',
                    'title'   => 'Sistem',
                    'message' => 'Sistem mendeteksi adanya kerusakan pada sensor (...). Segera perbaiki atau ganti dengan yang baru.',
                ],
            ],
            '1 Tahun yang lalu' => [
                [
                    'time'    => '14 Maret, 2024',
                    'title'   => 'Sistem',
                    'message' => 'Sistem mendeteksi adanya kerusakan pada sensor (...). Segera perbaiki atau ganti dengan yang baru.',
                ],
            ],
        ];
    @endphp

<div class="position-relative ml-3">
    {{-- Garis vertikal timeline di belakang bullets --}}
    <div class="position-absolute timeline-line" style="left:7px; top:8px; bottom:0; width:2px; background:#ccc; z-index:0;"></div>

    @foreach($grouped as $label => $items)
        {{-- Header kelompok waktu --}}
        <div class="d-flex align-items-center mb-3">
            {{-- Bulat header di atas timeline --}}
            <div class="rounded-circle bg-white border border-secondary timeline-point" style="width:16px; height:16px; position:relative; z-index:1;"></div>
            <span class="ml-2 text-muted font-italic mx-6">{{ $label }}</span>
        </div>

        {{-- Daftar notifikasi --}}
        @foreach($items as $note)
            <div class="card mb-3 shadow-sm" style="margin-left: 32px;">
                <div class="card-body d-flex justify-content-between align-items-start">
                    <div class="d-flex align-items-center">
                        {{-- Bulat kecil di samping judul --}}
                        <span class="rounded-circle bg-primary-400 mr-2 timeline-point" style="display:inline-block; width:10px; height:10px; position:relative; z-index:1;"></span>
                        <strong class="mx-6">{{ $note['title'] }}</strong>
                    </div>
                    <small class="text-secondary">{{ $note['time'] }}</small>
                </div>
                <div class="card-body pt-0">
                    <p class="mb-0">{!! nl2br(e($note['message'])) !!}</p>
                </div>
            </div>
        @endforeach
    @endforeach
</div>
@endsection
