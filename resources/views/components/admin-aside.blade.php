<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
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
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.member') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div>Member</div>
            </a>
        </li>
    </ul>
</aside>
<!-- Menu -->