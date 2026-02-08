<x-layout title="{{ $teamMember->name }} - Team Profile">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/bg.css') }}" type="text/css">
        <style>
            .profile-card {
                background: #f8f9fa;
                padding: 30px;
                border-radius: 10px;
                text-align: center;
                box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            }
            .profile-img {
                width: 200px;
                height: 200px;
                object-fit: cover;
                border-radius: 50%;
                margin-bottom: 20px;
                border: 5px solid #fff;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            .profile-name {
                font-size: 24px;
                font-weight: 700;
                margin-bottom: 5px;
                color: #202124;
            }
            .profile-role {
                font-size: 16px;
                color: #777;
                text-transform: uppercase;
                letter-spacing: 2px;
                margin-bottom: 20px;
            }
            .profile-info-item {
                margin-bottom: 15px;
                border-bottom: 1px solid #eee;
                padding-bottom: 15px;
            }
            .profile-info-label {
                font-weight: 600;
                color: #202124;
                display: block;
                margin-bottom: 5px;
            }
            .section-title {
                font-size: 20px;
                font-weight: 700;
                margin-bottom: 25px;
                padding-bottom: 10px;
                border-bottom: 2px solid #fab702; /* Theme accent color */
                display: inline-block;
            }
            .skill-bar {
                margin-bottom: 20px;
            }
            .skill-title {
                display: flex;
                justify-content: space-between;
                margin-bottom: 5px;
                font-weight: 600;
            }
            .progress {
                height: 10px;
                background-color: #eee;
                border-radius: 5px;
                overflow: hidden;
            }
            .progress-bar {
                background-color: #fab702; /* Theme accent color */
            }
            .timeline-item {
                position: relative;
                padding-left: 30px;
                margin-bottom: 25px;
                border-left: 2px solid #eee;
            }
            .timeline-item::before {
                content: '';
                position: absolute;
                left: -6px;
                top: 5px;
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: #fab702;
            }
            .timeline-date {
                font-size: 14px;
                color: #777;
                margin-bottom: 5px;
            }
            .timeline-title {
                font-weight: 700;
                font-size: 16px;
                margin-bottom: 5px;
            }
            .accomplishment-item {
                display: flex;
                align-items: start;
                margin-bottom: 15px;
            }
            .accomplishment-icon {
                min-width: 30px;
                color: #fab702;
                margin-top: 5px;
            }
        </style>
    @endpush

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Team Profile</h1>
                    <ul class="crumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('team') }}">Team</a></li>
                        <li class="sep">/</li>
                        <li>{{ $teamMember->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div id="content">
        <div class="container">
            <div class="row">
                <!-- Left Column: Profile Card -->
                <div class="col-lg-4 col-md-12 mb-5">
                    <div class="profile-card">
                        <img src="{{ asset($teamMember->photo) }}" alt="{{ $teamMember->name }}" class="profile-img">
                        <h2 class="profile-name">{{ $teamMember->name }}</h2>
                        <div class="profile-role">{{ $teamMember->role }}</div>

                        <div class="text-start mt-4">
                            @if($teamMember->age)
                            <div class="profile-info-item">
                                <span class="profile-info-label"><i class="fa fa-birthday-cake me-2"></i> Age</span>
                                {{ $teamMember->age }} Years
                            </div>
                            @endif
                            @if($teamMember->joined_year)
                            <div class="profile-info-item">
                                <span class="profile-info-label"><i class="fa fa-calendar-check me-2"></i> Joined Company</span>
                                {{ $teamMember->joined_year }} ({{ date('Y') - $teamMember->joined_year }} Years)
                            </div>
                            @endif
                            @if($teamMember->location)
                            <div class="profile-info-item">
                                <span class="profile-info-label"><i class="fa fa-map-marker-alt me-2"></i> Location</span>
                                {{ $teamMember->location }}
                            </div>
                            @endif
                            @if($teamMember->email)
                            <div class="profile-info-item border-0">
                                <span class="profile-info-label"><i class="fa fa-envelope me-2"></i> Contact</span>
                                {{ $teamMember->email }}
                            </div>
                            @endif
                        </div>

                        <div class="social-icons mt-3">
                            @if($teamMember->social_links)
                                @foreach($teamMember->social_links as $link)
                                    <a href="{{ $link['url'] }}" class="btn btn-icon"><i class="fa-brands fa-{{ $link['platform'] }} fa-lg"></i></a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Right Column: Details -->
                <div class="col-lg-8 col-md-12">
                    <!-- Biography -->
                    <div class="mb-5">
                        <h3 class="section-title">Biography</h3>
                        <p class="lead">{{ $teamMember->role }} at Namaq</p>
                        <p>{{ $teamMember->bio }}</p>
                    </div>

                    <div class="row">
                        <!-- Skills -->
                        @if($teamMember->skills)
                        <div class="col-md-6 mb-5">
                            <h3 class="section-title">Skills & Expertise</h3>
                            
                            @foreach($teamMember->skills as $skill)
                            <div class="skill-bar">
                                <div class="skill-title">
                                    <span>{{ $skill['name'] }}</span>
                                    <span>{{ $skill['percent'] }}%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $skill['percent'] }}%" aria-valuenow="{{ $skill['percent'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif

                        <!-- Promotions / Career Path -->
                        @if($teamMember->career_path)
                        <div class="col-md-6 mb-5">
                            <h3 class="section-title">Career Path</h3>
                            
                            @foreach($teamMember->career_path as $path)
                            <div class="timeline-item">
                                <div class="timeline-date">{{ $path['date'] }}</div>
                                <div class="timeline-title">{{ $path['title'] }}</div>
                                <p class="mb-0">{{ $path['description'] }}</p>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>

                    <!-- Accomplishments -->
                    @if($teamMember->accomplishments)
                    <div class="mb-5">
                        <h3 class="section-title">Notable Accomplishments</h3>
                        <div class="row">
                            @foreach($teamMember->accomplishments as $accomplishment)
                            <div class="col-md-6">
                                <div class="accomplishment-item">
                                    <div class="accomplishment-icon"><i class="fa-solid fa-trophy"></i></div>
                                    <div>
                                        <strong>{{ $accomplishment['title'] }}</strong>
                                        <p class="mb-0 text-muted">{{ $accomplishment['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-layout>
