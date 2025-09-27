<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                <span style="color: var(--bs-primary)">
                    <img src="{{ asset('public/user/svg/logo.svg') }}" alt="logo">
                </span>
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Garuda ads</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="menu-toggle-icon d-xl-block align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <style>
        ul.menu-inner.overflow-auto {
            padding-bottom: 50px;
        }
    </style>
    <ul class="menu-inner overflow-auto">
        <li class="menu-item active">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'tiktok') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Tiktok</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'shopee') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Shopee</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'adsense') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Adsense</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'adsterra') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Adsterra</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'adsterra') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Adsterra</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'galaxion') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Galaxion</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'monetag') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Monetag</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'proxy-residential') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Proxy residential</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'support') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'grup-edukasi') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Grup edukasi</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'live-recording') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Live recording</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'script-agc') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Script V.I.P</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('product.show', 'affiliate') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Affiliate</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('withdraw') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Penarikan</div>
            </a>
        </li>
    </ul>
</aside>
<!-- Menu -->