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

    <style>

        .ticket {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 700px;
            margin: 20px auto;

        .stub, .check {
            box-sizing: border-box;
        }

        }

        .stub {
            background: #ef5658;
            height: 250px;
            width: 250px;
            color: white;
            padding: 20px;
            position: relative;

        &:before {
             content: '';
             position: absolute;
             top: 0; right: 0;
             border-top: 20px solid #ffffff;
             border-left: 20px solid #000000;
             width: 0;
         }
        &:after {
             content: '';
             position: absolute;
             bottom: 0; right: 0;
             border-bottom: 20px solid #ffffff;
             border-left: 20px solid #000000;
             width: 0;
         }

        .top {
            display: flex;
            align-items: center;
            height: 40px;
            text-transform: uppercase;

        .line {
            display: block;
            background: #fff;
            height: 40px;
            width: 3px;
            margin: 0 20px;
        }
        .num {
            font-size: 10px;
        span {
            color: #000;
        }
        }
        }
        .number {
            position: absolute;
            left: 40px;
            font-size: 150px;
        }
        .invite {
            position: absolute;
            left: 150px;
            bottom: 45px;
            color: #000;
            width: 20%;

        &:before {
             content: '';
             background: #fff;
             display: block;
             width: 40px;
             height: 3px;
             margin-bottom: 5px;
         }
        }
        }

        .check {
            background: #000000;
            height: 250px;
            width: 450px;
            padding: 40px;
            position: relative;

        &:before {
             content: '';
             position: absolute;
             top: 0; left: 0;
             border-top: 20px solid #ffffff;
             border-right: 20px solid #ffffff;
             width: 0;
         }
        &:after {
             content: '';
             position: absolute;
             bottom: 0; left: 0;
             border-bottom: 20px solid #ffffff;
             border-right: 20px solid #ffffff;
             width: 0;
         }

        .big {
            font-size: 80px;
            font-weight: 900;
            line-height: .8em;
        }
        .number {
            position: absolute;
            top: 50px;
            right: 50px;
            color: #ef5658;
            font-size: 40px;
        }
        .info {
            display: flex;
            justify-content: flex-start;

            font-size: 12px;
            margin-top: 20px;
            width: 100%;

        section {
            margin-right: 50px;
        &:before {
             content: '';
             background: #ef5658;
             display: block;
             width: 40px;
             height: 3px;
             margin-bottom: 5px;
         }
        .title {
            font-size: 10px;
            text-transform: uppercase;
        }
        }
        }
        }

    </style>

</head>



<body>



<div class="page-wrapper">



    <!-- Preloader -->

    <div class="preloader"></div>

    <!-- Header span -->





    <!-- Main Header-->

    <header class="main-header">

        <div class="main-box">

            <div class="auto-container clearfix">

                <div class="logo-box">

                    <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>

                </div>



                <!--Nav Box-->

                <div class="nav-outer clearfix">

                    <!--Mobile Navigation Toggler-->

                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    <!-- Main Menu -->

                    <nav class="main-menu navbar-expand-md navbar-light">

                        <div class="navbar-header">

                            <!-- Togg le Button -->

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                                <span class="icon flaticon-menu-button"></span>

                            </button>

                        </div>



                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                            <ul class="navigation clearfix">

                            </ul>

                        </div>

                    </nav>

                    <!-- Main Menu End-->



                    <!-- Outer box -->

                    <div class="outer-box">

                        <!--Search Box-->

                        <div class="search-box-outer">

                            <div class="search-box-btn"><span class="flaticon-search"></span></div>

                        </div>



                        <!-- Button Box -->

                        <div class="btn-box">

                            <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Get Tickets</span></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Mobile Menu  -->

        <div class="mobile-menu">

            <div class="menu-backdrop"></div>

            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>



            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

            <nav class="menu-box">

                <div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>



                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

            </nav>

        </div><!-- End Mobile Menu -->



    </header>

    <!--End Main Header -->



    <!-- Banner Section -->

    <section class="banner-section">

        <div class="banner-carousel owl-carousel owl-theme">

            <!-- Slide Item -->

            <div class="slide-item" style="background-image: url({{asset('theme/images/main-slider/1.jpg')}});">

                <div class="auto-container">

                    <div class="content-box">

                        <span class="title">Events</span>

                        <h2> N1 <br>Mega Event</h2>

                        <ul class="info-list">

                            {{--<li><span class="icon fa fa-chair"></span> 5000 Seats</li>

                            <li><span class="icon fa fa-user-alt"></span> 12 SPEAKERS</li>

                            <li><span class="icon fa fa-map-marker-alt"></span> Palo, California</li>--}}

                        </ul>

                        <div class="btn-box"><a href="#" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>

                    </div>

                </div>

            </div>



            <!-- Slide Item -->

            <div class="slide-item" style="background-image: url({{asset('theme/images/main-slider/2.jpg')}});">

                <div class="auto-container">

                    <div class="content-box">

