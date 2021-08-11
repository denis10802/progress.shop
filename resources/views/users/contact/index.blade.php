@extends('layouts.main_layout')

@section('title', 'Контакты')

@section('header-class') black-logo-version sticky-white @endsection


@section('content')



    <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb-content">
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <li>Контакты</li>
                        </ul>
                        <h1>Наши контакты</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <div class="contact-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container contact-wrapper">
            <div class="row row-30">



                <div class="col-lg-7">
                    <!-- Contact info Start -->
                    <div class="contact-info mb-30">
                        <h2 class="title">Контакты</h2>
                        <div class="contact-information">
                            <div class="info">
                                <span class="title">Наименование:</span>
                                <span class="text">ООО «Прогресс»</span>
                            </div>
                            <div class="info">
                                <span class="title">Телефон:</span>
                                <span class="text phone"><a href="tel:+79112923414">+7 911 292-34-14</a></span>
                            </div>
                            <div class="info">
                                <span class="title">Email:</span>
                                <span class="text"><a href="mailto:zakaz@progressshop.ru">zakaz@progressshop.ru</a></span>
                            </div>
                            <div class="info">
                                <span class="title">ОГРН:</span>
                                <span class="text">1207800091487</span>
                            </div>
                            <div class="info">
                                <span class="title">ИНН/КПП:</span>
                                <span class="text">7804672598/ 780401001</span>
                            </div>
                            <div class="info">
                                <span class="title">Подписывайтесь на нас:</span>
                                <ul class="social-icon">
                                    <li><a class="facebook" href="https://teleg.run/progressshop"><i class="fab fa-telegram-plane"></i></a></li>
                                    <li><a class="twitter" target="_blank" href="https://wa.me/+79112923414"><i class="fab fa-whatsapp"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Contact info End -->
                </div>

                <div class="col-lg-5">
                    <!-- Contact info Start -->
                    <div class="contact-info mb-30">
                        <h2 class="title">Напишите нам</h2>
                        <div class="contact-form">
                            <form action="{{route('sendForm')}}"  method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <input type="text" placeholder="Ваше имя" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <input type="email" placeholder="Ваш Email-адрес " name="email" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="single-input">
                                            <input type="tel" placeholder="Ваш телефон" name="telephone" required>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-40">
                                        <button class="ht-btn">Отправить</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact info End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Contact Section End -->


@endsection
