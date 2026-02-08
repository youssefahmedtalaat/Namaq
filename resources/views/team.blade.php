<x-layout title="Our Team">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/bg.css') }}" type="text/css">
    @endpush
    <!-- content begin -->
    <div id="content" class="no-top no-bottom mt70 sm-mt0">
        <section data-bgcolor="#202124">
            <div class="text-center">
                <h1>Team</h1>
            </div>
        </section>


        <section class="no-top no-bottom">
            <div class="container-fluid">
                <div class="row g-0">

                    @foreach($teamMembers as $member)
                    <div class="col-lg-3 col-md-6">
                        <!-- team member -->
                        <div class="de-team-list">
                            <div class="team-pic">
                                <a href="{{ route('team.show', $member) }}">
                                    <img src="{{ asset($member->photo) }}" class="img-responsive" alt="{{ $member->name }}" />
                                </a>
                            </div>
                            <div class="team-desc">
                                <a href="{{ route('team.show', $member) }}" style="text-decoration: none; color: inherit; display: block;">
                                    <h3>{{ $member->name }}</h3>
                                    <p class="lead">{{ $member->role }}</p>
                                    <div class="small-border"></div>
                                    <p>{{ Str::limit($member->bio, 100) }}</p>
                                </a>

                                <div class="social">
                                    @if($member->social_links)
                                        @foreach($member->social_links as $link)
                                            <a href="{{ $link['url'] }}"><i class="fa-brands fa-{{ $link['platform'] }} fa-lg"></i></a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- team close -->
                    </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    </div>
</x-layout>
