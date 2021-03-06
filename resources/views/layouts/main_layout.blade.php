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
    <link rel="stylesheet" href="/users/css/modal.css">

{{--    favicon --}}

    <link rel="apple-touch-icon" sizes="180x180" href="/users/images/favicon_package_v0.16/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/users/images/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/users/images/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="/users/images/favicon_package_v0.16/site.webmanifest">
    <link rel="mask-icon" href="/users/images/favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="yandex-verification" content="c8e661459c678858" />

{{--     <link rel="stylesheet" href="/site/css/plugins/plugins.css">--}}
{{--    <link rel="stylesheet" href="/site/css/style.css">--}}

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="/users/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/users/css/style.min.css">
    <!-- Modernizr JS -->
    <script src="/users/js/vendor/modernizr-3.10.0.min.js"></script>


    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-cc179aff-0709-427f-b612-e3e9ede78915"></div>

</head>

<body class="template-color-1" >

<div id="main-wrapper" >
    <!--Header section start-->
    <header class="@section('header-class')header-absolute @show sb-border header-sticky d-none d-lg-block ">
        <div class="main-header">
            <div class="container-fluid pl-50 pl-lg-15 pl-md-15 pr-0">
                <div class="row align-items-center no-gutters">
                    <!--Logo start-->
                    <div class="col-xl-2 col-lg-2 col-12">
                        <div class="logo mb-3">
                            <a href="{{route('home')}}"><img  src="/users/images/logo-main.png" alt=""></a>
                        </div>
                    </div>
                    <!--Logo end-->

                    <!--Menu start-->
                    <div class="col-xl-7 col-lg-7 col-12">
                        <nav class="main-menu">
                            <ul>
                                <li><a href="{{route('home')}}">??????????????</a></li>
                                <li><a href="{{route('catalog')}}">??????????????</a></li>
                                <li><a href="{{route('showDelivery')}}">?????????????????? ?? ????????????</a></li>
                                <li><a href="{{route('showAbout')}}">?? ????????????????</a></li>
                                <li><a href="{{route('showContacts')}}">????????????????</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--Menu end-->

                    <!-- Cart & Search Area Start -->
                    <div class="col-xl-3 col-lg-3 col-12">
                        <div class="header-btn-action d-flex justify-content-end header-social">
                            <div class="info ">
                                <ul class="social-icon">
                                    <li><a class="facebook" href="https://teleg.run/progressshop"><i class="fab fa-telegram-plane"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://wa.me/+79112923414"><i class="fab fa-whatsapp"></i></a></li>

                                </ul>
                            </div>
                            <div class="btn-action-wrap display-flex ">
                                <div class="jp-author item">
                                    <a  name="#popup_1" class="popup-link">
                                        <i class="lnr lnr-pointer-right"></i>
                                        <span>???????????????? ????????????</span>
                                    </a>

                                </div>
                                <div class="jp-author item">
                                    <a href="tel:+79112923414">
                                        <i class="lnr lnr-phone-handset"></i>
                                        <span> +7 911 292-34-14</span>
                                    </a>
                                </div>
                                <div class="jp-author item">
                                    <a href="mailto:zakaz@progressshop.ru">
                                        <i class="lnr lnr-envelope"></i>
                                        <span>zakaz@progressshop.ru</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>                                                                <!-- Cart & Search Area End -->
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
                        <a href="{{route('home')}}">
                            <img src="/users/images/logo-mobile.png" alt="Multipurpose">
                        </a>
                    </div>
                    <a class="mobile-close" href="#"></a>
                </div>
                <div class="menu-content">
                    <ul class="menulist object-custom-menu">
                        <li><a href="{{route('home')}}"><span>??????????????</span></a>
                        </li>

                        <li><a href="{{route('catalog')}}"><span>??????????????</span></a></li>

                        <li><a href="{{route('showAbout')}}"><span>?? ????????????????</span></a></li>

                        <li><a href="{{route('showDelivery')}}"><span>?????????????????? ?? ????????????</span></a></li>

                        <li><a href="{{route('showContacts')}}"><span>????????????????</span></a></li>

                        <li><a href="tel:+79112923414"><span> +7 911 292-34-14</span></a></li>

                        <li><a href="mailto:zakaz@progressshop.ru">
                                <i class="lnr lnr-envelope"></i>
                                <span>zakaz@progressshop.ru</span>
                            </a>
                        </li>

                        <li>
                            <div class="info ">
                                <ul class="social-icon">
                                    <li><a class="facebook" href="https://teleg.run/progressshop"><i class="fab fa-telegram-plane"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://wa.me/+79112923414"><i class="fab fa-whatsapp"></i></a></li>

                                </ul>
                            </div>
                        </li>
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
                        <div class="col-xl-5 col-lg-3 col-md-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget mb-30">
                                <h6 class="title">???????? ????????????????</h6>
                                <div class="address">
                                    <i class="lnr lnr-map-marker"></i>
                                    <span>?????????????????????? ?????????? 195220, ?????????? ??????????- ??????????????????, ?????????????????????? ????????????, ?????? 7 ???????????? 4 ?????????? ??, ???????????????? 574

    </span>
                                </div>
                                <div class="address">
                                    <i class="lnr lnr-apartment"></i>
                                    <span>???????????????? ?? ???????????????????????? ???????????????????????????????? ????????????????????

    </span>
                                </div>
                                <div class="email">
                                    <a href="mailto:zakaz@progressshop.ru">
                                        <i class="lnr lnr-envelope"></i>
                                        <span>zakaz@progressshop.ru</span>
                                    </a>
                                </div>
                                <div class="phone theme-color">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <a href="tel:+79112923414">+7 911 292-34-14</a>
                                </div>

                            </div>
                            <!-- Footer Widget End -->
                        </div>

                        <div class="col-xl-4 col-lg-2 col-md-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget mb-30">
                                <h6 class="title">????????????????-?????????????? ????????????????</h6>
                                <div class="footer-widget-link">
                                    <ul>
                                        <li><a href="{{route('showContacts')}}">????????????????</a></li>
                                        <li><a href="{{route('showAbout')}}">O ????????????????</a></li>
                                        <li><a href="{{route('showDelivery')}}">???????????????? ?? ????????????</a></li>
                                        <li><a href="#">???????????????? ????????????????????????????????????</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Footer Widget End -->
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <!-- Footer Widget Start -->
                            <div class="footer-widget mb-30">
                                <h6 class="title">??????????????</h6>
                                <div class="footer-widget-link">
                                    <ul>
                                        <li><a href="{{route('catalog')}}">?????? ????????????</a></li>
                                        <li><a href="{{route('catalog')}}">?????? ??????????????????</a></li>

                                    </ul>
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
                                <p>&copy;{{date('Y')}} <a href="{{route('home')}}">????????????????</a>. ?????? ?????????? ????????????????.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="footer-social">

                                <a href="https://teleg.run/progressshop"><i class="fab fa-telegram"></i></a>
                                <a href="https://wa.me/+79112923414"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->

        </footer>
        <!--Footer section end-->

        <!--modal-->
    <div class="popup" id="popup_1" >
            <div class="popup__body">
                <div class="popup__content">
                    <a class="popup__close close-popup">X</a>

                    <div class="popup-form form-popup">
                        <h2 class="popup-form__title">???????????????? ???????????? ?????? ??????????????????  <br>?????????????? ???????????? ?? ???????????????? ???? ?????????? ?????????????????? ?? ?????????????????????????? ??????????????.</h2>
                        <span class="popup-form__subtitle">?????????????????? ???????? ???????? - ???? ???????????????? ?? ????????</span>
                        <form action="{{route('sendForm')}}"  method="post">
                            @csrf
                            <input type="text" name="name" class="popup-form__input form-popup__name "
                                   placeholder="???????? ??????" required>
                            <input type="tel" name="telephone" class="telephone popup-form__input form-popup__phone"
                                   placeholder="?????? ??????????????" required>
                            <button type="submit" class="button popup-form__button">???????????????? ?????????? </button>
                            <span class="popup-form__descr" class="popup-form____descr">?????? ???? ???????????? ?????????????????????? ?????? ???????? ????
                            ????????????????:</span>
                            <a href="tel:+79112923414" class="popup-form__tel">+7 911 292-34-14</a>
                        </form>


                        <div class="info ">
                            <ul class="social-icon">
                                <li><a class="facebook" href="https://teleg.run/progressshop"><i class="fab fa-telegram-plane"></i></a></li>
                                <li><a class="twitter" target="_blank" href="https://wa.me/+79112923414"><i class="fab fa-whatsapp"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="popup" id="popup_2" >
        <div class="popup__body">
            <div class="popup__content">
                <a class="popup__close close-popup">X</a>

                <div class="popup-form form-popup">
                    <h2 class="popup-form__title"> ???????????????? ???????????? ?????? ??????????????????  <br>?????????????? ???????????? ?? ???????????????? ???? ?????????? ?????????????????? ?? ?????????????????????????? ??????????????.</h2>
                    <span class="popup-form__subtitle">?????????????????? ???????? ???????? - ???? ???????????????? ?? ????????</span>
                    <form action="{{route('sendForm')}}"  method="post">
                        @csrf
                        <input type="text" name="name" class="popup-form__input form-popup__name "
                               placeholder="???????? ??????" required>
                        <input type="tel" name="telephone" class="telephone popup-form__input form-popup__phone"
                               placeholder="?????? ??????????????" required>
                        <button class="button popup-form__button">???????????????? ????????????????????????</button>
                        <span class="popup-form__descr" class="popup-form____descr">?????? ???? ???????????? ?????????????????????? ?????? ???????? ????
						????????????????:</span>
                        <a href="tel:+79112923414" class="popup-form__tel">+7 911 292-34-14</a>
                    </form>


                    <div class="info ">
                        <ul class="social-icon">
                            <li><a class="facebook" href="https://teleg.run/progressshop"><i class="fab fa-telegram-plane"></i></a></li>
                            <li><a class="twitter" target="_blank" href="https://wa.me/+79112923414"><i class="fab fa-whatsapp"></i></a></li>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

            @if (session('success'))

        <div class="popup_thanks active_popup">
            <div class="thanks">
                <a class="close-thanks"><img class="close-icons" src="/users//images/close-modal.png" alt=""></a> <!-- ?????? ?????????? ???????????????????? ???????????????? ???????????????????????? ???????? -->
                <div class="form-thanks">
                    <div id="form_response" class="text-center">
                        <h1 class="popup_thanks__title">?????????????? ???? ????????????!!!</h1>
                        <p class="popup_thanks__subtitle">{{session('success')}}</p>
                        <p class="popup_thanks__subtitle">?? ?????????????????? ?????????? ?? ???????? ???????????????? ?????? ????????????????????.</p>
                    </div>
                </div>

            </div>
            <div class="overlay-form"></div> <!-- ???????????????????? ????????. ?????? ?????????? ?????????????????? ?????????????????????? ???????? -->
        </div>

            @endif

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    {{--<script src="/site/js/jquery-3.5.0.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="/users/js/jquery-migrate-3.1.0.min.js"></script>
<script src="/users/js/bootstrap.bundle.min.js"></script>


<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="/users/js/plugins.min.js"></script>
<script src="/users/js/main.js"></script>
<script src="/users/js/modal.js"></script>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(83471203, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/83471203" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>

</html>
