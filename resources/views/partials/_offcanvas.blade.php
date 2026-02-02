<!-- offcanvas-start -->
<div class="wa-offcanvas-area  offcanvas_box_active lenis lenis-smooth">
    <div class="wa-offcanvas-wrap ">

        <!-- top -->
        <div class="wa-offcanvas-top">

            <!-- logo -->
            <a href="/" aria-label="name" class="wa-offcanvas-top-logo">
                <img src="{{ asset('assets/img/logo/logo-2.png') }}" alt="">
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
                    <a href="/">home</a>
                </li>

                <li>
                    <a href="/about">about us</a>
                </li>

                <li>
                    <a href="/projects">projects</a>
                </li>

                <li>
                    <a href="/team">team</a>
                </li>

                <li>
                    <a href="/contact-us">Contact </a>
                </li>
                @auth
                    <li>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
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