<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center justify-content-center">
            <div class="logo text-center">
                <img src="{{ asset('images/brand/Rena.webp') }}" class="w-50" alt="">
            </div>
        </a>
    </li>

    <li class="nav-item mt-5 {{ request()->routeIs('dashboard') ? 'active' : '' }} ">
        <a href="{{ route('dashboard') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                    <i class="fas fa-home text-white"></i>
            </span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('qrcode.*') ? 'active' : '' }}">
        <a href="{{ route('qrcode.index') }}" class="nav-link">
            <span class="sidebar-icon me-3">
                    <i class="fas fa-qrcode text-white"></i>
            </span>
            <span class="sidebar-text">{{ __('QR Codes') }}</span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('users.*') || request()->routeIs('roles.*') ? 'active' : '' }}">
        <span class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
            data-bs-target="#admin-settings">
            <span>
                <span class="sidebar-icon me-3">
                    <i class="fas fa-cog text-white"></i>
                </span>
                <span class="sidebar-text">{{ __('Admin Settings') }}</span>
            </span>
            <span class="link-arrow">
                <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </span>
        </span>
        <div class="multi-level collapse" role="list" id="admin-settings" aria-expanded="false">
            <ul class="flex-column nav">
                <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <span class="sidebar-icon me-3">
                            <i class="fas fa-users text-white"></i>
                        </span>
                        <span class="sidebar-text">{{ __('Users') }}</span>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('roles.*') ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}" class="nav-link">
                        <span class="sidebar-icon me-3">
                            <i class="fas fa-user-gear text-white"></i>
                        </span>
                        <span class="sidebar-text">{{ __('Roles') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>
