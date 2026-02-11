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
        // Check if intro has been shown in this session
        if (sessionStorage.getItem('introShown')) {
            document.documentElement.classList.add('no-preloader');
        }
    </script>

    @stack('styles')
</head>

<body id="homepage">

    <div id="custom-preloader">
        <video id="video_background" preload="auto" autoplay muted playsinline>
            <source src="{{ asset('videos/intro-white.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div id="wrapper">

        <!-- header begin -->
        @include('partials._header')
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">
            {{ $slot }}
        </div>
        <!-- content close -->

        <!-- footer begin -->
        @include('partials._footer')
        <!-- footer close -->
        
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>    
    <script src="{{ asset('js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('js/jquery.twentytwenty.js') }}"></script>    

    <!-- RS5.0 Core JS Files -->
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js?rev=5.0') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js?rev=5.0') }}"></script>

    <!-- RS5.0 Extensions Files -->
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

    <!-- Page Specific Scripts -->
    @stack('scripts')

    <script>
    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.5, orientation: 'vertical'});
      
      // Custom Video Preloader Logic
      var video = document.getElementById('video_background');
      var preloader = $('#custom-preloader');

      // Helper to finish the intro sequence
      function finishIntro() {
          // Set flag so it doesn't show again in this session
          try {
              sessionStorage.setItem('introShown', 'true');
          } catch(e) {}
          
          preloader.fadeOut(500, function() {
              $(this).remove();
          });
      }

      // 1. Check if we already decided to hide it (via head script)
      if ($('html').hasClass('no-preloader')) {
          preloader.remove();
      } else {
          // 2. If no video element, just hide
          if (!video) {
              finishIntro();
          } else {
              // 3. Attempt to play video
              var playPromise = video.play();
              
              if (playPromise !== undefined) {
                playPromise.then(_ => {
                  // Play started
                  
                  // Helper to hide after video ends or timeout
                  var onComplete = function() {
                      finishIntro();
                      // Remove listeners to avoid double calling
                      video.onended = null;
                  };

                  video.onended = onComplete;
                  
                  // Safety timeout (e.g. 5 seconds)
                  setTimeout(onComplete, 5000); 
                })
                .catch(error => {
                  // Auto-play prevented or error
                  console.log("Autoplay prevented");
                  finishIntro();
                });
              } else {
                  // Video play not supported
                  finishIntro();
              }
          }
      }
    });
    </script>
</body>
</html>