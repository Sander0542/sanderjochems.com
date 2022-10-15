@extends('layouts.app')

@section('content')

    <header>

        <div class="container personal">
            <div class="row">
                <div class="col-md-4 personal-picture d-none d-md-block">
                    <img src="/assets/home/sander.webp" alt="{{ config('personal.about.name') }}">
                </div>
                <div class="col-md-8 personal-profile">
                    <h1 class="profile-name">{{ config('personal.about.name') }}</h1>
                    <p class="profile-title">{{ config('personal.about.title') }}</p>
                    <table class="profile-contact">
                        <tr>
                            <td class="contact-title">Email</td>
                            <td>
                                <a href="{{ config('personal.social.email.url') }}">{{ config('personal.social.email.title') }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="contact-title">Location</td>
                            <td>{{ config('personal.about.location') }}</td>
                        </tr>
                        <tr>
                            <td class="contact-title">Age</td>
                            <td>{{ config('personal.about.birthdate')->diff(new DateTime('now'))->y }}</td>
                        </tr>
                    </table>
                    <p class="profile-social">
                        <a href="{{ config('personal.social.linkedin.url') }}" target="_blank">
                            <svg fill="white" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                            </svg>
                        </a>
                        <a href="{{ config('personal.social.github.url') }}" target="_blank">
                            <svg fill="white" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) -->
                                <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </header>

    <main>

        <div class="container section about-me">

            <div class="row">
                <div class="col-10">
                    <h2>Hi</h2>
                    <p>{{ config('personal.about.about') }}</p>
                </div>
            </div>

        </div>

        <div class="container section resume">

            <div class="row">
                <div class="col-10">
                    <h2>Resume</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-10">

                    <h3>Experience</h3>

                    <div class="timeline">
                        @foreach($experiences as $experience)
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-content">
                                    <p class="tl-title">{{ $experience['company'] }}</p>
                                    @foreach($experience['positions'] as $position)
                                        <p class="tl-date text-muted text-uppercase">{{ $position['startedAt'] }} - {{ $position['endedAt'] }} &bullet; {{ $position['duration'] }}</p>
                                        <p>{{ $position['name'] }}<br/>{{ $position['location'] }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-10">

                    <h3>Education</h3>

                    <div class="timeline">
                        @foreach($educations as $education)
                            <div class="tl-item">
                                <div class="tl-dot"></div>
                                <div class="tl-content">
                                    <p class="tl-title">{{ $education['school'] }}</p>
                                    <p class="tl-date text-muted text-uppercase">{{ $education['startedAt'] }} - {{ $education['endedAt'] }}</p>
                                    <p>{{ $education['study'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <h3>Skills</h3>
                </div>

                @foreach (config('personal.skills') as $skill)
                    <div class="col-lg-3 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="card-title no-margin">{{ $skill }}</h4>
                            </div>
                        </div>
                        <br/>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="container section project">

            <h2>Projects</h2>

            <div class="row">
                @foreach($projects as $project)
                    <div class="col-12">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{ $project['imageUrl'] }}" class="card-img project-image" alt="{{ config('personal.about.name') }} - {{ $project['name'] }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body project-card-body">
                                        <h4 class="card-title">{{ $project['name'] }}</h4>
                                        <p class="card-text">{{ $project['description'] }}</p>
                                        <div class="text-right project-button">
                                            <a href="{{ $project['url'] }}" target="_blank" class="btn btn-primary">{{ parse_url($project['url'], PHP_URL_HOST) }}</a><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                    </div>
                @endforeach
            </div>
        </div>

    </main>

@endsection
