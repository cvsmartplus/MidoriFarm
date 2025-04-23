@extends('layout.layout')
@php
    $title = 'Laporan Sensor IOT';
    $subTitle = 'IOT - Laporan Sensor IOT';
@endphp
@section('content')
<div class="card">
    <div class="card-header d-flex flex-wrap align-items-center justify-content-between gap-3">
        <div class="d-flex flex-wrap align-items-center gap-3">
            <div class="d-flex align-items-center gap-2">
                <span>Show</span>
                <select class="form-select form-select-sm w-auto">
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                </select>
            </div>
            <div class="icon-field">
                <input type="text" name="#0" class="form-control form-control-sm w-auto" placeholder="Search">
                <span class="icon">
                    <iconify-icon icon="ion:search-outline"></iconify-icon>
                </span>
            </div>
        </div>
        <div class="d-flex flex-wrap align-items-center gap-3">
            <select id="category" class="form-select form-select-sm w-auto">
                <option id="cat-1">Status</option>
                <option id="cat-2">Paid</option>
                <option id="cat-3">Pending</option>
            </select>
            <button type="button" class="btn btn-sm btn-primary-400"><i class="ri-add-line"></i> Add New</button>
        </div>
    </div>
    <div class="card-body">
        <table class="table bordered-table mb-0">
            <thead>
                <tr>
                    
                    <th scope="col">Invoice</th>
                    <th scope="col">Name</th>
                    <th scope="col">Debt Date</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526534</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list1.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Kathryn Murphy</h6>
                        </div>
                    </td>
                    <td>25 Jan 2024</td>
                    <td> 30 Jan 2025</td>
                    <td>$200.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        @if (Auth::user()->role == 'admin')
                            <a  href="{{ route("admin.tagihanPemasok.show") }}" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        @elseif (Auth::user()->role == 'owner')
                            <a  href="{{ route("owner.tagihanPemasok.show") }}" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        @elseif (Auth::user()->role == 'akuntan')
                            <a  href="{{ route("akuntan.tagihanPemasok.show") }}" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                            </a>
                            <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                            </a>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><a  href="javascript:void(0)" class="text-primary-600">#696589</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list2.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Annette Black</h6>
                        </div>
                    </td>
                    <td>25 Jan 2024</td>
                    <td> 30 Jan 2025</td>
                    <td>$200.00</td>                      
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list3.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Ronald Richards</h6>
                        </div>
                    </td>
                    <td>10 Feb 2024</td>
                    <td> 15 Feb 2025</td>
                    <td>$200.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526587</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list4.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Eleanor Pena</h6>
                        </div>
                    </td>
                    <td>10 Feb 2024</td>
                    <td> 15 Feb 2025</td>
                    <td>$150.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#105986</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list5.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Leslie Alexander</h6>
                        </div>
                    </td>
                    <td>15 March 2024</td>
                    <td> 20 March 2025</td>
                    <td>$150.00</td>
                    <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526589</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list6.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Albert Flores</h6>
                        </div>
                    </td>
                    <td>15 March 2024</td>
                    <td> 20 March 2025</td>
                    <td>$150.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526520</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list7.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Jacob Jones</h6>
                        </div>
                    </td>
                    <td>27 April 2024</td>
                    <td> 1 May 2025</td>
                    <td>$250.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#256584</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list8.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Jerome Bell</h6>
                        </div>
                    </td>
                    <td>27 April 2024</td>
                    <td> 1 May 2025</td>
                    <td>$250.00</td>
                    <td> <span class="bg-warning-focus text-warning-main px-24 py-4 rounded-pill fw-medium text-sm">Pending</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#200257</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list9.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Marvin McKinney</h6>
                        </div>
                    </td>
                    <td>30 April 2024</td>
                    <td> 6 May 2025</td>
                    <td>$250.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
                <tr>
                    
                    <td><a  href="javascript:void(0)" class="text-primary-600">#526525</a></td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/user-list/user-list10.png') }}" alt="" class="flex-shrink-0 me-12 radius-8">
                            <h6 class="text-md mb-0 fw-medium flex-grow-1">Cameron Williamson</h6>
                        </div>
                    </td>
                    <td>30 April 2024</td>
                    <td> 6 May 2025</td>
                    <td>$250.00</td>
                    <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Paid</span> </td>
                    <td>
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                        </a>
                        
                        <a  href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                            <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                        </a>
                    </td>
                </tr>
            </tbody>
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
@endsection