@extends('layout.layout')
@php
    $title='Blog Details';
    $subTitle = 'Blog Details';
@endphp

@section('content')

    <div class="row gy-4">
        <div class="col-lg-8">
            <div class="card p-0 radius-12 overflow-hidden">
                <div class="card-body p-0">
                    <img src="{{ asset('assets/images/blog/blog-details.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                    <div class="p-32">
                        <div class="d-flex align-items-center gap-16 justify-content-between flex-wrap mb-24">
                            <div class="d-flex align-items-center gap-8">
                                <img src="{{ asset('assets/images/user-list/user-list1.png') }}" alt="" class="w-48-px h-48-px rounded-circle object-fit-cover">
                                <div class="d-flex flex-column">
                                    <h6 class="text-lg mb-0">John Doe</h6>
                                    <span class="text-sm text-neutral-500">1 day ago</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-md-3 gap-2 flex-wrap">
                                <div class="d-flex align-items-center gap-8 text-neutral-500 text-lg fw-medium">
                                    <i class="ri-calendar-2-line"></i>
                                    Jan 17, 2024
                                </div>
                            </div>
                        </div>
                        <h3 class="mb-16"> How to hire a right business executive for your company </h3>
                        <p class="text-neutral-500 mb-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi voluptate quaerat possimus neque animi ex placeat ducimus reiciendis saepe mollitia tenetur aspernatur unde illum fugiat</p>
                        <p class="text-neutral-500 mb-16">reprehenderit repellendus dicta accusantium laborum eum et inventore. Perferendis temporibus reiciendis ut magni numquam molestiae fugit, laboriosam adipisci modi, quisquam, rem aspernatur fugiat neque velit ratione? Ipsum maxime aperiam minus dolorem voluptatibus suscipit debitis delectus numquam.</p>
                        <p class="text-neutral-500 mb-16">reprehenderit repellendus dicta accusantium laborum eum et inventore. Perferendis temporibus reiciendis ut magni numquam molestiae fugit, laboriosam adipisci modi, quisquam, rem aspernatur fugiat neque velit ratione? Ipsum maxime aperiam minus dolorem voluptatibus suscipit debitis delectus numquam. Illum delectus dicta sit soluta dolores odit facilis exercitationem animi quibusdam, autem nulla omnis harum magnam est ad aperiam quasi qui? Enim, natus porro debitis maiores ad soluta totam nesciunt deleniti tempora ipsum id consectetur? Alias dignissimos vel corrupti!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-24">
                <!-- Latest Blog -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="text-xl mb-0">Latest Posts</h6>
                    </div>
                    <div class="card-body d-flex flex-column gap-24 p-24">
                        <div class="d-flex flex-wrap">
                            <a  href="{{ route('admin.blogDetails') }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog5.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="blog__content">
                                <h6 class="mb-8">
                                    <a  href="{{ route('admin.blogDetails') }}" class="text-line-2 text-hover-primary-600 text-md transition-2">How to hire a right business executive for your company</a>
                                </h6>
                                <p class="text-line-2 text-sm text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <a  href="{{ route('admin.blogDetails') }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="blog__content">
                                <h6 class="mb-8">
                                    <a  href="{{ route('admin.blogDetails') }}" class="text-line-2 text-hover-primary-600 text-md transition-2">The Gig Economy: Adapting to a Flexible Workforce</a>
                                </h6>
                                <p class="text-line-2 text-sm text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <a  href="{{ route('admin.blogDetails') }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog7.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="blog__content">
                                <h6 class="mb-8">
                                    <a  href="{{ route('admin.blogDetails') }}" class="text-line-2 text-hover-primary-600 text-md transition-2">The Future of Remote Work: Strategies for Success</a>
                                </h6>
                                <p class="text-line-2 text-sm text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap">
                            <a  href="{{ route('admin.blogDetails') }}" class="blog__thumb w-100 radius-12 overflow-hidden">
                                <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="" class="w-100 h-100 object-fit-cover">
                            </a>
                            <div class="blog__content">
                                <h6 class="mb-8">
                                    <a  href="{{ route('admin.blogDetails') }}" class="text-line-2 text-hover-primary-600 text-md transition-2">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                </h6>
                                <p class="text-line-2 text-sm text-neutral-500 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolores explicabo corrupti, fuga necessitatibus fugiat adipisci quidem eveniet enim minus.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h6 class="text-xl mb-0">Tags</h6>
                    </div>
                    <div class="card-body p-24">
                        <div class="d-flex align-items-center flex-wrap gap-8">
                            <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-primary-600 bg-primary-50 bg-hover-primary-600 text-primary-600 border-0 d-inline-flex align-items-center gap-1 text-sm px-16 py-6"> Development </a>
                            <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-primary-600 bg-primary-50 bg-hover-primary-600 text-primary-600 border-0 d-inline-flex align-items-center gap-1 text-sm px-16 py-6"> Design </a>
                            <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-primary-600 bg-primary-50 bg-hover-primary-600 text-primary-600 border-0 d-inline-flex align-items-center gap-1 text-sm px-16 py-6"> Technology </a>
                            <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-primary-600 bg-primary-50 bg-hover-primary-600 text-primary-600 border-0 d-inline-flex align-items-center gap-1 text-sm px-16 py-6"> Popular </a>
                            <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-primary-600 bg-primary-50 bg-hover-primary-600 text-primary-600 border-0 d-inline-flex align-items-center gap-1 text-sm px-16 py-6"> Codignator </a>
                            <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-primary-600 bg-primary-50 bg-hover-primary-600 text-primary-600 border-0 d-inline-flex align-items-center gap-1 text-sm px-16 py-6"> Javascript </a>
                            <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-primary-600 bg-primary-50 bg-hover-primary-600 text-primary-600 border-0 d-inline-flex align-items-center gap-1 text-sm px-16 py-6"> Bootstrap </a>
                            <a  href="{{ route('admin.blog') }}" class="btn btn-sm btn-primary-600 bg-primary-50 bg-hover-primary-600 text-primary-600 border-0 d-inline-flex align-items-center gap-1 text-sm px-16 py-6"> PHP </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection