<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <!-- Google Tag (gtag.js) -->
    @if(config('services.google.gtag_id'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.gtag_id') }}"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '{{ config("services.google.gtag_id") }}');
    </script>
    @endif

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
    
    @props(['seo' => null])
    
    <title>{{ $seo?->meta_title ?? $title ?? 'Namaq - Interior Design & Architecture' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $seo?->meta_description ?? 'Namaq is a leading interior design and architecture studio specializing in commercial, residential, and administrative projects.' }}">
    <meta name="keywords" content="{{ $seo?->meta_keywords ?? 'architecture, interior design, construction, saudi arabia, khobar, commercial design, residential design' }}">
    <meta name="author" content="Namaq">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $seo?->meta_title ?? $title ?? 'Namaq - Interior Design & Architecture' }}">
    <meta property="og:description" content="{{ $seo?->meta_description ?? 'Namaq is a leading interior design and architecture studio specializing in commercial, residential, and administrative projects.' }}">
    @if(isset($seo->main_image))
    <meta property="og:image" content="{{ Storage::url($seo->main_image) }}">
    @else
    <meta property="og:image" content="{{ asset('favicon.png') }}">
    @endif

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $seo?->meta_title ?? $title ?? 'Namaq - Interior Design & Architecture' }}">
    <meta property="twitter:description" content="{{ $seo?->meta_description ?? 'Namaq is a leading interior design and architecture studio specializing in commercial, residential, and administrative projects.' }}">
    @if(isset($seo->main_image))
    <meta property="twitter:image" content="{{ Storage::url($seo->main_image) }}">
    @else
    <meta property="twitter:image" content="{{ asset('favicon.png') }}">
    @endif

    <!-- CSS Files
    ================================================== -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/namaq-style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="{{ asset('css/colors/brown.css') }}" type="text/css" id="colors">

    
    <!-- Dynamic Theme Colors -->
    @php
        $primaryColor = $footerSettings?->primary_color ?? '#bf9156';
        $secondaryColor = $footerSettings?->secondary_color ?? '#18191b';
        
        // Convert hex to rgb for --primary-color-1-rgb
        // Fallback to default rgb if hex is invalid or default
        $r = 191; $g = 145; $b = 86; // Default #bf9156
        if (preg_match('/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i', $primaryColor, $matches)) {
            $r = hexdec($matches[1]);
            $g = hexdec($matches[2]);
            $b = hexdec($matches[3]);
        }
        $primaryColorRgb = "$r, $g, $b";
    @endphp
    <style>
        :root {
            --primary-color-1: {{ $primaryColor }};
            --primary-color-1-rgb: {{ $primaryColorRgb }};
            --secondary-color: {{ $secondaryColor }};
            --bg-dark-1: {{ $secondaryColor }};
        }
    </style>
        
    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="{{ asset('revolution/css/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('revolution/css/layers.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('revolution/css/navigation.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/rev-settings.css') }}" type="text/css">
    
    <!-- Custom Font -->
    <link rel="stylesheet" href="{{ asset('css/font-style-2.css') }}" type="text/css">
    
    <style>
        #custom-preloader {
            display: block;
            background-color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999; /* Higher z-index */
        }
        .no-preloader #custom-preloader {
            display: none !important;
        }
        #video_background {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            object-fit: cover; /* Ensure cover */
            z-index: 0;
        }
    </style>
    <noscript>
        <style>#custom-preloader { display: none !important; }</style>
    </noscript>
    <script>
        // Check for 'no-preloader' query param immediately
        if (new URLSearchParams(window.location.search).has('no-preloader')) {
            document.documentElement.classList.add('no-preloader');
        }
    </script>
    @stack('styles')
    
    <!-- Mobile Overrides (Inline to ensure priority) -->
    <style>
        /* iPhone 14 / Mobile Viewport Fixes (max-width: 430px) */
        @media only screen and (max-width: 430px) {
            /* 1. Flex Container for Slide Items (Forces vertical stacking) */
            .rev_slider ul li,
            .rev_slider .tp-revslider-slidesli {
                display: flex !important;
                flex-direction: column !important;
                justify-content: flex-start !important;
                align-items: center !important;
                padding-top: 35vh !important;
            }

            /* 2. Reset RS Wrappers (The hidden containers causing overlap) */
            .tp-parallax-wrap,
            .tp-loop-wrap,
            .tp-mask-wrap {
                position: relative !important;
                top: auto !important;
                left: auto !important;
                right: auto !important;
                bottom: auto !important;
                transform: none !important;
                width: 100% !important;
                text-align: center !important;
                margin-bottom: 5px !important;
                height: auto !important;
            }

            /* 3. Reset Captions */
            .tp-caption {
                position: relative !important;
                display: block !important;
                white-space: normal !important;
                text-align: center !important;
                margin: 0 auto !important;
                left: 0 !important;
                top: 0 !important;
            }

            /* 4. Typography Adjustments (Matched to "Good" Slide) */
            .tp-caption.size-72 {
                font-size: 18px !important;
                line-height: 1.3 !important;
                width: 90% !important;
            }

            .tp-caption.ls-20px {
                font-size: 10px !important;
                letter-spacing: 2px !important;
                margin-top: 10px !important;
            }

            /* 5. Experience Box Fix */
            .de_count.ultra-big {
                width: 100% !important;
                box-sizing: border-box !important;
                padding: 20px !important;
            }
            .de_count.ultra-big h3.timer {
                font-size: 40px !important;
            }

            /* 6. Fix Hero Height */
            .rev_slider_wrapper, 
            .tp-banner-container {
                height: auto !important;
                min-height: 60vh !important;
            }
        }
    </style>
</head>

<body class="">

    <div id="wrapper">
        <!-- header begin -->
        @include('partials._header')
        <!-- header close -->

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            {{ $slot }}
            
        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
        @include('partials._footer')
        <!-- footer close -->
        
    </div>
    
    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
    
    <!-- RS5.0 Core JS Files -->
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>
    
    <!-- RS5.0 Extensions Files -->
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburns.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    
    <script>
        jQuery(document).ready(function() {
            // revolution slider
            jQuery("#slider-revolution").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                delay: 5000,
                navigation: {
                    arrows: {
                        enable: true
                    },
                    bullets: {
                        enable: false,
                        hide_onmobile: false,
                        style: "hermes",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 20,
                        v_offset: 30,
                        space: 5,
                    },
                },
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [800, 700, 600, 500],
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
