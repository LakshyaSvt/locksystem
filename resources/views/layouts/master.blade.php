<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
        content="Mars SmartLife At Mars our mission is to make every door safer and more secure by pioneering control, versatility, and access through our smart locks & smart products.">

    <meta property="og:site_name" content="Mars" />
    <meta property="og:site" content="https://mdayurvediccollege.in/demo/lockweb" />
    <meta property="og:title" content="Mars SmartLife &#8211; Design For Convenience. Build For You" />
    <meta property="og:description"
        content="Mars SmartLife At Mars our mission is to make every door safer and more secure by pioneering control, versatility, and access through our smart locks & smart products." />
    <meta property="og:image" content="https://mdayurvediccollege.in/demo/lockweb/img/logo_2.png" />
    <meta property="og:url" content="https://mdayurvediccollege.in/demo/lockweb" />
    <meta property="og:type" content="website" />

    <!--title-->
    <title>{{ $title ?? '' }}</title>
    <meta name="theme-color" content="#ffb900">
    <meta name="msapplication-TileColor" content="#ffb900">
    <meta name="msapplication-navbutton-color" content="#ffb900">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffb900">
    <link rel="icon" href="img/logo_1-32x32.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&amp;display=swap"
        rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/bootstrap.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/themify-icons.css">
    <!--flaticon css-->
    <link rel="stylesheet" type="text/css" href="{{ config('ap.url') }}/fonts/flaticon.css">
    <!--animated css-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/style.css?v=74.25">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ config('app.url') }}/css/responsive.css">

    @yield('head')
</head>

<body>

    <!--header section start-->
    @include('inc.header')
    <!--header section start-->

    @yield('content')

    <!--footer section start-->
    @include('inc.footer')
    <!--footer section end-->

    <!--jQuery-->
    <script src="{{ config('ap.url') }}/js/jquery-3.4.1.min.js"></script>
    <!--Popper js-->
    <script src="{{ config('ap.url') }}/js/popper.min.js"></script>
    <!--Bootstrap js-->
    <script src="{{ config('ap.url') }}/js/bootstrap.min.js"></script>
    <!--Magnific popup js-->
    <script src="{{ config('ap.url') }}/js/jquery.magnific-popup.min.js"></script>
    <!--jquery easing js-->
    <script src="{{ config('ap.url') }}/js/jquery.easing.min.js"></script>
    <!--jquery ytplayer js-->
    <script src="{{ config('ap.url') }}/js/jquery.mb.YTPlayer.min.js"></script>
    <!--wow js-->
    <script src="{{ config('ap.url') }}/js/wow.min.js"></script>
    <!--owl carousel js-->
    <script src="{{ config('ap.url') }}/js/owl.carousel.min.js"></script>
    <!--custom js-->
    <script src="{{ config('ap.url') }}/js/scripts.js"></script>

    @yield('script')
</body>

</html>
