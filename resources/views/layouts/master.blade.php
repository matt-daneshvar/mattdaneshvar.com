<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matt Daneshvar @if(view()->hasSection('title')) / @endif @yield('title')</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
    @include('partials.trackers')
</head>
<body class="flex flex-col">
@section('header')
    @include('partials.header')
@show
<main class="flex flex-col flex-grow @yield('main.class')">
    @section('content')

    @show
</main>
@section('footer')
    @include('partials.footer')
@show
</body>
</html>
