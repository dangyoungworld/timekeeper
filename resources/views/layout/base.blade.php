<!DOCTYPE html>
<html lang=en>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset=utf-8>
    <title>Timekeeper - @yield('title')</title>
    <!-- Mobile specific metas -->
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- Force IE9 to render in normal mode -->
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name=author content=SuggeElson>
    <meta name=description content="sprFlat admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework">
    <meta name=keywords content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap">
    <meta name=application-name content="sprFlat admin template">
    <!-- Import google fonts - Heading first/ text second -->
    <link rel=stylesheet type=text/css href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Droid+Sans:400,700">
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!-- Css files -->
    <link rel=stylesheet href={{ URL::asset('assets/css/main.min.css') }}>
    <!-- Fav and touch icons -->
    <link rel=apple-touch-icon-precomposed sizes=144x144 href={{ URL::asset('assets/img/ico/apple-touch-icon-144-precomposed.png') }}>
    <link rel=apple-touch-icon-precomposed sizes=114x114 href={{ URL::asset('assets/img/ico/apple-touch-icon-114-precomposed.png') }}>
    <link rel=apple-touch-icon-precomposed sizes=72x72 href={{ URL::asset('assets/img/ico/apple-touch-icon-72-precomposed.png') }}>
    <link rel=apple-touch-icon-precomposed href={{ URL::asset('assets/img/ico/apple-touch-icon-57-precomposed.png') }}>
    <link rel=icon href={{ URL::asset('assets/img/ico/favicon.ico type=image/png') }}>
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name=msapplication-TileColor content=#3399cc>
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
<script src="{{ URL::asset('assets/js/libs/jquery-2.1.1.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/libs/jquery-ui-1.10.4.min.js') }}"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="{{ URL::asset('assets/js/libs/excanvas.min.js') }}"></script>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/libs/respond.min.js') }}"></script>
<![endif]-->


@yield('jsandcss')

</body>
</html>