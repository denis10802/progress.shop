<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
{{--    <link href="mages/favicon.ico" type="img/x-icon" rel="shortcut icon">--}}
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="/users/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/users/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="/users/css/vendor/helper.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/plugins/plugins.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="/users/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/users/css/style.min.css">
    <!-- Modernizr JS -->
    <script src=/users/js/vendor/modernizr-3.10.0.min.js"></script>
</head>

<body class="template-color-1">

<div id="main-wrapper">


    <!--Header section start-->
    <header class="black-logo-version sb-border sticky-white header-sticky d-none d-lg-block">
        <div class="main-header">
            <div class="container-fluid pl-50 pl-lg-15 pl-md-15 pr-0">
                <div class="row align-items-center no-gutters">

                    <!--Logo start-->
                    <div class="col-xl-2 col-lg-2 col-12">
                        <div class="logo">
                            <a href="{{route('home')}}"><img width="100%" src="/users/images/LOGO.png" alt=""></a>
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
                                            <img src="/users/images/LOGO.png" class="img-fluid" alt="">
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
                        <img src="/users/images/LOGO.png" alt="Multipurpose">
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


    @yield('breadcrumb-section')


    <!-- Shop Section Start -->
    <div class="shop-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container faq-wrapper">
            <div class="row">

                <div class="col-lg-3 col-12 order-lg-1 order-1">
                    <div class="sidebar-wrapper-shop mt-sm-40 mt-xs-30">
                        <div class="common-sidebar-widget sidebar-four">
                            <h2 class="sidebar-title">Категории</h2>
                            <div class="sidebar-list">
                                <ul>

                                 @foreach($categories as $category)

                                        <li><a href="{{ route('showCategory',$category->slug) }}">{{$category->title}} ({{$category->products->count()}})</a></li>

                                 @endforeach

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

               @yield('content')

            </div>
        </div>
    </div>
    <!-- Shop Section End -->

    <!--Footer section start-->
    <footer class="footer-section section st-border">

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
                            <div class="footer-widget-image d-flex mt-35">
                                <a class="mr-5" href="shop.html#"><img src="assets/images/app-store/app-store-2.png" alt=""></a>
                                <a href="shop.html#"><img src="assets/images/app-store/app-chplay-2.png" alt=""></a>
                            </div>
                        </div>
                        <!-- Footer Widget End -->
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <!-- Footer Widget Start -->
                        <div class="footer-widget mb-30">
                            <h6 class="title">Useful Links</h6>
                            <div class="footer-widget-link">
                                <ul>
                                    <li><a href="shop.html#">Press Corner</a></li>
                                    <li><a href="shop.html#">Policy Privacy</a></li>
                                    <li><a href="shop.html#">Terms And Conditions</a></li>
                                    <li><a href="shop.html#">Partner</a></li>
                                    <li><a href="shop.html#">Help Center</a></li>
                                    <li><a href="shop.html#">Contact Us</a></li>
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
                                    <li><a href="shop.html#">Teachers</a></li>
                                    <li><a href="shop.html#">Accounting</a></li>
                                    <li><a href="shop.html#">Customer Service</a></li>
                                    <li><a href="shop.html#">Digital Marketing</a></li>
                                    <li><a href="shop.html#">Web & Software Dev</a></li>
                                    <li><a href="shop.html#">Science & Analitycs</a></li>
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
                                <div class="newsletter-form">
                                    <form id="mc-form" class="mc-form">
                                        <input type="email" placeholder="Enter Your email..." required="" name="EMAIL">
                                        <button class="ht-btn small-btn" type="submit" value="submit">Subscribe</button>
                                    </form>
                                </div>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
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
                            <p>&copy;2020 <a href="https://hasthemes.com/">Jetapo</a>. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-social">
                            <a href="shop.html#"><i class="fab fa-facebook-f"></i></a>
                            <a href="shop.html#"><i class="fab fa-instagram"></i></a>
                            <a href="shop.html#"><i class="fab fa-google"></i></a>
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
{{--<script src="/users/js/vendor/jquery-3.5.0.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="/users/js/vendor/jquery-migrate-3.1.0.min.js"></script>
<script src="/users/js/vendor/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/js/plugins/plugins.js"></script> -->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="/users/js/plugins/plugins.min.js"></script>
<script src="/users/js/main.js"></script>

</body>

</html>
/users/
