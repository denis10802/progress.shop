@extends('layouts.main_layout')

@section('title', 'О компании')

@section('header-class') black-logo-version sticky-white @endsection


@section('content')


    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="banner-image">
            <img src="/users/images/about/about1.jpeg" alt="">
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-section section pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb-content">
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <li>О компании</li>
                        </ul>
                        <h1>О компании</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Start -->

    <!-- About Content Section Start -->
    <div class="about-content-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <p class="text-bold">Основной деятельностью является поставка высококачественных материалов и оборудования для производства строительных, ремонтных, гидроизоляционных, реставрационных, антикоррозионных и других видов работ.</p>
                        <p class="normal-text">  Мы предлагаем своим клиентам полный спектр современных отечественных материалов, которые прошли успешную апробацию на практике и  надежность которых мы можем гарантировать.   Вся поставляемая нашей фирмой продукция имеет сертификаты ISO 9000, надлежащие сертификаты безопасности и полностью соответствует отечественным нормативам.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Content Section End -->



    <!-- Personal Skill Section Start -->
    <div class="personal-skill-section section bg-image-proparty bg_image--2 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row no-gutters border-top-left">

                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- Single Personal Skill Start -->
                    <div class="single-personal-skill">
                        <div class="skill-icon">
                            <img src="/users/images/icons/about1.png" alt="">
                        </div>
                        <div class="personal-skill-content">
                            <h4 class="title">Комплектация заказов</h4>
                            <p>Преимущество наличия широкого ассортимента строительных материалов в одном месте. Крепкие партнерские связи с большим количеством производителей.</p>
                        </div>
                    </div>
                    <!-- Single Personal Skill End -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- Single Personal Skill Start -->
                    <div class="single-personal-skill">
                        <div class="skill-icon">
                            <img src="/users/images/icons/about2.png" alt="">
                        </div>
                        <div class="personal-skill-content">
                            <h4 class="title">Расчет веса и объема поставки</h4>
                            <p>Расчёт необходимого количества материала по проекту, либо спецификации. Расчёт стоимости доставки до строительной площадки.</p>
                        </div>
                    </div>
                    <!-- Single Personal Skill End -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- Single Personal Skill Start -->
                    <div class="single-personal-skill">
                        <div class="skill-icon">
                            <img src="/users/images/icons/about3.png" alt="">
                        </div>
                        <div class="personal-skill-content">
                            <h4 class="title">Высококвалифицированные специалисты</h4>
                            <p>Наши специалисты с многолетним опытом работы всегда готовы помочь подобрать материалы и комплектующие, исходя из Ваших запросов. </p>
                        </div>
                    </div>
                    <!-- Single Personal Skill End -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- Single Personal Skill Start -->
                    <div class="single-personal-skill">
                        <div class="skill-icon">
                            <img src="/users/images/icons/about4.png" alt="">
                        </div>
                        <div class="personal-skill-content">
                            <h4 class="title">Быстрая доставка</h4>
                            <p>Быстрая и надёжная доставка заказа в срок и с возможность механической разгрузки доставленной продукции на объекте</p>
                        </div>
                    </div>
                    <!-- Single Personal Skill End -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- Single Personal Skill Start -->
                    <div class="single-personal-skill">
                        <div class="skill-icon">
                            <img src="/users/images/icons/about5.png" alt="">
                        </div>
                        <div class="personal-skill-content">
                            <h4 class="title">Условия и надежность</h4>
                            <p>Удобство оплаты: возможен наличный, безналичный способ оплаты, банковский перевод, а так же оплата электронными деньгами.</p>
                        </div>
                    </div>
                    <!-- Single Personal Skill End -->
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                    <!-- Single Personal Skill Start -->
                    <div class="single-personal-skill">
                        <div class="skill-icon">
                            <img src="/users/images/icons/about6.png" alt="">
                        </div>
                        <div class="personal-skill-content">
                            <h4 class="title">Качество материалов</h4>
                            <p>Контроль качества материалов при отгрузке, обязательное наличие сертификатов у продукции подлежащей сертификации.</p>
                        </div>
                    </div>
                    <!-- Single Personal Skill End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Personal Skill Section End -->


@endsection
