<x-layout title="About Us">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/bg.css') }}" type="text/css">
    @endpush

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="sep">/</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-top no-bottom">
        <section id="section-about-us-2" class="side-bg no-padding">
            <div class="image-container col-md-5 pull-left" data-delay="0"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-6 " data-animation="fadeInRight" data-delay="200">
                        <div class="inner-padding">
                            <h2>Namaq Architects</h2>

                            <p class="intro">Architecture Design, Visualization, Supervision & Execution.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-mission-vision">
            <div class="container">
                <div class="row align-items-center" style="margin-bottom: 60px;">
                    <div class="col-md-4">
                        <h2 class="style-1">OUR STORY</h2>
                    </div>
                    <div class="col-md-8">
                        <p>NAMAQ Design was born from a passion for timeless aesthetics and functional innovation. What began as a creative vision has grown into a multidisciplinary design studio that transforms spaces into stories merging form, material, and emotion. We believe every space deserves character, and every client deserves a personalized journey.</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <hr style="border-top: 1px solid #ddd; margin: 30px 0;">
                    </div>
                </div>

                <div class="row align-items-center" style="margin-top: 30px;">
                    <div class="col-md-4">
                        <h2 class="style-1">OUR MISSION</h2>
                    </div>
                    <div class="col-md-8">
                        <p>At NAMAQ, our mission is to transform ideas into personalized, timeless spaces. We combine creative design with professional execution to deliver interiors that blend beauty, practicality, and character. We are committed to understanding our clients' needs and exceeding their expectations—every detail, every time.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-testimonial" class="text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 text-center wow fadeInUp">
                        <h1>Customer Says</h1>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                        <div class="spacer-single"></div>
                    </div>
                </div>
                <div id="testimonial-carousel" class="owl-carousel owl-theme de_carousel wow fadeInUp" data-wow-delay=".3s">

                    <div class="item">
                        <div class="de_testi">
                            <blockquote>
                                <p>I'm always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <div class="de_testi_by">
                                    John, Customer
                                </div>
                            </blockquote>

                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi">
                            <blockquote>
                                <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <div class="de_testi_by">
                                    Michael, Customer
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi">
                            <blockquote>
                                <p>I totally recommend your services. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <div class="de_testi_by">
                                    Patrick, Customer
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <div class="item">
                        <div class="de_testi">
                            <blockquote>
                                <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                <div class="de_testi_by">
                                    James, Customer
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
            <a href="{{ route('contact') }}" class="btn btn-line black btn-big">Talk With Us</a>
        </section>
    </div>
</x-layout>