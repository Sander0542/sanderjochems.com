<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal website of {{ config('personal.about.name') }} containg information about his resume, project and contact information.">

    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')
</head>
<body>
@yield('content')

@include('layouts.footer')
</body>
</html>
