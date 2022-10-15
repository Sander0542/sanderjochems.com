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
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="{{ config('personal.social.github.url') }}" target="_blank">
                            <i class="fab fa-github"></i>
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
                                    <img src="<?= $project['imageUrl'] ?>" class="card-img project-image" alt="{{ config('personal.about.name') }} - {{ $project['name'] }}">
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
