<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="{{ route('index') }}" class="sidebar-logo">
            <img src="{{ asset('assets/images/pplg.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('assets/images/pplg.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/images/pplg.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            @if(Auth::check())
                @if(Auth::check() && Auth::user()->role == 'admin')
                <li class="dropdown">
                    <a  href="javascript:void(0)">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Beranda</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('index') }}"><iconify-icon icon="ci:main-component" class="menu-icon"></iconify-icon>
                                Utama</a>
                            </li>
                            <li>
                                <a href="{{ route('sensor') }}"><iconify-icon icon="fluent:iot-20-regular" class="menu-icon"></iconify-icon>
                                IOT</a>
                        </li>
                    </ul>
                </li>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="ri-news-line" class="menu-icon"></iconify-icon>
                    <span> Artikel</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('blog') }}"><iconify-icon icon="mdi:book-outline" class="menu-icon"></iconify-icon> Artikel</a>
                    </li>
                    <li>
                        <a  href="{{ route('addBlog') }}"><iconify-icon icon="mdi:book-plus-outline" class="menu-icon"></iconify-icon> Buat Artikel</a>
                    </li>
                </ul>
            </li>

                <li class="sidebar-menu-group-title">Pemilik</li>
                <li class="dropdown">
                    <a  href="javascript:void(0)">
                        <iconify-icon icon="lsicon:goods-filled" class="menu-icon"></iconify-icon>
                        <span>Produk & Barang</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                        <a href="{{ route('barangList') }}"><iconify-icon icon="lsicon:goods-search-outline" class="menu-icon"></iconify-icon> Daftar Barang</a>
                        </li>
                        <li>
                        <a href="{{ route('barangPreview') }}"><iconify-icon icon="material-symbols:preview" class="menu-icon"></iconify-icon> Pratinjau</a>
                        </li>
                    </ul>
                </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="tabler:coin-filled" class="menu-icon"></iconify-icon>
                    <span>Hutang-Piutang</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="{{ route('tagihanList') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Hutang</a>
                    </li>
                    <li>
                    <a href="{{ route('tagihanPreview') }}"><iconify-icon icon="material-symbols:preview" class="menu-icon"></iconify-icon> Pratinjau</a>
                    </li>
                    <li>
                </ul>
            </li>

            <!-- cocok untuk fitur customer & supplier, hapus fitur user grid -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                    <span>Pelanggan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('usersList') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Pelanggan</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><iconify-icon icon="material-symbols:history-rounded" class="menu-icon"></iconify-icon> Aktivitas Pelanggan (Coming Soon)</a>
                    </li>
                </ul>
            </li>

            <!-- Pemasok start -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="game-icons:hand-truck" class="menu-icon"></iconify-icon>
                    <span>Pemasok</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('supplierList') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Pemasok</a>
                    </li>
                    {{-- <li>
                        <a  href="{{ route('usersGrid') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users Grid</a>
                    </li> --}}
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="ri-user-settings-line" class="menu-icon"></iconify-icon>
                    <span>Manajemen Akses</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('roleAccess') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Akses</a>
                    </li>
                    <li>
                        <a  href="{{ route('assignRole') }}"><iconify-icon icon="mdi:key-plus" class="menu-icon"></iconify-icon> Beri Akses</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="carbon:report" class="menu-icon"></iconify-icon>
                    <span>Pemasukan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('roleAccess') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Akses</a>
                    </li>
                    <li>
                        <a  href="{{ route('assignRole') }}"><iconify-icon icon="mdi:key-plus" class="menu-icon"></iconify-icon> Beri Akses</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-menu-group-title">Web Admin</li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
                    <span>User Authentication</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('login') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Sign In</a>
                    </li>
                    <li>
                        <a  href="{{ route('signup') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Sign Up</a>
                    </li>
                    <li>
                        <a  href="{{ route('forgotPassword') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Forgot Password</a>
                    </li>
                </ul>
            </li>

            {{-- ELEMENTS BUAT DEVELOPMENT --}}
            <li class="sidebar-menu-group-title">UI Elements</li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
                    <span>Components</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('typography') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Typography</a>
                    </li>
                    <li>
                        <a  href="{{ route('colors') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Colors</a>
                    </li>
                    <li>
                        <a  href="{{ route('button') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Button</a>
                    </li>
                    <li>
                        <a  href="{{ route('dropdown') }}"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i> Dropdown</a>
                    </li>
                    <li>
                        <a  href="{{ route('alert') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Alerts</a>
                    </li>
                    <li>
                    <a  href="{{ route('card') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Card</a>
                    </li>

                    <li>
                        <a  href="{{ route('carousel') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Carousel</a>
                    </li>
                    <li>
                        <a  href="{{ route('avatar') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Avatars</a>
                    </li>
                    <li>
                        <a  href="{{ route('progress') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Progress bar</a>
                    </li>
                    <li>
                        <a  href="{{ route('tabs') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Tab & Accordion</a>
                    </li>
                    <li>
                        <a  href="{{ route('pagination') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Pagination</a>
                    </li>
                    <li>
                        <a  href="{{ route('badges') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Badges</a>
                    </li>
                    <li>
                        <a  href="{{ route('tooltip') }}"><i class="ri-circle-fill circle-icon text-lilac-600 w-auto"></i> Tooltip & Popover</a>
                    </li>
                    <li>
                        <a  href="{{ route('videos') }}"><i class="ri-circle-fill circle-icon text-cyan w-auto"></i> Videos</a>
                    </li>
                    <li>
                        <a  href="{{ route('starRating') }}"><i class="ri-circle-fill circle-icon text-indigo w-auto"></i> Star Ratings</a>
                    </li>
                    <li>
                        <a  href="{{ route('tags') }}"><i class="ri-circle-fill circle-icon text-purple w-auto"></i> Tags</a>
                    </li>
                    <li>
                        <a  href="{{ route('list') }}"><i class="ri-circle-fill circle-icon text-red w-auto"></i> List</a>
                    </li>
                    <li>
                        <a  href="{{ route('calendar') }}"><i class="ri-circle-fill circle-icon text-yellow w-auto"></i> Calendar</a>
                    </li>
                    <li>
                        <a  href="{{ route('radio') }}"><i class="ri-circle-fill circle-icon text-orange w-auto"></i> Radio</a>
                    </li>
                    <li>
                        <a  href="{{ route('switch') }}"><i class="ri-circle-fill circle-icon text-pink w-auto"></i> Switch</a>
                    </li>
                    <li>
                        <a  href="{{ route('imageUpload') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Upload</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
                    <span>Forms</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('form') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Input Forms</a>
                    </li>
                    <li>
                        <a  href="{{ route('formLayout') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Input Layout</a>
                    </li>
                    <li>
                        <a  href="{{ route('formValidation') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Form Validation</a>
                    </li>
                    <li>
                        <a  href="{{ route('wizard') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Form Wizard</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
                    <span>Table</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('tableBasic') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Basic Table</a>
                    </li>
                    <li>
                        <a  href="{{ route('tableData') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Data Table</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
                    <span>Chart</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('lineChart') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Line Chart</a>
                    </li>
                    <li>
                        <a  href="{{ route('columnChart') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Column Chart</a>
                    </li>
                    <li>
                        <a  href="{{ route('pieChart') }}"><i class="ri-circle-fill circle-icon text-success-main w-auto"></i> Pie Chart</a>
                    </li>
                </ul>
            </li>
            <li>
                <a  href="{{ route('widgets') }}">
                    <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
                    <span>Widgets</span>
                </a>
            </li>

            <li class="sidebar-menu-group-title">Server Maintenance</li>
            <li>
                <a  href="{{ route('testimonials') }}">
                    <i class="ri-star-line text-xl me-6 d-flex w-auto"></i>
                    <span>Testimonial</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('error') }}">
                    <iconify-icon icon="streamline:straight-face" class="menu-icon"></iconify-icon>
                    <span>404</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('maintenance') }}">
                    <i class="ri-hammer-line text-xl me-6 d-flex w-auto"></i>
                    <span>Maintenance</span>
                </a>
            </li>
            <li>
                <a  href="{{ route('blankPage') }}">
                    <i class="ri-checkbox-multiple-blank-line text-xl me-6 d-flex w-auto"></i>
                    <span>Blank Page</span>
                </a>
            </li>
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                    <span>Settings</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a  href="{{ route('company') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Company</a>
                    </li>
                    <li>
                        <a  href="{{ route('notification') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Notification</a>
                    </li>
                    <li>
                        <a  href="{{ route('notificationAlert') }}"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Notification Alert</a>
                    </li>
                    <li>
                        <a  href="{{ route('theme') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Theme</a>
                    </li>
                    <li>
                        <a  href="{{ route('currencies') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Currencies</a>
                    </li>
                    <li>
                        <a  href="{{ route('language') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Languages</a>
                    </li>
                    <li>
                        <a  href="{{ route('paymentGateway') }}"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> Payment Gateway</a>
                    </li>
                </ul>
            </li>

                @elseif(Auth::user()->role == 'owner')
                <li class="dropdown">
                    <a  href="javascript:void(0)">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Beranda</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('index') }}"><iconify-icon icon="ci:main-component" class="menu-icon"></iconify-icon>
                                Utama</a>
                            </li>
                            <li>
                                <a href="{{ route('sensor') }}"><iconify-icon icon="fluent:iot-20-regular" class="menu-icon"></iconify-icon>
                                IOT</a>
                        </li>
                    </ul>
                </li>
            </li>

                <li class="sidebar-menu-group-title">Pemilik</li>
                <li class="dropdown">
                    <a  href="javascript:void(0)">
                        <iconify-icon icon="lsicon:goods-filled" class="menu-icon"></iconify-icon>
                        <span>Produk & Barang</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                        <a href="{{ route('barangList') }}"><iconify-icon icon="lsicon:goods-search-outline" class="menu-icon"></iconify-icon> Daftar Barang</a>
                        </li>
                        <li>
                        <a href="{{ route('barangPreview') }}"><iconify-icon icon="material-symbols:preview" class="menu-icon"></iconify-icon> Pratinjau</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a  href="javascript:void(0)">
                        <iconify-icon icon="tabler:coin-filled" class="menu-icon"></iconify-icon>
                        <span>Hutang-Piutang</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                        <a href="{{ route('tagihanList') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Hutang</a>
                        </li>
                        <li>
                        <a href="{{ route('tagihanPreview') }}"><iconify-icon icon="material-symbols:preview" class="menu-icon"></iconify-icon> Pratinjau</a>
                        </li>
                        <li>
                    </ul>
                </li>

                <!-- cocok untuk fitur customer & supplier, hapus fitur user grid -->
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                        <span>Pelanggan</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('usersList') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Pelanggan</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><iconify-icon icon="material-symbols:history-rounded" class="menu-icon"></iconify-icon> Aktivitas Pelanggan (Coming Soon)</a>
                        </li>
                    </ul>
                </li>

    <!-- Pemasok start -->
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="game-icons:hand-truck" class="menu-icon"></iconify-icon>
                        <span>Pemasok</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a  href="{{ route('supplierList') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Pemasok</a>
                        </li>
                        {{-- <li>
                            <a  href="{{ route('usersGrid') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users Grid</a>
                        </li> --}}
                    </ul>
                </li>

                <li class="dropdown">
                    <a  href="javascript:void(0)">
                        <iconify-icon icon="ri-user-settings-line" class="menu-icon"></iconify-icon>
                        <span>Manajemen Akses</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a  href="{{ route('roleAccess') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Akses</a>
                        </li>
                        <li>
                            <a  href="{{ route('assignRole') }}"><iconify-icon icon="mdi:key-plus" class="menu-icon"></iconify-icon> Beri Akses</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a  href="javascript:void(0)">
                        <iconify-icon icon="carbon:report" class="menu-icon"></iconify-icon>
                        <span>Pemasukan</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a  href="{{ route('roleAccess') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Akses</a>
                        </li>
                        <li>
                            <a  href="{{ route('assignRole') }}"><iconify-icon icon="mdi:key-plus" class="menu-icon"></iconify-icon> Beri Akses</a>
                        </li>
                    </ul>
                </li>

                @elseif(Auth::user()->role == 'petani')
                <li class="dropdown">
                    <a  href="javascript:void(0)">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Beranda</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <li>
                                <a href="{{ route('sensor') }}"><iconify-icon icon="fluent:iot-20-regular" class="menu-icon"></iconify-icon>
                            IOT</a>
                    </li>
                </ul>
            </li>
            </li>

            @elseif(Auth::user()->role == 'akuntan')
            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Beranda</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('index') }}"><iconify-icon icon="ci:main-component" class="menu-icon"></iconify-icon>
                            Utama</a>
                        </li>
                        <li>
                            <a href="{{ route('sensor') }}"><iconify-icon icon="fluent:iot-20-regular" class="menu-icon"></iconify-icon>
                            IOT</a>
                    </li>
                </ul>
            </li>
        </li>

            <li class="dropdown">
                <a  href="javascript:void(0)">
                    <iconify-icon icon="tabler:coin-filled" class="menu-icon"></iconify-icon>
                    <span>Hutang-Piutang</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                    <a href="{{ route('tagihanList') }}"><iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon> Daftar Hutang</a>
                    </li>
                    <li>
                    <a href="{{ route('tagihanPreview') }}"><iconify-icon icon="material-symbols:preview" class="menu-icon"></iconify-icon> Pratinjau</a>
                    </li>
                    <li>
                </ul>
            </li>
            @endif
        @endif
        </ul>
    </div>
</aside>
