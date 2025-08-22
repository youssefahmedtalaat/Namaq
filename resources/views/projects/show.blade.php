<x-layout :has_breadcrumb="true">
    <!-- breadcrumb-start -->
    <section class="breadcrumb-area has-2 wa-p-relative" >
        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <a href="/projects" aria-label="name" class="breadcrumb-back-page-btn">
                    <i class="fa-solid fa-angle-left"></i>
                    Back to Projects Page
                </a>
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >
                    {{-- The Luxurious Sky <br>
                    Penthouse. --}}
                    {{ $project->title }}
                </h1>

                <div class="breadcrumb-bg-shape">
                    <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- project-details-start -->
    <section class="bs-project-details-area pb-100 wa-p-relative">
        <div class="container bs-container-1">

            <!-- img -->
            <div class="bs-project-details-img wa-fix wa-img-cover">
                {{-- <img src="{{ asset('assets/img/projects/pd-img-1.png') }}" alt=""> --}}
                <img src="{{ Storage::url($project->main_image) }}" alt="">
            </div>

            <ul class="bs-project-details-meta">
                <li><b>Client:</b>Cameron Williamson</li>
                <li><b>Category:</b>business consulting</li>
                <li><b>Start Date:</b>20 March, 2023</li>
                <li><b>End Date:</b>30 March, 2024</li>
                <li><b>Budgets:</b>$20,000.00 USD</li>
            </ul>                    

            <div class="bs-project-details-content">

                {{-- <p><span class="big-letter" >T</span>he Luxurious Sky Penthouse is a breathtaking architectural marvel that redefines luxury living. Perched high above the city, this exclusive residence offers unparalleled panoramic views through expansive floor-to-ceiling windows. Every element of the design showcases sophistication, from the bespoke interiors and premium finishes to state-of-the-art smart home technology. Residents can indulge in private amenities, including a rooftop infinity pool, a fully equipped gym, and a home theater, creating the ultimate retreat in the sky.</p>

                <p>The innovative design seamlessly blends modern aesthetics with sustainable materials, ensuring a timeless yet eco-friendly living space. With private elevator access, dedicated parking, and 24/7 concierge services, privacy and convenience are paramount. Strategically located for easy access to urban landmarks, this penthouse combines the vibrancy of city life with serene exclusivity. The Luxurious Sky Penthouse is not just a home—it’s a statement of elegance and refinement.</p>

                <h2>What We've Done</h2>

                <p>We've developed the Modern HR Platform to revolutionize human resource management, incorporating advanced features like automated payroll, real-time analytics, and AI-driven recruitment tools. Our platform enhances efficiency and accuracy in HR tasks, supports remote and hybrid work models, and ensures robust data security. It facilitates seamless integration with other business systems and offers intuitive</p>

                <ul>
                    <li>Strategic Discovery</li>
                    <li>Web application redesign & optimization</li>
                    <li>Mobile application redesign & optimization</li>
                    <li>Landing page redesign & optimization</li>
                    <li>Product Design Sprints to explore new functionality</li>
                </ul>

                <h2>Preliminary Designs or Layouts</h2>

                <p>Preliminary designs or layouts serve as the foundation for any architectural project, offering a visual representation of the space's flow and structure. These initial plans focus on the arrangement of rooms, circulation paths, and functional zones to ensure optimal use of space. They provide a clear direction for the design, allowing clients to visualize the project’s potential before finalizing details. Based on feedback, these layouts can be adjusted to better align with the client’s needs, style preferences, and practical requirements. Preliminary designs set the tone for the overall vision and are crucial in achieving a successful architectural outcome.</p>

                <div class="inner-img">
                    <img src="{{ asset('assets/img/projects/pd-img-2.png') }}" alt="">
                </div>

                <h2>Creative Process</h2>

                <p>The creative process in architecture involves a blend of inspiration, exploration, and iteration to transform concepts into reality. It begins with understanding the client's needs and the project's context, followed by brainstorming ideas, sketching, and refining designs. Through collaboration and feedback, the vision evolves, integrating aesthetic, functional, and sustainable elements. This dynamic process ensures that each project is unique, innovative, and thoughtfully crafted to meet both the practical and emotional needs of its occupants.</p>

                <h2>Building A Successful Client-Architecture Relationship</h2>

                <p>Building a successful client-architecture relationship begins with clear communication and mutual trust. By actively listening to the client’s needs and understanding their vision, architects can create tailored solutions that align with their goals. Regular collaboration, transparency, and responsiveness throughout the design process ensure that both parties remain aligned and confident in the project’s direction. This strong partnership fosters a positive experience and results in a space that truly reflects the client’s desires and aspirations.</p>

                <h2>Project Results</h2>


                <p>Project results reflect the successful execution of a vision, blending design, functionality, and innovation. Each project is meticulously completed, meeting the client’s expectations and enhancing their space’s aesthetic and practical value. The outcome is a seamless integration of creative concepts with real-world application, ensuring long-lasting impact and satisfaction. </p> --}}
                
                @markdown($project->description)

                <h2>Gallery</h2>

                <div class="bs-project-details-content-gallery">
                    {{-- <div class="row-1">
                        <div class="img-elm">
                            <img src="{{ asset('assets/img/projects/pd-g-img-1.png') }}" alt="">
                        </div>
                        <div class="img-elm">
                            <img src="{{ asset('assets/img/projects/pd-g-img-2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="row-2">
                        <div class="img-elm">
                            <img src="{{ asset('assets/img/projects/pd-g-img-3.png') }}" alt="">
                        </div>
                        <div class="img-elm">
                            <img src="{{ asset('assets/img/projects/pd-g-img-4.png') }}" alt="">
                        </div>
                        <div class="img-elm">
                            <img src="{{ asset('assets/img/projects/pd-g-img-5.png') }}" alt="">
                        </div>
                    </div> --}}

                    @php
                        $images = $project->gallery_images;
                        $imagesInRow1 = array_slice($images, 0, 2);
                        $imagesInRow2 = array_slice($images, 2);
                    @endphp

                    <div class="row-1">
                        @foreach($imagesInRow1 as $image)
                            <div class="img-elm">
                                <img src="{{ Storage::url($image) }}" alt="">
                            </div>
                        @endforeach
                    </div>

                    @if (count($imagesInRow2) > 0)
                        <div class="row-2">
                            @foreach($imagesInRow2 as $image)
                                <div class="img-elm">
                                    <img src="{{ Storage::url($image) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                
            </div>
        </div>
    </section>
    <!-- service-details-end -->

    <!-- office-start -->
    <section class="bs-office-1-area wa-fix ">
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