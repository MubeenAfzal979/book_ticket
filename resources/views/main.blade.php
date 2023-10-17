<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>N1 - Mega Event | Book Now</title>

    <!-- Stylesheets -->

    <link href="{{asset('theme/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('theme/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('theme/css/responsive.css')}}" rel="stylesheet">

    <!--Color Switcher Mockup-->

    <link href="{{asset('theme/css/color-switcher-design.css')}}" rel="stylesheet">



    <link rel="shortcut icon" href="{{asset('theme/images/favicon.png')}}" type="image/x-icon">

    <link rel="icon" href="{{asset('theme/images/favicon.png')}}" type="image/x-icon">



    <!-- Responsive -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!--[if lt IE 9]><script src="{{asset('theme/js/respond.js')}}"></script><![endif]-->



</head>



<body>



<div class="page-wrapper">



    <!-- Preloader -->

    <div class="preloader"></div>

    <!-- Header span -->





    <!-- Main Header-->

   @include('partial.header')

    <!--End Main Header -->







    <!-- Coming Soon -->

    @yield('comingsoon')

    <!-- End Coming Soon -->
    @yield('content')
    <!-- Main Footer -->

    @include('partial.footer')

    <!-- End Footer -->



</div>


<!--Search Popup-->

<div id="search-popup" class="search-popup">

    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>

    <div class="popup-inner">

        <div class="overlay-layer"></div>

        <div class="search-form">

            <form method="post" action="#">

                <div class="form-group">

                    <fieldset>

                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >

                        <input type="submit" value="Search Now!" class="theme-btn">

                    </fieldset>

                </div>

            </form>



            <br>

            <h3>Recent Search Keywords</h3>

            {{--<ul class="recent-searches">

                <li><a href="#">Seo</a></li>

                <li><a href="#">Bussiness</a></li>

                <li><a href="#">Events</a></li>

                <li><a href="#">Digital</a></li>

                <li><a href="#">Conferance</a></li>

            </ul>--}}



        </div>



    </div>

</div>



<!--Scroll to top-->

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="{{asset('theme/js/jquery.js')}}"></script>

<script src="{{asset('theme/js/popper.min.js')}}"></script>

<script src="{{asset('themejs/bootstrap.min.js')}}"></script>

<script src="{{asset('theme/js/jquery-ui.js')}}"></script>

<script src="{{asset('theme/js/jquery.fancybox.js')}}"></script>

<script src="{{asset('theme/js/appear.js')}}"></script>

<script src="{{asset('theme/js/owl.js')}}"></script>

<script src="{{asset('theme/js/jquery.countdown.js')}}"></script>

<script src="{{asset('theme/js/wow.js')}}"></script>

<script src="{{asset('theme/js/script.js')}}"></script>

<!-- Color Setting -->

<script src="{{asset('theme/js/color-settings.js')}}"></script>

</body>


</html>
