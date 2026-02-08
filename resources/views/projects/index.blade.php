<x-layout title="Gallery">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/bg.css') }}" type="text/css">
    @endpush

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Gallery</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="sep">/</li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-top no-bottom">
        <!-- section begin -->
        <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
            <div class="container">

                <div class="spacer-single"></div>

                <!-- portfolio filter begin -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                            <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                            @foreach($categories as $category)
                                <li><a href="#" data-filter=".{{ \Illuminate\Support\Str::slug($category) }}">{{ $category }}</a></li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <!-- portfolio filter close -->

                <div id="gallery" class="row grid_gallery gallery de-gallery wow fadeInUp" data-wow-delay=".3s">

                    @foreach($projects as $project)
                    <!-- gallery item -->
                    <div class="col-md-4 item {{ \Illuminate\Support\Str::slug($project->category) }}">
                        <div class="picframe">
                            <a href="{{ route('projects.show', $project) }}">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">{{ $project->title }}</span>
                                    </span>
                                </span>
                            </a>
                            <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->title }}" />
                        </div>
                    </div>
                    <!-- close gallery item -->
                    @endforeach

                </div>

            </div>

        </section>
        <!-- section close -->


        <!-- section begin -->
        <section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action">
            <a href="{{ route('contact') }}" class="btn btn-line black btn-big">Get Quotation</a>
        </section>
        <!-- logo carousel section close -->

    </div>
</x-layout>
