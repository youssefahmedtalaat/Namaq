<!-- header-start -->
<header class="bs-header-1-area {{ $has_breadcrumb? 'has-breadcrumb-2' : '' }}">
    <div class="bs-header-1-row d-flex align-items-center justify-content-between">

        <!-- logo -->
        <a href="/" aria-label="name" class="bs-header-logo-1">
            <img src="{{ asset('assets/img/logo/logo-1.png') }}" alt="">
        </a>

        <!-- action-link -->
        <div class="bs-header-1-action-link d-flex align-items-center ">

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