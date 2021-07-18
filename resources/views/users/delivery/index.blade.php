@extends('layouts.main_layout')

@section('title', 'Контакты')

@section('header-class') black-logo-version sticky-white @endsection


@section('content')


    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg_color--5 pt-120 pt-lg-100 pt-md-80 pt-sm-60 pt-xs-50">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="banner-image">
                        <img src="/users/images/banner/dileviry.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-section section bg_color--5">
        <div class="container job-content-box sb-border-two">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb-content ">
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <li>Доставка и оплата</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Breadcrumb Section Start -->

    <!-- Employer Details Section Start -->
    <div class="employer-details-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container job-content-box">
            <div class="row">



                <div class="col-lg-12 order-lg-1 order-1 pr-55 pr-md-15 pr-sm-15 pr-xs-15">

                    <div class="employer-main-content">
                        <div class="field-description">

                            <h3>Доставка</h3>

                            <p>Осуществляем доставку стройматериалов по г.Санкт-Петербург собственной транспортной службой. Режим работы службы доставки ежедневно без выходных с 8:00 до 21:00 .Точная стоимость доставки зависит от веса товаров и отдаленности от склада. Позвоните нам по тел. <b><em>+7 911 292-34-14</em></b> и мы рассчитаем стоимость доставки.
                            </p>


                            <h3>Оплата</h3>
                            <ul>
                                <li> Наличный расчет
                                <p>В этом случае стоимость заказа оплачивается денежными средствами водителю-экспедитору.Товары доставляются в соответствии с документами. </p>
                                </li>
                                <li>Безналичный расчет
                                    <p>Поставщик выставляет счет, который оплачивается с помощью банковского перевода на счет продавца. При этом из-за банковских процессов зачисление происходит на следующий день.</p>

                                </li>
                            </ul>




                            <h3>Разгрузка строительных материалов</h3>

                            <p>Разгружаём и поднимаем на этаж строительный материалы с оплатой за результат,нет почасовки ,оплата только за проделанную работу. Над грузчиками не нужно стоять ,достаточно объяснить фронт работы т.к. у них сделка . Наши грузчики не рвут мешки ,а в случае если это случается аккуратно собирают всё содержимое и доносят до места.Наши работники поднимаю на 4 этаж до 55 тонн штукатурки за 2 дня. В стоимость входит разгрузка материала с автомобиля на расстоянии от подъезда не более 15 метров,поднятие на этаж ,пронос 15 метров на этаж. Разгрузка на 1 этаж идёт с коэффициентом 1,5</p>
                            <h3>Цены</h3>

                            <ul>
                                <li>Цемент 50кг 1 этаж 20 рублей</li>
                                <li>Мешок 30кг 1 этаж 15 рублей</li>
                                <li>Мешок 25 кг 1 этаж 12 рублей</li>
                                <li>Гипрок этаж 22 рубля</li>
                                <li>Мешок керамзит облегченный этаж 9 рублей</li>
                                <li>Мешок керамзит 25 кг этаж 12 рублей мешок</li>
                                <li>Пронос материала по этажу более чем 15 метров считается +1 этаж</li>
                                <li>Разгрузка материала на 1 этаж считается с  коэффициентом 1,5</li>
                                <li>Работаем как в нале так и в безнале с НДС</li>
                                <li>Минимальный заказ от 1200 рублей</li>
                            </ul>
                            <h6>Цены указаны с учётом выезда в пределах города. Выезды за пределами города обсуждаются отдельно.<br>
                                Звоните и мы обязательно Вам поможем!</h6>


                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Employer Details Section End -->


@endsection
