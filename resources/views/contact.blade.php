<x-layout title="Contact Us">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/bg.css') }}" type="text/css">
    @endpush
    @push('scripts')
        <script src="{{ asset('js/validation.js') }}"></script>
    @endpush

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="sep">/</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-top">
        <section class="no-top" aria-label="map-container">
            <div class="map-container map-fullwidth">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.278199277135!2d144.95878241188686!3d-37.80695223353258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642ccad15a389%3A0x2325bf0a785e45bc!2sibis%20Melbourne%20-%20Hotel%20%26%20Apartments!5e0!3m2!1sen!2sbd!4v1738045355332!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <h3>Send Us Message</h3>
                    <form name="contactForm" id='contact_form' method="post" action='#'>
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <p id='submit'>
                                    <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                </p>
                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="sidebar" class="col-md-4">

                    <div class="widget widget_text">
                        <h3>Contact Info</h3>
                        <address>
                            <span>Riyadh, Saudi Arabia</span>
                            <span><strong>Phone:</strong>+966 53 090 8971</span>
                            <span><strong>Fax:</strong>(208) 333 9298</span>
                            <span><strong>Email:</strong><a href="mailto:Architecture@Namaq.com">Architecture@Namaq.com</a></span>
                            <span><strong>Web:</strong><a href="{{ route('home') }}">http://namaq.com</a></span>
                            <span><strong>Open</strong>Sunday - Friday 08:00 - 18:00</span>
                        </address>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>