{{--                        <span class="title">January 20, 2023</span>--}}

                        <h2> N1 <br>Mega Event</h2>

                        <ul class="info-list">

                            {{--<li><span class="icon fa fa-chair"></span> 5000 Seats</li>

                            <li><span class="icon fa fa-user-alt"></span> 12 SPEAKERS</li>

                            <li><span class="icon fa fa-map-marker-alt"></span> Palo, California</li>--}}

                        </ul>

                        <div class="btn-box"><a href="#" class="theme-btn btn-style-two"><span class="btn-title">Book Now</span></a></div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--End Banner Section -->



    <!-- Coming Soon -->

    <section class="coming-soon-section">

        <div class="auto-container">

            <div class="outer-box">

                <h1 style="color: white; font-size: large">Pay With $NRK</h1>

            </div>

        </div>

    </section>

    <!-- End Coming Soon -->
    <section class="">

        <div class="anim-icons full-width">

            <span class="icon icon-circle-blue wow fadeIn"></span>

            <span class="icon icon-circle-1 wow zoomIn"></span>

        </div>

        <div class="auto-container">

            <div class="row">

                <!-- Content Column -->

                <div class="content-column col-lg-12 col-md-12 col-sm-12 order-2 eticket">

                    {{--eticket html--}}

                    <div class="ticket">
                        <div class="stub">
                            <div class="top">
                                <span class="admit">Admit</span>
                                <span class="line"></span>
                                <span class="num">
        Invitation
        <span>31415926</span>
      </span>
                            </div>
                            <div class="number">1</div>
                            <div class="invite">
                                Invite for you
                            </div>
                        </div>
                        <div class="check">
                            <div class="big">
                                You're <br> Invited
                            </div>
                            <div class="number">#1</div>
                            <div class="info">
                                <section>
                                    <div class="title">Date</div>
                                    <div>4/27/2016</div>
                                </section>
                                <section>
                                    <div class="title">Issued By</div>
                                    <div>Ampersand</div>
                                </section>
                                <section>
                                    <div class="title">Invite Number</div>
                                    <div>31415926</div>
                                </section>
                            </div>
                        </div>
                    </div>
                    {{--eticket html--}}


                </div>



                <!-- Form Column -->



            </div>

        </div>

    </section>
    <!-- Main Footer -->

    <footer class="main-footer">

        <!--Widgets Section-->

        <!--Footer Bottom-->

        <div class="footer-bottom">

            <div class="auto-container">

                <div class="inner-container clearfix">

                    <div class="copyright-text">

                        <p>© Copyright 2023 All Rights Reserved by <a href="index.html">Expert-Themes</a></p>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <!-- End Footer -->



</div>

<!--End pagewrapper-->



<!-- Color Palate / Color Switcher -->

<div class="color-palate">

    <div class="color-trigger">

        <i class="fa fa-cog"></i>

    </div>

    <div class="color-palate-head">

        <h6>Choose Your Demo</h6>

    </div>

    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>

    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>

    <div class="palate-foo">

        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>

    </div>

    <a href="#" class="purchase-btn">Purchase now</a>

</div><!-- End Color Switcher -->



<!--Search Popup-->

<div id="search-popup" class="search-popup">

    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>

    <div class="popup-inner">

        <div class="overlay-layer"></div>

        <div class="search-form">

            <form method="post" action="https://expert-themes.com/html/eventrox/index.html">

                <div class="form-group">

                    <fieldset>

                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >

                        <input type="submit" value="Search Now!" class="theme-btn">

                    </fieldset>

                </div>

            </form>



            <br>

            <h3>Recent Search Keywords</h3>

            <ul class="recent-searches">

                <li><a href="#">Seo</a></li>

                <li><a href="#">Bussiness</a></li>

                <li><a href="#">Events</a></li>

                <li><a href="#">Digital</a></li>

                <li><a href="#">Conferance</a></li>

            </ul>



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
