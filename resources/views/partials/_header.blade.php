        <header class="transparent">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="column">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
                            <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                            <!-- social icons -->
                            <div class="column social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                <a href="#"><i class="fa-brands fa-skype"></i></a>
                                <a href="#"><i class="fa-brands fa-dribbble"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo" src="{{ asset('assets/img/logo/logo-1.png') }}" alt="" style="max-height: 50px;">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav class="md-flex">
                            <ul id="mainmenu">
                                <li><a href="{{ route('home') }}">Home<span></span></a></li>
                                <li><a href="{{ route('projects.index') }}">Projects</a></li>
                                <li><a href="{{ route('team') }}">Our Team</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mainmenu close -->
                    </div>
                </div>
            </div>
        </header>