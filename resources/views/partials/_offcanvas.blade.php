<!-- offcanvas-start -->
<div class="wa-offcanvas-area  offcanvas_box_active lenis lenis-smooth">
    <div class="wa-offcanvas-wrap ">

        <!-- top -->
        <div class="wa-offcanvas-top">

            <!-- logo -->
            <a href="/" aria-label="name" class="wa-offcanvas-top-logo">
                <img src="{{ asset('assets/img/logo/logo-1.png') }}" alt="" style="max-height: 50px;">
            </a>

            <!-- close-btn -->
            <button class="wa-offcanvas-close offcanvas_box_close" aria-label="name" >
                <span></span>
                <span></span>
            </button>

        </div>


        <!-- mobile-menu-list -->
        <nav class="mobile-main-navigation mb-50">
            <ul  class="navbar-nav">
                <li>
                    <a href="{{ route('home') }}">home</a>
                </li>

                <li>
                    <a href="{{ route('about') }}">about us</a>
                </li>

                <li>
                    <a href="{{ route('projects.index') }}">projects</a>
                </li>

                <li>
                    <a href="{{ route('team') }}">team</a>
                </li>

                <li>
                    <a href="{{ route('contact') }}">Contact </a>
                </li>
            </ul>
        </nav>


        <!-- social -->
        <div class="wa-offcanvas-social">
            <h6 class="wa-offcanvas-social-title bs-h-1 ">we're on social media:</h6>

            <div class="wa-offcanvas-social-flex d-flex flex-wrap">
                <a href="#" class="wa-offcanvas-social-link " aria-label="name">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="#" class="wa-offcanvas-social-link " aria-label="name">
                    <i class="fa-brands fa-facebook-f"></i> 
                </a>
                <a href="#" class="wa-offcanvas-social-link " aria-label="name">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="#" class="wa-offcanvas-social-link" aria-label="name">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>

        </div>

    </div>

</div>
<div class="wa-overly"></div>
<!-- offcanvas-end -->