@extends('layouts.main_layout')

@section('title', 'Магазин')

@section('content')

    <!--slider section start-->
    <div class="hero-section section position-relative">
        <!--Hero Item start-->
        <div class="hero-item bg_image--1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--Hero Content start-->
                        <div class="hero-content-4 right">
                            <h2 class="title">БЕСПЕРЕБОЙНЫЕ ПОСТАВКИ</h2>
                            <h3 class="sub-title">CТРОИТЕЛЬНЫХ МАТЕРИАЛОВ</h3>
                            <p>ДЛЯ СТРОИТЕЛЬСТВА И РЕМОНТА </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Item end-->
    </div>
    <!--slider section end-->

    <!-- Feature Section Start -->
    <div class="feature-section section bg-image-proparty bg_image--2 pt-40 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title">Быстрая доставка </h3>
                            <p>Мы осуществляем доставку стройматериалов оперативно и точно в срок.</p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-4">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title">Любые объемы</h3>
                            <p>Поставка строительных смесей оптом в мешках напрямую с завода-производителя</p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>
                <div class="col-lg-4">
                    <!-- Single Feature Start -->
                    <div class="single-feature mb-30">
                        <div class="feature-icon">
                            <i class="fas fa-file-invoice"></i>
                        </div>
                        <div class="feature-content">
                            <h3 class="title">Гарантия качества</h3>
                            <p>Мы гарантирует качество продукции, у нас есть все необходимые сертификаты</p>
                        </div>
                    </div>
                    <!-- Single Feature End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Featured Employer Start -->
    <div class="featured-employer section pt-115 pt-lg-95 pt-md-75 pt-sm-55 pt-xs-45 mb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap mb-45">
                        <div class="section-title">
                            <h3 class="title">Каталог продукции</h3>
                        </div>
                        <div class="jetapo-link">
                            <a href="{{route('catalog')}}">Посмотреть весь каталог <i class="lnr lnr-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-five-column no-gutters border-top-left">

                @foreach($categories as $category)
                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                            <!-- Single Employer Item Start -->
                            <div class="employer-item item-border-bottom">
                                <div class="employer-image">
                                    <img src="{{Storage::url($category->image)}}" alt="">
                                </div>
                                <div class="employer-info-top">

                                    <h3 class="employer-name"><a href="{{ route('showCategory',$category->slug) }}">{{$category->title}}</a></h3>
                                </div>
                            </div>
                            <!-- Single Employer Item End -->
                        </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Featured Employer End -->


    <!-- Job Section Start -->
    <div class="job-section section bg-image-proparty bg_image--2 pt-115 pt-lg-95 pt-md-75 pt-sm-55 pt-xs-45 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap mb-45">
                        <div class="section-title">
                            <span>SEASON FEATURE JOBS</span>
                            <h3 class="title">Job Will You Love</h3>
                        </div>
                        <div class="jetapo-link">
                            <a href="{{route('catalog')}}">Посмотреть вce товары <i class="lnr lnr-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-lg-6 mb-30">
                                        <!-- Single Job Start  -->
                                        <div class="single-job">
                                            <div class="info-top">
                                                <div class="job-image">
                                                    <a href="{{route('showProduct', [$product->category->slug, $product->id])}}">
                                                        <img src="{{Storage::url($product->image)}}" alt="logo">
                                                    </a>
                                                </div>
                                                <div class="job-info">
                                                    <div class="job-info-inner">
                                                        <div class="job-info-top">
                                                            <div class="saveJob for-listing">
                                                                <span class="featured-label">featured</span>
                                                                <a class="save-job ml-20" href="index.html#quick-view-modal-container" data-toggle="modal">
                                                                    <i class="far fa-heart"></i>
                                                                </a>
                                                            </div>
                                                            <div class="title-name">
                                                                <h3 class="job-title">
                                                                    <a href="job-details.html">Chief Accountant</a>
                                                                </h3>
                                                                <div class="employer-name">
                                                                    <a href="employer-details.html">Shippo Company</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="job-salary">$700 - $900</span>
                                                        <div class="job-meta">
                                                            <div class="job-location"><i class="lnr lnr-map-marker"></i><a href="index.html#">Ho Chi Minh City</a></div>

                                                            <div class="job-type"><i class="lnr lnr-briefcase"></i><a class="def-color" href="index.html#">Full Time</a></div>

                                                            <div class="job-date"><i class="lnr lnr-clock"></i>Nov 7, 2020</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Job End -->
                                    </div>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="all-link-button text-center mt-15">
                        <a class="ht-btn lg-btn" href="index.html#">Browse All Featured Jobs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Section End -->



    <!-- Funfact Section Start  -->
    <div class="funfact-section section mt--60 pb-50 pb-sm-0 pb-xs-0">
        <div class="container">
            <div class="row no-gutters border-top-left">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Funfact Start -->
                    <div class="single-funfact">
                        <div class="icon-img">
                            <img src="assets/images/icons/candidates.png" alt="">
                        </div>
                        <div class="funfact-content">
                            <span class="counter">87,360</span>
                            <span class="text theme-color">Candidates</span>
                        </div>
                    </div>
                    <!-- Single Funfact End -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Funfact Start -->
                    <div class="single-funfact">
                        <div class="icon-img">
                            <img src="assets/images/icons/total-jobs.png" alt="">
                        </div>
                        <div class="funfact-content">
                            <span class="counter">20,258</span>
                            <span class="text theme-color">Total Jobs</span>
                        </div>
                    </div>
                    <!-- Single Funfact End -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Funfact Start -->
                    <div class="single-funfact">
                        <div class="icon-img">
                            <img src="assets/images/icons/employers.png" alt="">
                        </div>
                        <div class="funfact-content">
                            <span class="counter">8,650</span>
                            <span class="text theme-color">Employers</span>
                        </div>
                    </div>
                    <!-- Single Funfact End -->
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Single Funfact Start -->
                    <div class="single-funfact">
                        <div class="icon-img">
                            <img src="assets/images/icons/job-applications.png" alt="">
                        </div>
                        <div class="funfact-content">
                            <span class="counter">50,299</span>
                            <span class="text theme-color">job applications</span>
                        </div>
                    </div>
                    <!-- Single Funfact End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Funfact Section Start  -->

    <!-- CTA Section Start  -->
    <div class="cta-section section bg_image--3 height-100vh pt-50 pt-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-wrap mb-45">
                        <div class="cta-info">
                            <span> Getting started to work</span>
                            <h3 class="title"> Don’t just find. Be found. Put your <br> CV in front of great employers</h3>
                            <p>It helps you to increase your chances of finding a suitable job and let recruiters <br> contact you about jobs that are not needed to pay for advertising.</p>
                            <a class="ht-btn lg-btn" href="index.html#"><i class="lnr lnr-cloud-upload"></i>Upload Your Resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End  -->

    <!-- Brand Section Start  -->
    <div class="brand-section section bg_color--3 pt-40 pb-40">
        <div class="container">
            <div class="row row-five-column align-items-center">

                <div class="col-xl-2 col-20">
                    <div class="brand-heading">
                        <h3 class="title">We are <br> trusted by</h3>
                    </div>
                </div>

                <div class="col-xl-2 col-20">
                    <!-- Single Brand Start  -->
                    <div class="single-brand">
                        <a href="index.html#"><img src="assets/images/brand/brand-1.png" alt=""></a>
                    </div>
                    <!-- Single Brand End -->
                </div>

                <div class="col-xl-2 col-20">
                    <!-- Single Brand Start  -->
                    <div class="single-brand">
                        <a href="index.html#"><img src="assets/images/brand/brand-2.png" alt=""></a>
                    </div>
                    <!-- Single Brand End -->
                </div>

                <div class="col-xl-2 col-20">
                    <!-- Single Brand Start  -->
                    <div class="single-brand">
                        <a href="index.html#"><img src="assets/images/brand/brand-3.png" alt=""></a>
                    </div>
                    <!-- Single Brand End -->
                </div>

                <div class="col-xl-2 col-20">
                    <!-- Single Brand Start  -->
                    <div class="single-brand">
                        <a href="index.html#"><img src="assets/images/brand/brand-4.png" alt=""></a>
                    </div>
                    <!-- Single Brand End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section End  -->

@endsection
