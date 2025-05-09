@extends('layout.layout')
@php
    $title='Tagihan Pelanggan';
    $subTitle = 'Tagihan - Pratinjau Tagihan';
    $script = '<script>
                    function printInvoice() {
                        var printContents = document.getElementById("invoice").innerHTML;
                        var originalContents = document.body.innerHTML;

                        document.body.innerHTML = printContents;

                        window.print();

                        document.body.innerHTML = originalContents;
                    }
                </script>';
@endphp

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
            <div>
                <a href="{{ routeByRole('admin.tagihanPelanggan.index', 'owner.tagihanPelanggan.index', null, 'akuntan.tagihanPelanggan.index' ) }}" class="btn btn-sm btn-danger-500 radius-8 d-inline-flex align-items-center gap-1">
                    <-
                    Kembali
                </a>
            </div>
            <div class="gap-2">
                <button type="button" class="btn btn-sm btn-warning radius-8 d-inline-flex align-items-center gap-1" onclick="printInvoice()">
                    <iconify-icon icon="basil:printer-outline" class="text-xl"></iconify-icon>
                    Print/Download
                </button>
            </div>
        </div>
    </div>
    <div class="card-body py-40">
        <div class="row justify-content-center" id="invoice">
            <div class="col-lg-8">
                <div class="shadow-4 border radius-8">
                    <div class="p-20 d-flex flex-wrap justify-content-between gap-3 border-bottom">
                        <div>
                            <h3 class="text-xl">Invoice #3492</h3>
                            <p class="mb-1 text-sm">Debt Date: {{ $tagihan->date }}</p>
                            <p class="mb-0 text-sm">Due Date: {{ $tagihan->due_date }}</p>
                        </div>
                        <div>
                            <img src="{{ asset('assets/images/MidoriFarm_logo_text.png') }}"" alt="image" class="mb-8" style="width: 168px; length: 40px;">
                            <p class="mb-1 text-sm">{{ $gh->location }}</p>
                            <p class="mb-0 text-sm">{{ $gh->email }}, {{ $gh->phone_number }}</p>
                        </div>
                    </div>
                    <div class="py-28 px-20">
                        <div class="d-flex flex-wrap justify-content-between align-items-end gap-3">
                            <div>
                                <h6 class="text-md">Issues For:</h6>
                                <table class="text-sm text-secondary-light">
                                    <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td class="ps-8">: {{ $tagihan->customer->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td class="ps-8">: {{ $tagihan->customer->address }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td class="ps-8">: {{ $tagihan->customer->phone_number }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nominal</td>
                                            <td class="ps-8 text-primary-light">: <strong>Rp. {{ format_uang($tagihan->amount) }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <table class="text-sm text-secondary-light">
                                    <tbody>
                                        <tr>
                                            <td>Issued By</td>
                                            <td class="ps-8">: {{ auth()->user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Issues Date</td>
                                            <td class="ps-8">: {{ $tagihan->updated_at }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td class="ps-8 text-primary-light">: <strong>{{ $tagihan->status }}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex mt-32 flex-wrap justify-content-between gap-3">
                            <div>
                                <p class="text-sm mb-0"><span class="text-primary-light fw-semibold">Sales By:</span> {{ $gh->name }}</p>
                            </div>
                            <div>
                                <table class="text-sm">
                                    <tbody>
                                        <tr>
                                            <td class="pe-64 fw-bold text-primary-light">Total:</td>
                                            <td class="pe-16">
                                                <span class="text-primary-light"><strong>Rp. {{ format_uang($tagihan->amount) }}</strong></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-bottom">
                                            <td class="border-bottom">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="mt-64">
                            <p class="text-center text-secondary-light text-sm fw-semibold">Thank you for your purchase!</p>
                        </div>

                        <div class="d-flex flex-wrap justify-content-between align-items-end mt-64">
                            <div class="text-sm border-top d-inline-block px-12">Signature of Customer</div>
                            <div class="text-sm border-top d-inline-block px-12">Signature of Authorized</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
