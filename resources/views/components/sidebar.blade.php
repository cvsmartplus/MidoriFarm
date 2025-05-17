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
            @role('admin|owner')
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="majesticons:article-line" class="menu-icon"></iconify-icon>
                    <span>Artikel</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.blog', 'owner.blog', null, null) }}">
                            <iconify-icon icon="mdi:book-outline" class="menu-icon"></iconify-icon>Artikel
                        </a>
                    </li>
                    @role('admin')
                    <li>
                        <a href="{{ routeByRole('admin.addBlog', null, null, null) }}">
                            <iconify-icon icon="mdi:book-plus-outline" class="menu-icon"></iconify-icon>Buat Artikel
                        </a>
                    </li>
                    @endrole
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
                            <iconify-icon icon="ic:baseline-plus" class="menu-icon"></iconify-icon>Tambah
                        </a>
                    </li>
                    <li>
                        <a href="{{ routeByRole('admin.penjualan.index', 'owner.penjualan.index', null, 'akuntan.penjualan.index') }}">   
                            <iconify-icon icon="el:list-alt" class="menu-icon"></iconify-icon>Laporan
                        </a>
                    </li>
                </ul>
            </li>
            @endhasanyrole

            @hasanyrole('admin|owner')
            <!-- Manajemen Akses -->
            <li class="dropdown">
                <a href="javascript:void(0)">
                    <iconify-icon icon="f7:person-3" class="menu-icon"></iconify-icon>
                    <span>Karyawan</span>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ routeByRole('admin.karyawan.index', 'owner.karyawan.index', null, null) }}">
                            <iconify-icon icon="ph:user-list" class="menu-icon"></iconify-icon>Daftar Karyawan
                        </a>
                    </li>
                </ul>
            </li>
            @endhasanyrole
        @endauth
        </ul>
    </div>
</aside>
