<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="/users/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/users/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="/users/css/vendor/helper.css">
{{--     <link rel="stylesheet" href="/users/css/plugins/plugins.css">--}}
{{--    <link rel="stylesheet" href="/users/css/style.css">--}}

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="/users/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/users/css/style.min.css">
    <!-- Modernizr JS -->
    <script src="/users/js/vendor/modernizr-3.10.0.min.js"></script>
</head>

<body class="template-color-1">

<div id="main-wrapper">



    <!--Header section start-->
    <header class="@section('header-class')header-absolute @show sb-border header-sticky d-none d-lg-block">
        <div class="main-header">
            <div class="container-fluid pl-50 pl-lg-15 pl-md-15 pr-0">
                <div class="row align-items-center no-gutters">

                    <!--Logo start-->
                    <div class="col-xl-2 col-lg-2 col-12">
                        <div class="logo">
                            <a href="{{route('home')}}"><img  src="/users/images/LOGO.png" alt=""></a>
                        </div>
                    </div>
                    <!--Logo end-->

                    <!--Menu start-->
                    <div class="col-xl-7 col-lg-7 col-12">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="{{route('home')}}">ГЛАВНАЯ</a></li>
                                <li><a href="{{route('catalog')}}">КАТАЛОГ</a></li>
                                <li><a href="{{route('showAbout')}}">О КОМПАНИИ</a></li>
                                <li><a href="{{route('showDelivery')}}">ДОСТАВКА И ОПЛАТА</a></li>
                                <li><a href="{{route('showContacts')}}">КОНТАКТЫ</a></li>

                            </ul>
                        </nav>
                    </div>
                    <!--Menu end-->

                    <!-- Cart & Search Area Start -->
                    <div class="col-xl-3 col-lg-3 col-12">
                        <div class="header-btn-action d-flex justify-content-end">
                            <div class="btn-action-wrap d-flex">
                                <div class="jp-author item">
                                    <a href="#">
                                        <i class="lnr lnr-phone-handset"></i>
                                        <span>ЗАКАЗАТЬ ЗВОНОК</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Cart & Search Area End -->
                </div>

            </div>
        </div>
    </header>
    <!--Header section end-->

    <!--Header Mobile section start-->
    <header class="header-mobile bg_color--2 d-block d-lg-none">
        <div class="header-bottom menu-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-mobile-navigation d-block d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-3 col-md-3">
                                    <div class="mobile-navigation text-right">
                                        <div class="header-icon-wrapper">
                                            <ul class="icon-list justify-content-start">
                                                <li class="popup-mobile-click">
                                                    <a href="javascript:void(0)"><i class="lnr lnr-menu"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="header-logo text-center">
                                        <a href="{{route('home')}}">
                                            <img src="/users/images/logo-mobile.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!--Header Mobile section end-->

    <!-- Start Popup Menu -->
    <div class="popup-mobile-manu popup-mobile-visiable">
        <div class="inner">
            <div class="mobileheader">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo-mobile.png" alt="Multipurpose">
                    </a>
                </div>
                <a class="mobile-close" href="index.html#"></a>
            </div>
            <div class="menu-content">
                <ul class="menulist object-custom-menu">
                    <li><a href="{{route('home')}}"><span>ГЛАВНАЯ</span></a>
                    </li>

                    <li><a href="{{route('catalog')}}"><span>КАТАЛОГ</span></a></li>

                    <li><a href="{{route('showAbout')}}"><span>О КОМПАНИИ</span></a></li>

                    <li><a href="{{route('showDelivery')}}"><span>ДОСТАВКА И ОПЛАТА</span></a></li>

                    <li><a href="{{route('showContacts')}}"><span>КОНТАКТЫ</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Popup Menu -->



    @yield('content')



    <!--Footer section start-->
    <footer class="footer-section section">

        <!-- Footer Top Section Start -->
        <div class="footer-top-section section pt-115 pt-lg-95 pt-md-75 pt-sm-55 pt-xs-45 pb-90 pb-lg-70 pb-md-40 pb-sm-20 pb-xs-15">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-3 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget mb-30">
                            <h6 class="title">Contact Info</h6>
                            <div class="address">
                                <i class="lnr lnr-map-marker"></i>
                                <span>8375 E. Heather Drive Tonawanda, Manchester 14150, United Kingdom</span>
                            </div>
                            <div class="email">
                                <i class="lnr lnr-envelope"></i>
                                <span>jopota@recruitment.com</span>
                            </div>
                            <div class="phone theme-color">(+1) 000 987-1234</div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget mb-30">
                            <h6 class="title">Useful Links</h6>
                            <div class="footer-widget-link">
                                <ul>
                                    <li><a href="index.html#">Press Corner</a></li>
                                    <li><a href="index.html#">Policy Privacy</a></li>
                                    <li><a href="index.html#">Terms And Conditions</a></li>
                                    <li><a href="index.html#">Partner</a></li>
                                    <li><a href="index.html#">Help Center</a></li>
                                    <li><a href="index.html#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget mb-30">
                            <h6 class="title">Featured Jobs</h6>
                            <div class="footer-widget-link">
                                <ul>
                                    <li><a href="index.html#">Teachers</a></li>
                                    <li><a href="index.html#">Accounting</a></li>
                                    <li><a href="index.html#">Customer Service</a></li>
                                    <li><a href="index.html#">Digital Marketing</a></li>
                                    <li><a href="index.html#">Web & Software Dev</a></li>
                                    <li><a href="index.html#">Science & Analitycs</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget mb-30">
                            <h6 class="title">Newsletter</h6>
                            <div class="newsletter">
                                <p>Join our email subscription now to get updates on <strong>new jobs</strong> and <strong>notifications</strong>.</p>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top Section End -->

        <!--Footer bottom start-->
        <div class="footer-bottom section fb-60">
            <div class="container">
                <div class="row no-gutters st-border pt-35 pb-35 align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright">
                            <p>&copy;2020 <a href="#">Jetapo</a>. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-social">
                            <a href="index.html#"><i class="fab fa-facebook-f"></i></a>
                            <a href="index.html#"><i class="fab fa-instagram"></i></a>
                            <a href="index.html#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom end-->

    </footer>
    <!--Footer section end-->




</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
{{--<script src="/users/js/jquery-3.5.0.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="/users/js/jquery-migrate-3.1.0.min.js"></script>
<script src="/users/js/bootstrap.bundle.min.js"></script>


<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="/users/js/plugins.min.js"></script>
<script src="/users/js/main.js"></script>



<!--End of Zendesk Chat Script-->


</body>

</html>
