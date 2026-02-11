<x-layout :seo="$project">
    <!-- section begin -->
    <section id="section-welcome" class="full-height text-light" data-bgimage="url({{ Storage::url($project->main_image) }})">
        <div class="center-y">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="spacer-double"></div>
                        <h2 class="style-3">{{ $project->title }}</h2>
                        <div class="spacer-double"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-gallery-carousel" aria-label="section" class="no-top no-bottom text-light bg-color">
        <div class="container-fluid">
            <div class="row g-0 align-items-center">
                <div class="col-md-3 text-center">
                    <div class="spacer-single"></div>
                    <h3 class="mb-3">Project Gallery</h3>
                    <div class="spacer-single"></div>
                </div>
                
                <div class="col-md-9">
                    <div class="owl-custom-nav menu-float" data-target="#gallery-carousel-3">
                        <div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide">
                            @if($project->gallery_images)
                                @foreach($project->gallery_images as $image)
                                    <div class="item s2">
                                        <div class="picframe">
                                            <a class="image-popup-no-margins" href="{{ Storage::url($image) }}">
                                                <span class="overlay-v">
                                                    <span class="pf_text">
                                                        <span class="project-name"><i class="icon_plus_alt2"></i></span>
                                                    </span>
                                                </span>
                                                <img src="{{ Storage::url($image) }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="owl-nav">
                            <a class="btn-prev"></a>
                            <a class="btn-next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">
            
                <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                    <h2 class="style-2 id-color">What Client Says</h2>
                    <h2>The design is <span class="id-color">awesome</span>, modern and minimalist! <span class="id-color">Namaq</span> is our best partner for our construction work.</h2>
                    {{-- <img src="10_images-architect/people/1.jpg" class="img-circle mb10" alt=""><br> --}}
                    <strong>Satisfied Client</strong>
                </div>
                
                <div class="col-md-4 wow fadeInRight" data-wow-delay=".4s">
                    <h3>Project Description</h3>
                    <div>
                        @markdown($project->description)
                    </div>
                </div>
            
                <div class="col-md-4 wow fadeInRight" data-wow-delay=".6s">
                    <div class="project-details text-light" data-bgcolor="#18191B">

                        <h3>Project Details</h3>

                        @if($project->date)
                        <div class="info-text">
                            <span class="title">Date</span>
                            <span class="val">{{ $project->date->format('F Y') }}</span>
                        </div>
                        @endif

                        @if($project->category)
                        <div class="info-text">
                            <span class="title">Category</span>
                            <span class="val">{{ $project->category }}</span>
                        </div>
                        @endif

                        @if($project->region)
                        <div class="info-text">
                            <span class="title">Region</span>
                            <span class="val">{{ $project->region }}</span>
                        </div>
                        @endif

                        @if($project->size_sqm)
                        <div class="info-text">
                            <span class="title">Size</span>
                            <span class="val">{{ $project->size_sqm }} m<sup>2</sup></span>
                        </div>
                        @endif

                        @if($project->pdf_file)
                        <div class="info-text">
                            <span class="title">Project Layout</span>
                            <span class="val">
                                <a href="{{ Storage::url($project->pdf_file) }}" target="_blank" style="color: #fff; text-decoration: underline;">View PDF</a>
                            </span>
                        </div>
                        @endif
                        
                        {{-- 
                        <div class="info-text">
                            <a href="#" class="btn-custom btn-fullwidth text-light text-center">Project URL</a>
                        </div>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>