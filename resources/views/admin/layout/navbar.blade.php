<header class="topbar">
    <div class="container-fluid">
         <div class="navbar-header">
              <div class="d-flex align-items-center gap-2">
                   <!-- Menu Toggle Button -->
                   <div class="topbar-item">
                        <button type="button" class="button-toggle-menu topbar-button">
                             <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24 align-middle"></iconify-icon>
                        </button>
                   </div>

                   <!-- App Search-->
                   <form action="{{ route('admin.search.page_search') }}" method="GET" class="app-search d-none d-md-block me-auto">
                    @csrf
                        <div class="position-relative">
                             <input type="search" class="form-control dynamic_input {{ session()->has('search_success') ? ( session('search_success') ? '' : 'text-danger' ) : '' }}" placeholder="Search..." autocomplete="off" value="{{ session()->has('search_success') ? ( session('search_success') ? '' : session('search') ) : '' }}" name="search">
                             <iconify-icon icon="solar:magnifer-broken" class="search-widget-icon"></iconify-icon>
                        </div>
                   </form>
              </div>

              <div class="d-flex align-items-center gap-1">
                   <!-- Theme Color (Light/Dark) -->
                   <div class="topbar-item">
                        <button type="button" class="topbar-button" id="light-dark-mode">
                             <iconify-icon icon="solar:moon-broken" class="fs-24 align-middle light-mode"></iconify-icon>
                             <iconify-icon icon="solar:sun-broken" class="fs-24 align-middle dark-mode"></iconify-icon>
                        </button>
                   </div>

                   <!-- Category -->
                   <div class="dropdown topbar-item d-none d-lg-flex">
                        <button type="button" class="topbar-button" data-toggle="fullscreen">
                             <iconify-icon icon="solar:full-screen-broken" class="fs-24 align-middle fullscreen"></iconify-icon>
                             <iconify-icon icon="solar:quit-full-screen-broken" class="fs-24 align-middle quit-fullscreen"></iconify-icon>
                        </button>
                   </div>

                   <!-- Notification -->
                   <x-notification-drawer-component />

                   <!-- Theme Setting -->
                   <div class="topbar-item d-none d-md-flex">
                        <button type="button" class="topbar-button" id="theme-settings-btn" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                             <iconify-icon icon="solar:settings-broken" class="fs-24 align-middle"></iconify-icon>
                        </button>
                   </div>

                   <!-- User -->
                   <div class="dropdown topbar-item">
                        <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-flex align-items-center">
                                  <img class="rounded-circle" width="32" src="{{ Auth::user()->getImageURL() }}" alt="avatar-3">
                             </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                             <!-- item-->
                             <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>

                             {{-- <a class="dropdown-item" href="apps-chat.html">
                                  <i class="bx bx-message-dots text-muted fs-18 align-middle me-1"></i><span class="align-middle">Messages</span>
                             </a>

                             <a class="dropdown-item" href="pages-pricing.html">
                                  <i class="bx bx-wallet text-muted fs-18 align-middle me-1"></i><span class="align-middle">Pricing</span>
                             </a> --}}
                             <a class="dropdown-item" href="{{ route('admin.help.index') }}">
                                  <i class="bx bx-help-circle text-muted fs-18 align-middle me-1"></i><span class="align-middle">Help</span>
                             </a>
                             {{-- <a class="dropdown-item" href="auth-lock-screen.html">
                                  <i class="bx bx-lock text-muted fs-18 align-middle me-1"></i><span class="align-middle">Lock screen</span>
                             </a> --}}

                             <div class="dropdown-divider my-1"></div>

                             <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger">
                                    <i class="bx bx-log-out fs-18 align-middle me-1"></i><span class="align-middle">Logout</span>
                                </button>
                             </form>

                        </div>
                   </div>
              </div>
         </div>
    </div>
</header>
