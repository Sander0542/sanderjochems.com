<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('personal.about.name') }} - {{ config('personal.about.title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO --}}
    <meta name="description" content="{{ config('personal.about.title') }} in {{ config('personal.about.location') }}, specializing in cloud-native and full-stack solutions.">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ config('personal.about.name') }} - {{ config('personal.about.title') }}">
    <meta property="og:description" content="Personal website of {{ config('personal.about.name') }}, {{ config('personal.about.title') }} based in {{ config('personal.about.location') }}.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sanderjochems.com">
    <meta property="og:image" content="https://www.sanderjochems.com/assets/home/sander.webp">

    {{-- Favicon --}}
    <link rel="icon" href="/favicon.ico">

    @vite('resources/css/app.css')
</head>
<body>
@yield('content')

@include('layouts.footer')
</body>
</html>
