<!DOCTYPE html>
<html lang=en>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset=utf-8>
    <title>Timekeeper - @yield('title')</title>
    <!-- Mobile specific metas -->
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">

    <!-- Import google fonts - Heading first/ text second -->
    <link rel=stylesheet type=text/css href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Droid+Sans:400,700">
    <!-- Css files -->
    <link rel=stylesheet href={{ URL::asset('assets/css/main.min.css') }}>
    <link rel=stylesheet href={{ URL::asset('assets/css/custom.css') }}>

</head>
<body>
@include('layout.header')

@yield('aside')

        <!-- Start #content -->
<div id=content>
    <!-- Start .content-wrapper -->
    <div class=content-wrapper>
        @include('layout.heading')

        @yield('content')
    </div>
    <!-- End .content-wrapper -->
    <div class=clearfix></div>
</div>
<!-- End #content -->

@include('layout.footer')

        <!-- Javascripts -->
<!-- Load pace first -->
<script src={{ URL::asset('assets/plugins/core/pace/pace.min.js')}}></script>
<!-- Important javascript libs(put in all pages) -->
<script src="{{ URL::asset('assets/js/libs/jquery-1.12.3.min.js') }}"></script>

<script src={{ URL::asset('assets/js/libs/underscore.js')}}></script>
<!-- Important javascript libs(put in all pages) -->
<script src="{{ URL::asset('assets/js/libs/backbone.js') }}"></script>
<script src="{{ URL::asset('assets/js/libs/notify.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/core.js') }}"></script>
@yield('jsandcss')

</body>
</html>