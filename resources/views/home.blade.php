<x-layout body_class="bs-home-4">
    @php
        $heroSection = \App\Models\PageSection::where('key', 'home_hero')->first();
    @endphp
    <!-- hero-start -->
    <section class="bs-hero-4-area wa-p-relative pt-90 wa-fix">
        <div class="container bs-container-2">
            <div class="bs-hero-4-content">
                @if($heroSection && $heroSection->title)
                    <h1 class="bs-hero-4-title bs-h-4 wa-split-y cd-headline clip " data-split-delay="1s">
                        {!! $heroSection->title !!}
                    </h1>
                @else
                    <h1 class="bs-hero-4-title bs-h-4 wa-split-y cd-headline clip " data-split-delay="1s">
                        Architecture & Design Bureau Based in                                         
                        <span class="cd-words-wrapper single-headline">
                            <b class="is-visible">canada</b>
                            <b>australia</b>
                            <b>france</b>
                            <b>Singapore</b>
                        </span>
                    </h1>
                @endif
                <div class="inner-div">
                    <a href="#" aria-label="name" class="bs-hero-4-circle-btn wa-magnetic-btn">
                        <span class="btn-icon ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00001 7C8.00001 6.73478 8.10537 6.48043 8.2929 6.29289C8.48044 6.10536 8.73479 6 9.00001 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8947 6.48043 18 6.73478 18 7V15C18 15.2652 17.8947 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16C16.7348 16 16.4804 15.8946 16.2929 15.7071C16.1054 15.5196 16 15.2652 16 15V9.414L7.70701 17.707C7.51841 17.8892 7.26581 17.99 7.00361 17.9877C6.74141 17.9854 6.4906 17.8802 6.30519 17.6948C6.11978 17.5094 6.01461 17.2586 6.01234 16.9964C6.01006 16.7342 6.11085 16.4816 6.29301 16.293L14.586 8H9.00001C8.73479 8 8.48044 7.89464 8.2929 7.70711C8.10537 7.51957 8.00001 7.26522 8.00001 7Z" fill="var(--primary-color, #F16319)"/>
                            </svg>
                        </span>
                        <img src="{{ asset('assets/img/illus/h4-circle-text.png') }}" alt="">
                    </a>
                    <p class="bs-p-4 bs-hero-4-disc wa-split-y" data-split-delay="1.6s">
                        {{ $heroSection?->subtitle ?? 'Architectural styles and trends evolve over time, influenced by cultural shifts, technological advancements, and changing societal needs.' }}
                    </p>
                </div>
            </div>
        </div>

        <!-- slider -->
        <div class="bs-hero-4-slider">

            <div class="bs-hero-4-slider-img">
                <div class="swiper-container bs-h4-img-active wa-fix">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    @if($heroSection && $heroSection->image)
                                        <img src="{{ asset('storage/' . $heroSection->image) }}" alt="">
                                    @else
                                        <img src="{{ asset('assets/img/hero/h4-img-1.png') }}" alt="">
                                    @endif
                                </div>
                                <!-- trusted -->
                                <div class="bs-hero-4-slider-img-item-trusted">
                                    <h5 class="bs-h-4 title">trusted</h5>
                                    <p class="bs-p-4 ratting" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        4.8 view
                                    </p>

                                    <p class="bs-p-4 disc">
                                        discover the architectural
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img src="{{ asset('assets/img/hero/h4-img-2.png') }}" alt="">
                                </div>
                                <!-- trusted -->
                                <div class="bs-hero-4-slider-img-item-trusted">
                                    <h5 class="bs-h-4 title">trusted</h5>
                                    <p class="bs-p-4 ratting" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        4.8 view
                                    </p>

                                    <p class="bs-p-4 disc">
                                        discover the architectural
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img src="{{ asset('assets/img/hero/h4-img-3.png') }}" alt="">
                                </div>
                                <!-- trusted -->
                                <div class="bs-hero-4-slider-img-item-trusted">
                                    <h5 class="bs-h-4 title">trusted</h5>
                                    <p class="bs-p-4 ratting" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        4.8 view
                                    </p>

                                    <p class="bs-p-4 disc">
                                        discover the architectural
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img src="{{ asset('assets/img/hero/h4-img-4.png') }}" alt="">
                                </div>
                                <!-- trusted -->
                                <div class="bs-hero-4-slider-img-item-trusted">
                                    <h5 class="bs-h-4 title">trusted</h5>
                                    <p class="bs-p-4 ratting" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        4.8 view
                                    </p>

                                    <p class="bs-p-4 disc">
                                        discover the architectural
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bs-hero-4-slider-thum">
                <div class="swiper-container bs-h4-thum-active wa-fix">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img src="{{ asset('assets/img/hero/h4-thum-1.png') }}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img src="{{ asset('assets/img/hero/h4-thum-2.png') }}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img src="{{ asset('assets/img/hero/h4-thum-3.png') }}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img src="{{ asset('assets/img/hero/h4-thum-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="bs-hero-4-big-title bs-h-4 wa-split-up" data-split-delay="1.5s">Architecture</h2>
        </div>

        
        <div class="bs-hero-4-bg" data-background="{{ asset('assets/img/hero/h4-bg.png') }}"></div>
    </section>
    <!-- hero-end -->

    <!-- core-feature-start -->
    <section class="bs-core-feature-4-area pt-80 pb-80">
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <div class="bs-core-feature-4-wrap">

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <h4 class="bs-h-4 item-title">
                    <a href="#" aria-label="name">creative ideas</a>
                </h4>
                <div class="item-icon">
                    <img data-cursor="-opaque" src="{{ asset('assets/img/core-features/cf-4-icon-1.svg') }}" alt="">
                </div>
                <p class="bs-p-4 item-disc">From timeless, branded boutiques and inclusive community spaces, everything we do is inspired by you.</p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.2s">
                <h4 class="bs-h-4 item-title">
                    <a href="#" aria-label="name">Uniqueness</a>
                </h4>
                <div class="item-icon">
                    <img data-cursor="-opaque" src="{{ asset('assets/img/core-features/cf-4-icon-2.svg') }}" alt="">
                </div>
                <p class="bs-p-4 item-disc">You will receive a custom, one-site-does not-fill-all design that is entirely bespoke and unique for you.</p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="bs-h-4 item-title">
                    <a href="#" aria-label="name">High Efficiency</a>
                </h4>
                <div class="item-icon">
                    <img data-cursor="-opaque" src="{{ asset('assets/img/core-features/cf-4-icon-3.svg') }}" alt="">
                </div>
                <p class="bs-p-4 item-disc">Your project will be massively effective. There will be minimal revisions along the way delivered on time.</p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.6s">
                <h4 class="bs-h-4 item-title">
                    <a href="#" aria-label="name">Best Solution</a>
                </h4>
                <div class="item-icon">
                    <img data-cursor="-opaque" src="{{ asset('assets/img/core-features/cf-4-icon-4.svg') }}" alt="">
                </div>
                <p class="bs-p-4 item-disc">You will receive all the design solutions you need along with the finest planning advice from a strategically.</p>
            </div>

        </div>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
    </section>
    <!-- core-feature-end -->

    <!-- about-start -->
    <section class="bs-about-4-area pt-45 pb-125 wa-fix">
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4 ">
                <span class="text">about us</span>
                <span class="icon">
                    <img src="{{ asset('assets/img/illus/subtitle-4-icon.svg') }}" alt="">
                </span>
            </h5>

            <div class="bs-about-4-wrap">

                <!-- left-content -->
                <div class="bs-about-4-content">
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Innovative Architecture Rooted in Purpose and Vision.</h2>

                    <div class="inner-div">
                        <p class="bs-p-4 disc wa-fadeInUp">At Namaq, we design spaces that blend innovation, functionality, and timeless aesthetics, creating environments that inspire and elevate daily living.</p>
                        <div class="btn-wrap wa-fadeInUp">
                            <a href="/about" aria-label="name" class="bs-pr-btn-2">
                                <span class="text" data-back="know about us" data-front="know about us"></span>
                                <span class="line-1" ></span>
                                <span class="line-2" ></span>
                                <span class="box box-1" ></span>
                                <span class="box box-2" ></span>
                                <span class="box box-3" ></span>
                                <span class="box box-4" ></span>
                            </a>
                        </div>
                    </div>

                    <div class="illus wa-clip-left-right">
                        <img src="{{ asset('assets/img/about/a4-illus-1.png') }}" alt="">
                    </div>

                    <!-- feature -->
                    <div class="bs-about-4-feature">

                        <!-- single -->
                        <div class="bs-about-4-feature-single wow fadeInRight">
                            <div class="item-icon">
                                <i class="flaticon-denver flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 item-title">
                                <a href="#" aria-label="name">modern Design</a>
                            </h4>
                            <p class="bs-p-4 item-disc">post no so what deal evil rent by real in. but her ready lived spite solid</p>
                        </div>

                        <!-- single -->
                        <div class="bs-about-4-feature-single wow fadeInRight" data-wow-delay=".2s">
                            <div class="item-icon">
                                <i class="flaticon-goodwill-1 flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 item-title">
                                <a href="#" aria-label="name">quality work</a>
                            </h4>
                            <p class="bs-p-4 item-disc">collaboration is at the core of our process as our architects work.</p>
                        </div>

                    </div>
                </div>
                
                <div class="bs-about-4-right">

                    <div class="bs-about-4-project wa-bg-default wa-parallax-item-right-left" data-background="{{ asset('assets/img/about/a4-bg-img-1.png') }}" >
                        <div class="icon">
                            <i class="flaticon-right-arrow flaticon"></i>
                        </div>
                        <h4 class="bs-h-4 title">
                            <a href="/projects" aria-label="name">see projects</a>
                        </h4>
                        <p class="bs-p-4 disc">discover the architecture and design projects team with Namaq.</p>
                    </div>

                    <div class="bs-about-4-img wa-fix wa-img-cover">
                        <img class="wa-parallax-img" src="{{ asset('assets/img/about/a4-img-1.png') }}" alt="">
                    </div>

                    <div class="illus-2">
                        <img  src="{{ asset('assets/img/about/a4-illus-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-end -->

    <!-- video-start -->
    <section class="bs-video-4-area">
        <div class="bs-video-4-content wa-p-relative wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{ asset('assets/img/video/v4-img-1.png') }}" alt="">

            <div class="bs-video-4-text">
                <div class="bs-video-4-marquee-active">
                    <h4 class="bs-h-1 bs-video-4-text-item wa-split-text">luxury Architecture </h4>
                </div>
            </div>
        </div>
    </section>
    <!-- video-end -->

    <!-- services-start -->
    <section class="bs-services-4-area pt-100 wa-fix " data-background="{{ asset('assets/img/services/s4-bg.png') }}">
        <div class="bs-services-4-img wa-fix wa-img-cover wa-slideInLeft">
            <img src="{{ asset('assets/img/services/s4-img-1.png') }}" alt="">
        </div>
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4 bs-services-4-subtitle">
                <span class="text">services</span>
                <span class="icon">
                    <img src="{{ asset('assets/img/illus/subtitle-4-icon-2.svg') }}" alt="">
                </span>
            </h5>

            <div class="bs-services-4-wrap">

                <!-- left-content -->
                <div class="bs-services-4-content">

                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Transforming Visions into Timeless Architecture.</h2>

                    <p class="bs-p-4 disc wa-fadeInUp">At Namaq, we design spaces that blend innovation, functionality, and timeless aesthetics, creating environments that inspire and elevate daily living.</p>

                    <div class="btn-wrap wa-fadeInUp">
                        <a href="#" aria-label="name" class="bs-pr-btn-2">
                            <span class="text" data-back="view all services" data-front="view all services"></span>
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="box box-1"></span>
                            <span class="box box-2"></span>
                            <span class="box box-3"></span>
                            <span class="box box-4"></span>
                        </a>
                    </div>
                </div>

                <!-- right-item -->
                <div class="bs-services-4-item">

                    <!-- single-item -->
                    <div class="bs-services-4-item-single wa-bg-default active " data-background="{{ asset('assets/img/services/s4-card-bg.png') }}">
                        <div class="active-content">
                            <h4 class="bs-h-1 title">
                                <a href="#" aria-label="name" class="wa-line-limit has-line-2">architectural design</a>
                            </h4>
                            <div class="main-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/services/s4-img-2.png') }}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">Our architectural design services combine innovative concepts with functional solutions to create spaces that inspire and perform.</p>
                        </div>
                        <div class="default-content">
                            <div class="img-2 wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/services/s4-img-2.png') }}" alt="">
                            </div>
                            <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                                architectural design
                            </h4>
                        </div>
                    </div>

                    <!-- single-item -->
                    <div class="bs-services-4-item-single wa-bg-default " data-background="{{ asset('assets/img/services/s4-card-bg.png') }}">
                        <div class="active-content">
                            <h4 class="bs-h-1 title">
                                <a href="#" aria-label="name" class="wa-line-limit has-line-2">Modern home interior</a>
                            </h4>
                            <div class="main-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/services/s4-img-3.png') }}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">Our architectural design services combine innovative concepts with functional solutions to create spaces that inspire and perform.</p>
                        </div>
                        <div class="default-content">
                            <div class="img-2 wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/services/s4-img-3.png') }}" alt="">
                            </div>
                            <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                                Modern home interior
                            </h4>
                        </div>
                    </div>

                    <!-- single-item -->
                    <div class="bs-services-4-item-single wa-bg-default " data-background="{{ asset('assets/img/services/s4-card-bg.png') }}">
                        <div class="active-content">
                            <h4 class="bs-h-1 title">
                                <a href="#" aria-label="name" class="wa-line-limit has-line-2">Resilient Structures</a>
                            </h4>
                            <div class="main-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/services/s4-img-4.png') }}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">Our architectural design services combine innovative concepts with functional solutions to create spaces that inspire and perform.</p>
                        </div>
                        <div class="default-content">
                            <div class="img-2 wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/services/s4-img-4.png') }}" alt="">
                            </div>
                            <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                                Resilient Structures
                            </h4>
                        </div>
                    </div>

                    <!-- single-item -->
                    <div class="bs-services-4-item-single wa-bg-default " data-background="{{ asset('assets/img/services/s4-card-bg.png') }}">
                        <div class="active-content">
                            <h4 class="bs-h-1 title">
                                <a href="#" aria-label="name" class="wa-line-limit has-line-2">Interior <br> Design</a>
                            </h4>
                            <div class="main-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/services/s4-img-5.png') }}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">Our architectural design services combine innovative concepts with functional solutions to create spaces that inspire and perform.</p>
                        </div>
                        <div class="default-content">
                            <div class="img-2 wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/services/s4-img-5.png') }}" alt="">
                            </div>
                            <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                                Interior Design
                            </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- services-end -->

    <!-- team-start -->
    <section class="bs-team-4-area pt-130 pb-100 wa-fix">
        <div class="container bs-container-2">

            
            <h5 class="bs-subtitle-4 bs-team-4-subtitle">
                <span class="text">team member</span>
                <span class="icon">
                    <img src="{{ asset('assets/img/illus/subtitle-4-icon.svg') }}" alt="">
                </span>
            </h5>

            <div class="bs-team-4-wrap">

                <!-- left-content -->
                <div class="bs-team-4-content">

                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Introducing One of Our Outstanding Team Members</h2>

                    <p class="bs-p-4 disc wa-fadeInUp">Meet one of our outstanding team members, whose expertise and dedication play a vital role in delivering exceptional results. Their innovative approach and passion.</p>

                    <div class="btn-wrap wa-fadeInUp">
                        <a href="/team" aria-label="name" class="bs-pr-btn-2">
                            <span class="text" data-back="view all team" data-front="view all team"></span>
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="box box-1"></span>
                            <span class="box box-2"></span>
                            <span class="box box-3"></span>
                            <span class="box box-4"></span>
                        </a>
                    </div>
                </div>

                <!-- right-img -->
                <div class="bs-team-4-img wa-fix wa-img-cover wa-clip-left-right">
                    <img src="{{ asset('assets/img/team/t4-big-img.png') }}" alt="">
                </div>
            </div>

            <!-- member -->
            <div class="bs-team-4-member">

                <!-- single-member -->
                <div class="bs-team-4-member-single">
                    <div class="member-img wa-fix wa-img-cover">
                        <a href="#" data-cursor-text="Details">
                            <img src="{{ asset('assets/img/team/t4-img-1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 name">
                            <a href="#" aria-label="name">eleanor pena</a>
                        </h4>
                        <p class="bs-p-4 bio">Sr. Architect</p>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                        <span class="line-4"></span>
                    </div>
                </div>

                <!-- single-member -->
                <div class="bs-team-4-member-single">
                    <div class="member-img wa-fix wa-img-cover">
                        <a href="#" data-cursor-text="Details">
                            <img src="{{ asset('assets/img/team/t4-img-2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 name">
                            <a href="#" aria-label="name">Leslie Alexander</a>
                        </h4>
                        <p class="bs-p-4 bio">Architect designer</p>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                        <span class="line-4"></span>
                    </div>
                </div>

                <!-- single-member -->
                <div class="bs-team-4-member-single">
                    <div class="member-img wa-fix wa-img-cover">
                        <a href="#" data-cursor-text="Details">
                            <img src="{{ asset('assets/img/team/t4-img-3.png') }}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 name">
                            <a href="#" aria-label="name">Kristin Watson</a>
                        </h4>
                        <p class="bs-p-4 bio">marketing</p>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                        <span class="line-4"></span>
                    </div>
                </div>

                <!-- single-member -->
                <div class="bs-team-4-member-single">
                    <div class="member-img wa-fix wa-img-cover">
                        <a href="#" data-cursor-text="Details">
                            <img src="{{ asset('assets/img/team/t4-img-4.png') }}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 name">
                            <a href="#" aria-label="name">Dianne Russell</a>
                        </h4>
                        <p class="bs-p-4 bio">JR. Architect</p>
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                        <span class="line-3"></span>
                        <span class="line-4"></span>
                    </div>
                </div>

            </div>

            
        </div>
    </section>
    <!-- team-end -->

    <!-- expertise-start -->
    <section class="bs-expertise-4-area wa-fix">
        <div class="container bs-container-2">

            <div class="bs-expertise-4-wrap">
                <h3 class="bs-h-4 bs-expertise-4-title">
                    <span class="wa-split-up wa-capitalize-hidden" >Namaq</span>
                    <span class="wa-split-up wa-capitalize-hidden" data-split-delay="1s">Architecture</span>
                </h3>


                <div class="bs-expertise-4-box" txa-matter-scene="true">

                    <div class="single-tag" txa-matter-item>
                        <span class="single-tag-item bs-p-4" >
                            <span class="icon has-clr-3">
                                <i class="flaticon-check flaticon"></i>
                            </span>
                            <span class="text">Interior Design</span>
                        </span>
                    </div>

                    <div class="single-tag" txa-matter-item>
                        <span class="single-tag-item bs-p-4" >
                            <span class="text">3D Modeling</span>
                            <span class="icon has-clr-3">
                                <i class="flaticon-check flaticon"></i>
                            </span>
                        </span>

                    </div>

                    <div class="single-tag" txa-matter-item>
                        <span class="single-tag-item bs-p-4" >
                            <span class="icon has-clr-3">
                                <i class="flaticon-check flaticon"></i>
                            </span>
                            <span class="text">Commercial Design</span>
                        </span>
                    </div>

                    <div class="single-tag" txa-matter-item>
                        <span class="single-tag-item bs-p-4 " >
                            <span class="text">Residential Interior</span>
                            <span class="icon has-clr-2">
                                <i class="flaticon-check flaticon"></i>
                            </span>
                       </span>
                    </div>

                    <div class="single-tag" txa-matter-item>
                        <span class="single-tag-item bs-p-4" >
                            <span class="text">space planning</span>
                            <span class="icon">
                                <i class="flaticon-check flaticon"></i>
                            </span>
                       </span>
                    </div>

                    <div class="single-tag" txa-matter-item>
                        <span class="single-tag-item bs-p-4" >
                            <span class="icon">
                                <i class="flaticon-check flaticon"></i>
                            </span>
                            <span class="text">home decoration</span>
                       </span>
                    </div>
                    

                 </div>
            </div>

        </div>
    </section>
    <!-- expertise-end -->

    <!-- choose-start -->
    <section class="bs-choose-4-area wa-bg-default wa-fix pb-120" data-background="{{ asset('assets/img/choose/ch4-bg-img-1.png') }}">
        <div class="container bs-container-2">
            <div class="bs-choose-4-wrap">

                <div class="bs-choose-4-content-height">
                    <!-- left-content -->
                    <div class="bs-choose-4-content-pin">
                        <div class="bs-choose-4-content">

                            <h5 class="bs-subtitle-4 bs-choose-4-subtitle">
                                <span class="text">Why choose us</span>
                                <span class="icon">
                                    <img src="{{ asset('assets/img/illus/subtitle-4-icon-2.svg') }}" alt="">
                                </span>
                            </h5>

                            <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Trusted Expert in Architectural Design and Innovation.</h2>

                            <p class="bs-p-4 disc wa-fadeInUp">A trusted expert in architectural design and innovation, our team member brings a wealth of knowledge and creativity to every project. Their commitment to excellence.</p>

                            <div class="bs-choose-4-progress">

                                <!-- single-item -->
                                <div class="bs-choose-4-progress-item">
                                    <h5 class="bs-p-1 progress-title" style="width: 84%;">
                                        <span >renovation</span>
                                        <span class="counter">84</span>%
                                    </h5>
                                    <div class="progress-line">
                                        <div class="progress-line-fill wa-progress" style="width: 84%;"></div>
                                    </div>
                                </div>

                                <!-- single-item -->
                                <div class="bs-choose-4-progress-item">
                                    <h5 class="bs-p-1 progress-title" style="width: 72%;">
                                        <span >architecture</span>
                                        <span class="counter">72</span>%
                                    </h5>
                                    <div class="progress-line">
                                        <div class="progress-line-fill wa-progress" style="width: 72%;"></div>
                                    </div>
                                </div>

                                <!-- single-item -->
                                <div class="bs-choose-4-progress-item">
                                    <h5 class="bs-p-1 progress-title" style="width: 96%;">
                                        <span >interior</span>
                                        <span class="counter">96</span>%
                                    </h5>
                                    <div class="progress-line">
                                        <div class="progress-line-fill wa-progress" style="width: 96%;"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
    



                <!-- right-play-btn -->
                <div class="bs-choose-4-right d-flex justify-content-center align-items-center">

                    <a href="https://www.youtube.com/watch?v=TdTudAOl37s" aria-label="name" class="bs-play-btn-4 wa-magnetic popup-video">
                        <span class="icon wa-magnetic-btn">
                            <i class="flaticon-play flaticon"></i>
                        </span>
                    </a>

                </div>
            </div>

            <div class="bs-choose-4-feature">

                <!-- single-feature -->
                <div class="item-margin">
                    <div class="bs-choose-4-feature-single">
                        <div class="icon">
                            <i class="flaticon-minimalist flaticon"></i>
                        </div>
                        <h4 class="bs-h-4 title">
                            <a href="#" aria-label="name">visionary design</a>
                        </h4>
                        <p class="bs-p-4 disc">Our team is not just about blueprints; we're dream weavers. We bring your visions to life, crafting spaces that inspire and stand.</p>
                    </div>
                </div>

                <!-- single-feature -->
                <div class="item-margin">
                    <div class="bs-choose-4-feature-single">
                        <div class="icon">
                            <i class="flaticon-blueprint flaticon"></i>
                        </div>
                        <h4 class="bs-h-4 title">
                            <a href="#" aria-label="name">Unyielding Excellence</a>
                        </h4>
                        <p class="bs-p-4 disc">Excellence is our cornerstone. We approach every project with an unwavering commitment to quality, setting the highest.</p>
                    </div>
                </div>

                <!-- single-feature -->
                <div class="item-margin">
                    <div class="bs-choose-4-feature-single">
                        <div class="icon">
                            <i class="flaticon-property-insurance flaticon"></i>
                        </div>
                        <h4 class="bs-h-4 title">
                            <a href="#" aria-label="name">Seamless Functionality</a>
                        </h4>
                        <p class="bs-p-4 disc">We understand that great design should not only inspire but also function seamlessly. Every space we create is designed.</p>
                    </div>
                </div>

                <!-- single-feature -->
                <div class="item-margin">
                    <div class="bs-choose-4-feature-single">
                        <div class="icon">
                            <i class="flaticon-goodwill-1 flaticon"></i>
                        </div>
                        <h4 class="bs-h-4 title">
                            <a href="#" aria-label="name">Time-Tested Trust</a>
                        </h4>
                        <p class="bs-p-4 disc">With a track record of success and a portfolio of satisfied clients, Namaq has earned trust through years of delivering on our promises.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- choose-end -->

    <!-- project-start -->
    <section class="bs-project-4-area pt-125 wa-fix">
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4 bs-project-4-subtitle">
                <span class="text">projects</span>
                <span class="icon">
                    <img src="{{ asset('assets/img/illus/subtitle-4-icon.svg') }}" alt="">
                </span>
            </h5>

            <div class="bs-project-4-height">

                <div class="bs-project-4-content wa-fix ">
                    <h3 class="bs-h-4 big-title title " >recent</h3>
                    <h3 class="bs-h-4 title title-2">
                        <span class="left-text">wo</span>
                        <span class="right-text">rks</span>
                    </h3>
                </div>

                <div class="bs-project-4-card-pin">
                    <div class="bs-project-4-card ">

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-1">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img src="{{ asset('assets/img/projects/p4-img-1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Luxury villas: A fusion of elegance and function.</a>
                                </h5>
                                <ul class="card-details wa-list-style-none">
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Architecture design
                                    </li>
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Building , Wireframes, Visual design
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-2">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img src="{{ asset('assets/img/projects/p4-img-2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Luxury villas: A fusion of elegance and function.</a>
                                </h5>
                                <ul class="card-details wa-list-style-none">
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Architecture design
                                    </li>
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Building , Wireframes, Visual design
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-3">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img src="{{ asset('assets/img/projects/p4-img-3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Luxury villas: A fusion of elegance and function.</a>
                                </h5>
                                <ul class="card-details wa-list-style-none">
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Architecture design
                                    </li>
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Building , Wireframes, Visual design
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-4">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img src="{{ asset('assets/img/projects/p4-img-4.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Luxury villas: A fusion of elegance and function.</a>
                                </h5>
                                <ul class="card-details wa-list-style-none">
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Architecture design
                                    </li>
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Building , Wireframes, Visual design
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>
    <!-- project-end -->

    <!-- testimonial-start -->
    <section class="bs-testimonial-4-area wa-fix wa-p-relative pt-125 pb-50">

        <div class="bs-testimonial-4-bg" data-background="{{ asset('assets/img/testimonial/t4-bg.png') }}"></div>

        <div class="container bs-container-2">
            <div class="bs-testimonial-4-content">
                <h5 class="bs-subtitle-4 ">
                    <span class="text">testimonial</span>
                    <span class="icon">
                        <img src="{{ asset('assets/img/illus/subtitle-4-icon.svg') }}" alt="">
                    </span>
                </h5>
                <div class="inner-div">
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">See What Our Valued Customers Say Our Services.</h2>

                    <div class="btn-wrap">
                        <a href="#" aria-label="name" class="bs-pr-btn-2">
                            <span class="text" data-back="view all more" data-front="view all more"></span>
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="box box-1"></span>
                            <span class="box box-2"></span>
                            <span class="box box-3"></span>
                            <span class="box box-4"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="bs-testimonial-4-slider wa-fadeInUp">
            <div class="swiper-container wa-fix bs-t4-active">
                <div class="swiper-wrapper">

                    <!-- single-slider -->
                    <div class="swiper-slide">
                        <div class="bs-testimonial-4-slider-item">
                            <div class="item-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/testimonial/t4-author-1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="bs-star-1">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="bs-p-4 comment">"The team’s ability to turn our vision into a reality exceeded all expectations. Their attention to detail and innovative designs made our project truly unique."</p>
                                
                                <h4 class="bs-p-4 name">albert flores</h4>
                                <h4 class="bs-p-4 bio">Commercial Project Manager</h4>
                            </div>
                        </div>
                    </div>

                    <!-- single-slider -->
                    <div class="swiper-slide">
                        <div class="bs-testimonial-4-slider-item">
                            <div class="item-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/testimonial/t4-author-2.png') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="bs-star-1">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="bs-p-4 comment">"Working with this architectural firm was a fantastic experience. Their expertise, professionalism, and commitment to quality were evident every step of the way."</p>
                                
                                <h4 class="bs-p-4 name">Kristin Watson</h4>
                                <h4 class="bs-p-4 bio">Project Manager</h4>
                            </div>
                        </div>
                    </div>

                    <!-- single-slider -->
                    <div class="swiper-slide">
                        <div class="bs-testimonial-4-slider-item">
                            <div class="item-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/testimonial/t4-author-3.png') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="bs-star-1">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="bs-p-4 comment">"We couldn’t be more thrilled with the design! The team truly understood our needs and created a functional yet stunning space that we are proud of."</p>
                                
                                <h4 class="bs-p-4 name">Ralph Edwards</h4>
                                <h4 class="bs-p-4 bio">marketing manager</h4>
                            </div>
                        </div>
                    </div>

                    <!-- single-slider -->
                    <div class="swiper-slide">
                        <div class="bs-testimonial-4-slider-item">
                            <div class="item-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/testimonial/t4-author-4.png') }}" alt="">
                            </div>
                            <div class="content">
                                <div class="bs-star-1">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p class="bs-p-4 comment">"Their innovative approach to sustainable design was impressive. We are proud to have a space that not only looks great but also respects the environment."</p>
                                
                                <h4 class="bs-p-4 name">Darrell Steward</h4>
                                <h4 class="bs-p-4 bio">manager</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container ">
            <div class="bs-testimonial-4-slider-btn wa-fadeInUp">
                <div class="btn-elm bs-t4-prev">
                    <i class="fa-solid fa-angle-left"></i>
                    prev
                </div>
                <div class="pagination  wa-p-relative">
                    <div class="bs-t4-pagination"></div>
                </div>
                <div class="btn-elm bs-t4-next">
                    next
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-end -->

    <!-- contact-start -->
    <section class="bs-contact-4-area wa-fix wa-p-relative">
        <div class="bs-contact-4-bg wa-fix wa-img-cover wa-p-relative">
            <img class="wa-parallax-img" src="{{ asset('assets/img/contact/c4-img-1.png') }}" alt="">
            <img src="{{ asset('assets/img/contact/c4-grow-1.png') }}" alt="" class="glow-1">
        </div>
        <div class="container bs-container-2">
            <div class="bs-contact-4-wrap">

                <!-- left-form -->
                <div class="bs-contact-4-form">
                    <h5 class="bs-h-1 title">Get In Touch With Us Today!</h5>

                    <form action="#" class="bs-form-1 ">

                        <div class="bs-form-1-item wa-clip-left-right">
                            <label class="bs-form-1-item-label" for="name">name</label>
                            <input id="name" class="bs-form-1-item-input " type="text" aria-label="name" placeholder="e.g. Oliver Spiteri  |" >
                        </div>

                        <div class="bs-form-1-item wa-clip-left-right">
                            <label class="bs-form-1-item-label" for="phone">phone</label>
                            <input id="phone" class="bs-form-1-item-input " type="number" aria-label="name" placeholder="e.g. +1 877 217 8371" >
                        </div>
                        
                        <div class="bs-form-1-item wa-clip-left-right">
                            <label class="bs-form-1-item-label" for="email">email</label>
                            <input id="email" class="bs-form-1-item-input " type="email" aria-label="name" placeholder="example@email.com" >
                        </div>
                        <div class="bs-form-1-item  wa-clip-left-right">
                            <label class="bs-form-1-item-label" for="message">message</label>
                            <textarea class="bs-form-1-item-input " name="message" id="message" placeholder="write your message here"></textarea>
                        </div>
                        <div class="bs-form-1-item  wa-clip-left-right ">
                            <button type="submit" class="bs-pr-btn-2">
                                <span class="text" data-back="submit now" data-front="submit now"></span>
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="box box-1"></span>
                                <span class="box box-2"></span>
                                <span class="box box-3"></span>
                                <span class="box box-4"></span>
                            </button>
                        </div>

                    </form>
                </div>

                <!-- section-title -->
                <h2 class="bs-sec-title-4 bs-contact-4-title wa-split-right wa-capitalize">500+ trusted partners all over the world.</h2>

                <div class="bs-contact-4-img wa-fix wa-img-cover wa-clip-top-bottom">
                    <img class="wa-parallax-img" src="{{ asset('assets/img/contact/c4-img-2.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- contact-end -->

    <!-- brand-start -->
    <div class="bs-brand-4-area wa-fix mb-130">
        <div class="bs-brand-4-marquee-active">
            <div class="bs-brand-4-wrap wa-fix">
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-1.svg') }}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-2.svg') }}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-3.svg') }}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-4.svg') }}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-5.svg') }}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-6.svg') }}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-7.svg') }}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-8.svg') }}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{ asset('assets/img/brand/b4-logo-9.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- brand-end -->
</x-layout>
