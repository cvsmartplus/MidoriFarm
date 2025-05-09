<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        @auth
        <a href="{{ routeByRole('admin.blogStat', 'owner.sensor', 'petani.sensor', 'akuntan.keuangan') }}" class="sidebar-logo">
            <img src="{{ asset('assets/images/MidoriFarm_logo_text.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('assets/images/MidoriFarm_logo_text.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/images/MidoriFarm.png') }}" alt="site logo" class="logo-icon">
        </a>

    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            <!-- Beranda -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Beranda</span>
                </a>
                <ul class="sidebar-submenu">
                    @role('admin')
                    <li>
                        <a href="{{ route('admin.blogStat') }}">
                            <iconify-icon icon="bx:stats" class="menu-icon"></iconify-icon>Statistik Artikel
                        </a>
                    </li>
                    @endrole
                    @hasanyrole('admin|owner|petani')
                    <li>
                        <a href="{{ routeByRole('admin.sensor', 'owner.sensor', 'petani.sensor', null) }}">
                            <iconify-icon icon="fluent:iot-20-regular" class="menu-icon"></iconify-icon>Sensor IOT
                        </a>
                    </li>
                    @endhasanyrole
                    @hasanyrole('admin|owner|akuntan')
                    <li>
                        <a href="{{ routeByRole('admin.keuangan', 'owner.keuangan', null, 'akuntan.keuangan') }}">
                            <iconify-icon icon="material-symbols-light:finance-mode-rounded" class="menu-icon"></iconify-icon>Keuangan
                        </a>
                    </li>
                    @endhasanyrole
                </ul>
            </li>

            <!-- Artikel -->
            @role('admin')
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="majesticons:article-line" class="menu-icon"></iconify-icon>
                    <span>Artikel</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.blog', null, null, null) }}">
                            <iconify-icon icon="mdi:book-outline" class="menu-icon"></iconify-icon>Artikel
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.addBlog', null, null, null) }}">
                            <iconify-icon icon="mdi:book-plus-outline" class="menu-icon"></iconify-icon>Buat Artikel
                        </a>
                    </li>
                </ul>
            </li>
            @endrole

            <!-- IOT -->
            @hasanyrole('admin|owner|petani')
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="fluent:iot-20-regular" class="menu-icon"></iconify-icon>
                    <span>IOT</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.monitoring', 'owner.monitoring', 'petani.monitoring', null) }}">
                            <iconify-icon icon="grommet-icons:system" class="menu-icon"></iconify-icon>Monitoring IOT
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.laporanIOT', 'owner.laporanIOT', 'petani.laporanIOT', null) }}">
                            <iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon>Laporan
                        </a>
                    </li>
                </ul>
            </li>
            @endhasanyrole

            {{-- Group untuk Pemilik --}}
            <li class="sidebar-menu-group-title">Pemilik</li>
            @hasanyrole('admin|owner|akuntan')
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mingcute:bill-2-line" class="menu-icon"></iconify-icon>
                    <span>Tagihan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.tagihanPelanggan.index', 'owner.tagihanPelanggan.index', null, 'akuntan.tagihanPelanggan.index') }}">
                            <iconify-icon icon="stash:people-group" class="menu-icon"></iconify-icon>Pelanggan
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.tagihanPemasok.index', 'owner.tagihanPemasok.index', null, 'akuntan.tagihanPemasok.index') }}">
                            <iconify-icon icon="mdi:hand-truck" class="menu-icon"></iconify-icon>Pemasok
                        </a>
                    </li>
                </ul>
            </li>
            @endhasanyrole

            @hasanyrole('admin|owner')
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="gg:profile" class="menu-icon"></iconify-icon>
                    <span>Pelanggan & Pemasok</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.pelanggan.index', 'owner.pelanggan.index', null, null) }}">
                            <iconify-icon icon="stash:people-group" class="menu-icon"></iconify-icon>Pelanggan
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.pemasok.index', 'owner.pemasok.index', null, null) }}">
                            <iconify-icon icon="mdi:hand-truck" class="menu-icon"></iconify-icon>Pemasok
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Produk -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="fluent-mdl2:product-variant" class="menu-icon"></iconify-icon>
                    <span>Produk</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.produkKelola.index', 'owner.produkKelola.index', null, null) }}">
                            <iconify-icon icon="ix:maintenance-warning" class="menu-icon"></iconify-icon>Kelola
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.produkKategori.index', 'owner.produkKategori.index', null, null) }}">
                            <iconify-icon icon="bx:category" class="menu-icon"></iconify-icon>Kategori
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Asset -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="solar:money-bag-outline" class="menu-icon"></iconify-icon>
                    <span>Asset</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.assetKelola.index', 'owner.assetKelola.index', null, null) }}">
                            <iconify-icon icon="ix:maintenance-warning" class="menu-icon"></iconify-icon>Kelola
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.assetKategori.index', 'owner.assetKategori.index', null, null) }}">
                            <iconify-icon icon="bx:category" class="menu-icon"></iconify-icon>Kategori
                        </a>
                    </li>
                </ul>
            </li>
            @endhasanyrole

            @hasanyrole('admin|owner|akuntan')
            <!-- Pengeluaran -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="flowbite:chart-line-down-outline" class="menu-icon"></iconify-icon>
                    <span>Pengeluaran</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.pengeluaranKelola.index', 'owner.pengeluaranKelola.index', null, 'akuntan.pengeluaranKelola.index') }}">
                            <iconify-icon icon="ix:maintenance-warning" class="menu-icon"></iconify-icon>Kelola
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.pengeluaranKategori.index', 'owner.pengeluaranKategori.index', null, 'akuntan.pengeluaranKategori.index') }}">
                            <iconify-icon icon="bx:category" class="menu-icon"></iconify-icon>Kategori
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Penjualan -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="mage:money-exchange" class="menu-icon"></iconify-icon>
                    <span>Penjualan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.penjualan.create', 'owner.penjualan.create', null, 'akuntan.penjualan.create') }}">
                            <iconify-icon icon="ix:maintenance-warning" class="menu-icon"></iconify-icon>Kelola
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.penjualan.index', 'owner.penjualan.index', null, 'akuntan.penjualan.index') }}">
                            <iconify-icon icon="bx:category" class="menu-icon"></iconify-icon>Laporan
                        </a>
                    </li>
                </ul>
            </li>
            @endhasanyrole

            @hasanyrole('admin|owner')
            <!-- Manajemen Akses -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="ri-user-settings-line" class="menu-icon"></iconify-icon>
                    <span>Karyawan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.karyawan.index', 'owner.karyawan.index', null, null) }}">
                            <iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon>Daftar Karyawan
                        </a>
                    </li>
                </ul>
            </li>
            @endhasanyrole

            {{-- ELEMENTS BUAT DEVELOPMENT
            @if (Auth::user()->role == 'admin')
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
            @endif --}}
        @endauth
        </ul>
    </div>
</aside>
