@if(isset($footerSettings))
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>{{ $footerSettings->footer_about_title }}</h3>
                    {!! $footerSettings->footer_about_description !!}
                </div>

                <div class="col-md-3">
                    <div class="widget widget_recent_post">
                        <h3>{{ $footerSettings->footer_news_title }}</h3>
                        <ul>
                            @if(isset($footerLinks))
                                @foreach($footerLinks->where('type', 'news') as $link)
                                    <li><a href="{{ $link->url ?? '#' }}">{{ $link->title }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <h3>Contact Us</h3>
                    <div class="widget widget-address">
                        <address>
                            <span>{{ $footerSettings->footer_contact_address }}</span>
                            <span><strong>Phone:</strong>{{ $footerSettings->footer_contact_phone }}</span>
                            <span><strong>Fax:</strong>{{ $footerSettings->footer_contact_fax }}</span>
                            <span><strong>Email:</strong><a href="mailto:{{ $footerSettings->footer_contact_email }}">{{ $footerSettings->footer_contact_email }}</a></span>
                            <span><strong>Web:</strong><a href="{{ $footerSettings->footer_contact_website }}">{{ $footerSettings->footer_contact_website }}</a></span>
                        </address>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget widget_recent_post">
                        <h3>{{ $footerSettings->footer_services_title }}</h3>
                        <ul>
                            @if(isset($footerLinks))
                                @foreach($footerLinks->where('type', 'service') as $link)
                                    <li><a href="{{ $link->url ?? '#' }}">{{ $link->title }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="container">
                <div class="row align-items-middle">
                    <div class="col-md-3">
                        <img src="{{ asset('assets/img/logo/logo-1.png') }}" class="logo-small" alt="" style="max-height: 50px;"><br>
                    </div>

                    <div class="col-md-6 text-center">
                        {!! $footerSettings->footer_copyright !!}
                    </div>

                    <div class="col-md-3 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-skype"></i></a>
                            <a href="#"><i class="fa-brands fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" id="back-to-top"></a>
        </footer>
@endif
