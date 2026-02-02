<x-layout>
    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{ asset('assets/img/breadcrumb/breadcrumb-img.png') }}" alt="">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Contact Us</h1>

                <div class="breadcrumb-list " >
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>
                        
                    <a href="/">Home</a>
                    <span>Contact Us</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- core-feature-start -->
    <section class="bs-core-feature-6-area  pt-125 ">
        <div class="container bs-container-1">
            <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
            <div class="bs-core-feature-6-wrap">

                <!-- single-item -->
                <div class="bs-core-feature-4-item wow fadeInRight" >
                    <h4 class="bs-h-4 item-title">
                        <a href="#" aria-label="name">Address</a>
                    </h4>
                    <div class="item-icon">
                        <img data-cursor="-opaque" src="{{ asset('assets/img/core-features/cf-4-icon-1.svg') }}" alt="">
                    </div>
                    <p class="bs-p-4 item-disc">4517 Washington Ave. Manchester, Kentucky 39495</p>
                </div>

                <!-- single-item -->
                <div class="bs-core-feature-4-item wow fadeInRight" >
                    <h4 class="bs-h-4 item-title">
                        <a href="#" aria-label="name">Emails Address</a>
                    </h4>
                    <div class="item-icon">
                        <img data-cursor="-opaque" src="{{ asset('assets/img/core-features/cf-4-icon-1.svg') }}" alt="">
                    </div>
                    <a href="#" class="bs-p-4 item-disc">kenzi.lawson@example.com</a>
                    <a href="#" class="bs-p-4 item-disc">sara.cruz@example.com</a>
                </div>

                <!-- single-item -->
                <div class="bs-core-feature-4-item wow fadeInRight" >
                    <h4 class="bs-h-4 item-title">
                        <a href="#" aria-label="name">Call Us</a>
                    </h4>
                    <div class="item-icon">
                        <img data-cursor="-opaque" src="{{ asset('assets/img/core-features/cf-4-icon-1.svg') }}" alt="">
                    </div>
                    <a href="#" class="bs-p-4 item-disc">(406) 555-0120</a>
                    <a href="#" class="bs-p-4 item-disc">(208) 555-0112</a>
                </div>

            </div>
            <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        </div>
    </section>
    <!-- core-feature-end -->

    <!-- contact-form-start -->
    <section class="bs-contact-6-area pt-130 pb-160">
        <div class="container bs-container-1">
            <div class="bs-contact-6-wrap">

                <div class="bs-contact-6-img wa-fix wa-img-cover">
                    <img src="{{ asset('assets/img/contact/c6-img-1.png') }}" alt="">
                </div>

                <div class="bs-contact-6-content">

                    <!-- section-title -->
                    <div class="bs-about-1-sec-title mb-30">
                        <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize">
                            <span class="icon">
                                <img src="{{ asset('assets/img/illus/star-shape.png') }}" alt="">
                            </span>
                            Contact us
                        </h6>
                        <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">Let’s talk about your dream project.</h2>
                    </div>


                    <form id="contact-form" action="#" method="post" class="bs-form-1 bs-career-single-form">
                        <div class="form-messages"></div>

                        <div class="bs-form-1-item">
                            <label class="bs-form-1-item-label" for="name">Name</label>
                            <input id="name" class="bs-form-1-item-input "  type="text" name="name" placeholder="e.g. Oliver Spiteri">
                        </div>

                        <div class="bs-form-1-item">
                            <label class="bs-form-1-item-label" for="phone">phone</label>
                            <input id="phone" class="bs-form-1-item-input " type="tel" name="phone" placeholder="+44 20 8980 9731  |">
                        </div>
                        
                        <div class="bs-form-1-item">
                            <label class="bs-form-1-item-label" for="email">email</label>
                            <input id="email" class="bs-form-1-item-input " type="email" name="email" placeholder="info@forgexindustry.co.uk">
                        </div>

                        <div class="bs-form-1-item">
                            <label class="bs-form-1-item-label" for="message">Message</label>
                            <textarea class="bs-form-1-item-input" name="message" id="message" placeholder="Write your message here..."></textarea>
                        </div>

                        <div class="bs-form-1-item  ">
                            <button class="bs-btn-1" type="submit" >
                                <span class="text">
                                     submit now
                                </span>
                                <span class="icon">
                                    <i class="fa-solid fa-right-long"></i>
                                    <i class="fa-solid fa-right-long"></i>
                                </span>
                                <span class="shape"></span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- contact-form-end -->

    <!-- map-start -->
    <div class="bs-contact-page-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.278199277135!2d144.95878241188686!3d-37.80695223353258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ccad15a389%3A0x2325bf0a785e45bc!2sibis%20Melbourne%20-%20Hotel%20%26%20Apartments!5e0!3m2!1sen!2sbd!4v1738045355332!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- map-end -->
    
    <!-- office-start -->
    <section class="bs-office-1-area wa-fix mt-50">
        <div class="container bs-container-1">
            <div class="bs-office-1-wrap">

                <div class="bs-office-1-left">

                    <!-- section-title -->
                    <div class="bs-faq-1-sec-title mb-35">
                        <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize">
                            <span class="icon">
                                <img src="{{ asset('assets/img/illus/star-shape.png') }}" alt="">
                            </span>
                            we're investing SINCE 1990
                        </h6>
                        <h2 class="bs-sec-title-1 wa-split-right wa-capitalize" data-cursor="-opaque">as a national leader</h2>
                    </div>

                    <!-- card -->
                    <div class="bs-office-1-item">

                        <!-- single-card -->
                        <div class="bs-office-1-card wa-clip-left-right">
                            <div class="card-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/office/o1-img-1.png') }}" alt="">
                            </div>
                            <h5 class="bs-h-1 title">lyon</h5>
                            <p class="bs-p-1 disc">25,Rue Saint Jermoe 89883 Lyon . France </p>
                            <a href="#" class="link bs-p-1">+22 (0)3 789 41 41</a>
                            <a href="#" class="link bs-p-1">see on maps</a>
                        </div>

                        <!-- single-card -->
                        <div class="bs-office-1-card wa-clip-left-right">
                            <div class="card-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/office/o1-img-2.png') }}" alt="">
                            </div>
                            <h5 class="bs-h-1 title">Culture</h5>
                            <p class="bs-p-1 disc">81 Sierra Street Kings Mountain, NC 28086</p>
                            <a href="#" class="link bs-p-1">+28 (0)3 978 41 97</a>
                            <a href="#" class="link bs-p-1">see on maps</a>
                        </div>

                        <!-- single-card -->
                        <div class="bs-office-1-card wa-clip-left-right">
                            <div class="card-img wa-fix wa-img-cover">
                                <img src="{{ asset('assets/img/office/o1-img-3.png') }}" alt="">
                            </div>
                            <h5 class="bs-h-1 title">Architectural </h5>
                            <p class="bs-p-1 disc">9828 Myrtle Drive Gainesville, VA 20155</p>
                            <a href="#" class="link bs-p-1">+22 (0)5 100 80 77</a>
                            <a href="#" class="link bs-p-1">see on maps</a>
                        </div>
                    </div>
                </div>

                <div class="bs-office-1-bg-img wa-fix">
                    <img class="wa-slideInUp" src="{{ asset('assets/img/office/o1-bg-img-1.png') }}" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- office-end -->
</x-layout>