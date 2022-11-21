<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from radiustheme.com/demo/html/classipost/classipost/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 06:53:27 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PcStallBD | @yield('title')</title>
    <meta name="rebots" content="noindex">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader" style="background: #fff url('img/preloader.gif') no-repeat scroll
        center center;"></div>
    <!-- Preloader End Here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        @include('partials.header')
        <!-- Header Area End Here -->
        <!-- Search Area Start Here -->
        @include('partials.searchbar')
        <!-- Search Area End Here -->
        <!-- Products Area Start Here -->
        @yield('content')
        <!-- Products Area End Here -->

        <!-- Footer Area Start Here -->
        @include('partials.footer')
        <!-- Footer Area End Here -->
    </div>
    @include('partials.modal')
    <!-- Report Abuse Modal End-->
    <!-- jquery-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- Srollup js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- jquery.counterup js -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- Select2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @stack('scripts')
</body>
</body>


<!-- Mirrored from radiustheme.com/demo/html/classipost/classipost/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Nov 2022 06:54:07 GMT -->

</html>
