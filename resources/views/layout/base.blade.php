<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timekeeper - @yield('title')</title>
    <script type="text/javascript" src="{{ URL::asset('assets/extends/jquery-2.2.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/extends/underscore.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/extends/backbone.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('assets/extends/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/extends/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
    @yield('jsandcss')
</head>
<body>
@include('layout.header')
<div class="container">
    @yield('aside')
    @yield('content')
</div>

@include('layout.footer')
</body>
</html>