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
                        <div class="hero-content-4 center">
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
                            <h3 class="title">Популярные товары</h3>
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

                                                            <div class="title-name">
                                                                <h3 class="job-title">
                                                                    <a href="job-details.html">{{$product->title}}</a>
                                                                </h3>
                                                                <div class="employer-name">
                                                                    <a href="{{route('showProduct', [$product->category->slug, $product->id])}}">{{$product->category->title}}</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="job-salary"> <em>оптом - </em>{{$product->wholesale}} <i class="fas fa-ruble-sign"></i>  </p>
                                                        <p class="job-salary"> <em> в розницу - </em>{{$product->retail}} <i class="fas fa-ruble-sign"></i></p>

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

                        <a  name="#popup_1" class="popup-link ht-btn lg-btn">Получить консультацию</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Section End -->







@endsection
