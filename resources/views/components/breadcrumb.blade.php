<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
    <h6 class="fw-semibold mb-0 text-primary-900"><?php echo $title;?></h6>
    <ul class="d-flex align-items-center gap-2">
        <li class="fw-medium">
            @if (Auth::user()->role == 'admin')
            <a href="{{ route('admin.blogStat') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Beranda
            </a>
            @elseif (Auth::user()->role == 'owner')
            <a href="{{ route('owner.sensor') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Beranda
            </a>
            @elseif (Auth::user()->role == 'akuntan')
            <a href="{{ route('akuntan.keuangan') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Beranda
            </a>
            @elseif (Auth::user()->role == 'petani')
            <a href="{{ route('petani.sensor') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Beranda
            </a>
            @endif
        </li>
        <li>-</li>
        <li class="fw-medium"><?php echo $subTitle;?></li>
    </ul>
</div>