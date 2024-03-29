<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-fluid">
        
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>
        
        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Search -->
            <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                <i class="bx bx-search-alt bx-sm"></i>
                <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                </a>
            </div>
            </div>
            <!-- /Search -->
            
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                
                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <i class="bx bx-bell bx-sm"></i>
                    <span class="badge bg-danger rounded-pill badge-notifications">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end py-0">
                        <li class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                            <h5 class="text-body mb-0 me-auto">Notification</h5>
                            <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                            </div>
                        </li>
                        <li class="dropdown-notifications-list scrollable-container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Congratulation {{ Auth::user()->name }} 🎉</h6>
                                        <p class="mb-0">We glad that you are a part of eButify!</p>
                                    </div>
                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-menu-footer border-top">
                            <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                            View all notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ Storage::disk('public')->url('profile/').Auth::user()->image }}" alt class="rounded-circle">
                    </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="{{ route('customer.settings') }}">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                                <img src="{{ Storage::disk('public')->url('profile/').Auth::user()->image }}" alt class="rounded-circle">
                            </div>
                            </div>
                            <div class="flex-grow-1">
                            <span class="fw-semibold d-block lh-1">{{ Auth::user()->name }}</span>
                            <small>{{ Auth::user()->role->name }}</small>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('customer.settings') }}">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('customer.profile') }}">
                        <i class="fas fa-hand-holding-usd me-2"></i>
                        <span class="align-middle">Profile & Billing</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ route('customer.contact') }}">
                        <i class="bx bx-support me-2"></i>
                        <span class="align-middle">Help</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('customer.faq') }}">
                        <i class="bx bx-help-circle me-2"></i>
                        <span class="align-middle">FAQ</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit(); ">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form> 
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                    </ul>
                </li>
                <!--/ User -->
                
            </ul>
        </div>

        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper  d-none">
            <input type="text" class="form-control search-input container-fluid border-0" placeholder="Search..." aria-label="Search...">
            <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
        </div>
    
    </div>
</nav>