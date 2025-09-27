<!-- User -->
<li class="nav-item navbar-dropdown dropdown-user dropdown">
    <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
            <img src="{{ asset('public/user/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
        </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
        <li>
            <a class="dropdown-item" href="#">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 me-2">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('public/user/img/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="mb-0 small">{{ Auth::user()->username ?? 'Guest' }}</h6>
                        <small class="text-muted">User</small>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('profile') }}">
                <i class="ri-user-3-line ri-22px me-2"></i>
                <span class="align-middle">Profil</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="#">
                <i class="ri-settings-4-line ri-22px me-2"></i>
                <span class="align-middle">Pengaturan</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="#">
                <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 ri-file-text-line ri-22px me-3"></i>
                    <span class="flex-grow-1 align-middle">Billing</span>
                </span>
            </a>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <div class="d-grid px-4 pt-2 pb-1">
                <a href="{{ route('signout') }}" class="btn btn-danger d-flex">
                    <small class="align-middle">Logout</small>
                    <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                </a>
            </div>
        </li>
    </ul>
</li>
<!-- User -->
