<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ trim($__env->yieldContent('meta_title', 'Pros Chimney cleaning')) }} - Pros Chimney cleaning</title>
    <meta name="keywords" content="{{ trim($__env->yieldContent('meta_tags', 'Default meta Keywords')) }}" />
    <meta name="description" content="{{ trim($__env->yieldContent('meta_description', 'Default meta description')) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- all css here -->

    <!--Favicon-->
    <link rel="icon" href="{{ asset('front/asset2/img/favicon.png') }}" type="image/jpg" />

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/asset2/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="{{ asset('front/asset2/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="{{ asset('front/asset2/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="{{ asset('front/asset2/css/animate.css') }}" rel="stylesheet">
    <!-- Bar Filler CSS -->
    <link href="{{ asset('front/asset2/css/barfiller.css') }}" rel="stylesheet">
    <!-- Magnific Popup Video -->
    <link href="{{ asset('front/asset2/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="{{ asset('front/asset2/css/flaticon.css') }}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('front/asset2/css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset('front/asset2/css/style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('front/asset2/css/responsive.css') }}" rel="stylesheet">


    <!-- jquery -->
    <script src="{{ asset('front/asset2/js/jquery-1.12.4.min.js') }}"></script>

    <style>
        .footer-area::before{
            height: 0px !important;
        }
    </style>

    @yield('css')


</head>


<body>

    <!-- ======= Top Bar ======= -->
    {{-- @include('front.layout_pages.topbar') --}}


    <!-- ======= Header ======= -->
    @include('front.layout_pages.header')





    <main id="main">

        @yield('content')




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.layout_pages.footer')


    <!-- all js here -->
    
    <!-- Scroll Top Area -->
    <a href="#top" class="go-top"><i class="las la-angle-up"></i></a>


    <!-- Popper JS -->
    <script src="{{ asset('front/asset2/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('front/asset2/js/bootstrap.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('front/asset2/js/wow.min.js') }}"></script>
    <!-- Way Points JS -->
    <script src="{{ asset('front/asset2/js/jquery.waypoints.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('front/asset2/js/jquery.counterup.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('front/asset2/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('front/asset2/js/magnific-popup.min.js') }}"></script>
    <!-- Sticky JS -->
    <script src="{{ asset('front/asset2/js/jquery.sticky.js') }}"></script>
    <!-- Progress Bar JS -->
    <script src="{{ asset('front/asset2/js/jquery.barfiller.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('front/asset2/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
