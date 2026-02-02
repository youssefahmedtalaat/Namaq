<!-- header-start -->
<header class="bs-header-1-area {{ $has_breadcrumb? 'has-breadcrumb-2' : '' }}">
    <div class="bs-header-1-row d-flex align-items-center justify-content-between">

        <!-- logo -->
        <a href="/" aria-label="name" class="bs-header-logo-1">
            @if($generalSettings?->logo)
                <img src="{{ asset('storage/' . $generalSettings->logo) }}" alt="{{ $generalSettings->site_title }}" style="max-height: 50px;">
            @else
                <img src="{{ asset('assets/img/logo/logo-1.png') }}" alt="" style="filter: brightness(0);">
            @endif
        </a>

        <!-- action-link -->
        <div class="bs-header-1-action-link d-flex align-items-center ">

            @auth
                <a href="{{ url('/dashboard') }}" class="bs-h-1" style="margin-right: 20px;">Dashboard</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="bs-h-1" style="margin-right: 20px;">
                        Logout
                    </a>
                </form>
            @else
                <a href="{{ route('login') }}" class="bs-h-1" style="margin-right: 20px;">Login</a>
                <a href="{{ route('register') }}" class="bs-h-1" style="margin-right: 20px;">Register</a>
            @endauth

            <!-- phone-btn -->
            <a href="tel:1697875256" aria-label="name" class="bs-h-1 bs-elm-phone">
                <i class="fa-solid fa-phone"></i>
                Call Us: (+88) 169 787 5256
            </a>

            <!-- pr-btn -->
            <a href="/contact-us" aria-label="name" class="bs-btn-1 header-btn">
                <span class="text">
                    contact us
                </span>
                <span class="shape"></span>
            </a>
            
            <!-- offcanvas-btn -->
            <button type="button" aria-label="name" class="bs-offcanvas-btn-1 btn-span offcanvas_toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="shape"></span>
            </button>

        </div>
    </div>
</header>
<!-- header-end -->