<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/habibi/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2023 16:12:29 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="{{ url('public') }}/assets/images/wedding.png">
    <title> Nikah Yom - Wedding Organizer</title>
    <link href="{{ url('public') }}/assets/css/themify-icons.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/flaticon.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/animate.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/owl.theme.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/slick.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/slick-theme.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/swiper.min.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/nice-select.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/owl.transitions.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/css/jquery-ui.css" rel="stylesheet">
    <link href="{{ url('public') }}/assets/sass/style.css" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ url('public') }}/assets/images/preloader.gif" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        @include('layouts/section/header')
        <!-- end of header -->
        @include('layouts/section/sidebar')
        @yield('conten')

        <!-- start of wpo-site-footer-section -->
        @include('layouts/section/footer')
        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ url('public') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="{{ url('public') }}/assets/js/modernizr.custom.js"></script>
    <script src="{{ url('public') }}/assets/js/jquery-plugin-collection.js"></script>
    <!-- Custom script for this template -->
    <script src="{{ url('public') }}/assets/js/script.js"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/habibi/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Oct 2023 16:12:56 GMT -->

</html>
