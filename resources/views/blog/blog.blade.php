@extends('layout.layout')
@php
    $title='Blog';
    $subTitle = 'Blog';
@endphp

@section('content')
<div class="row gy-4">
    <div class="col-lg-8">
        <div class="row gy-4">
            <div class="col-xxl-4 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
                    <div class="card-body p-24">
                        <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                            <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </a>
                        <div class="mt-20">
                            <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                <a  href="blog-details" class="pr-4 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                    <i class="ri-calendar-2-line"></i>
                                    Jan 17, 2024
                                </div>
                            </div>
                            <h6 class="mb-16">
                                <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Your satisfaction is our top the best priority</a>
                            </h6>
                            <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                            <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                Read More
                                <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
                    <div class="card-body p-24">
                        <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                            <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </a>
                        <div class="mt-20">
                            <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                <a  href="blog-details" class="pr-4 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                    <i class="ri-calendar-2-line"></i>
                                    Jan 17, 2024
                                </div>
                            </div>
                            <h6 class="mb-16">
                                <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Your satisfaction is our top the best priority</a>
                            </h6>
                            <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                            <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                Read More
                                <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
                    <div class="card-body p-24">
                        <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                            <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </a>
                        <div class="mt-20">
                            <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                <a  href="blog-details" class="pr-4 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                    <i class="ri-calendar-2-line"></i>
                                    Jan 17, 2024
                                </div>
                            </div>
                            <h6 class="mb-16">
                                <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Your satisfaction is our top the best priority</a>
                            </h6>
                            <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                            <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                Read More
                                <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-sm-6">
                <div class="card h-100 p-0 radius-12 overflow-hidden">
                    <div class="card-body p-24">
                        <a  href="{{ route('blogDetails') }}" class="w-100 max-h-194-px radius-8 overflow-hidden">
                            <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                        </a>
                        <div class="mt-20">
                            <div class="d-flex align-items-center gap-6 justify-content-between flex-wrap mb-16">
                                <a  href="blog-details" class="pr-4 py-6 bg-neutral-100 rounded-pill bg-hover-neutral-300 text-neutral-600 fw-medium">Workshop</a>
                                <div class="d-flex align-items-center gap-8 text-neutral-500 fw-medium">
                                    <i class="ri-calendar-2-line"></i>
                                    Jan 17, 2024
                                </div>
                            </div>
                            <h6 class="mb-16">
                                <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-xl transition-2">Your satisfaction is our top the best priority</a>
                            </h6>
                            <p class="text-line-3 text-neutral-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                            <a  href="{{ route('blogDetails') }}" class="d-flex align-items-center gap-8 fw-semibold text-neutral-900 text-hover-primary-600 transition-2">
                                Read More
                                <i class="ri-arrow-right-double-line text-xl d-flex line-height-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Blog -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header border-bottom">
                <h6 class="text-xl mb-0">Latest Posts</h6>
            </div>
            <div class="card-body d-flex flex-column gap-24 p-24">
                <div class="d-flex flex-wrap">
                    <a  href="{{ route('blogDetails') }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                        <img src="{{ asset('assets/images/blog/blog5.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="blog__content">
                        <h6 class="mb-8">
                            <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-md transition-2">How to hire a right business executive for your company</a>
                        </h6>
                        <p class="text-line-2 text-sm text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <a  href="{{ route('blogDetails') }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                        <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="blog__content">
                        <h6 class="mb-8">
                            <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-md transition-2">The Gig Economy: Adapting to a Flexible Workforce</a>
                        </h6>
                        <p class="text-line-2 text-sm text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <a  href="{{ route('blogDetails') }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                        <img src="{{ asset('assets/images/blog/blog7.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="blog__content">
                        <h6 class="mb-8">
                            <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-md transition-2">The Future of Remote Work: Strategies for Success</a>
                        </h6>
                        <p class="text-line-2 text-sm text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <a  href="{{ route('blogDetails') }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                        <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    </a>
                    <div class="blog__content">
                        <h6 class="mb-8">
                            <a  href="{{ route('blogDetails') }}" class="text-line-2 text-hover-primary-600 text-md transition-2">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                        </h6>
                        <p class="text-line-2 text-sm text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
@endsection