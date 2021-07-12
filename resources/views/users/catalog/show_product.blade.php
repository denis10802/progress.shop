@extends('layouts.main_layout')

@section('title', $product->title)

@section('header-class') black-logo-version sticky-white @endsection


@section('content')

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb-content">
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <li><a href="{{route('catalog')}}">Каталог</a></li>
                            <li><a href="{{route('showCategory',$product->category->slug)}}">{{$product->category->title}}</a></li>
                            <li>{{$product->title}}</li>


                        </ul>
                        <h1>{{$product->category->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Start -->

    <!-- Product Details Section Start -->
    <div class="product-details-section section bg_color--5 pb-120 pb-lg-100 pb-md-80 pb-sm-60 pb-xs-50">
        <div class="container faq-wrapper">
            <div class="row">

                <div class="product-details col-12 mb-50">
                    <div class="product-inner row">
                        <div class="col-lg-4 col-12 mb-sm-30 mb-xs-30">
                            <div>
                                <div class="item"><img src="{{Storage::url($product->image)}}" alt="{{$product->image}}"></div>
                            </div>

                        </div>
                        <div class="col-lg-5 col-12 mb-sm-30 mb-xs-30">
                            <div class="content">
                                <h3 class="title">{{$product->title}}</h3>

                                <h3 class="price">
                                    <span>${{$product->wholesale}}</span>
                                    <span class="new">${{$product->retail}}</span>
                                </h3>

                                <div class="desc">
                                    <p>{{$product->descr}}</p>
                                </div>

                                <div class="actions">
                                    <a href="#" class="add-to-cart">ЗАКАЗАТЬ ЗВОНОК</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="common-sidebar-widget sidebar-five">
                                <h2 class="sidebar-title">Категории</h2>
                                <div class="sidebar-list">
                                    <ul>
                                        @foreach($categories as $category)

                                         <li><a href="{{ route('showCategory',$category->slug) }}">{{$category->title}}         ({{$category->products->count()}})</a></li>

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-50">
                    <ul class="product-details-tab-list nav">
                        <li><a class="active show" href="#product-description" data-toggle="tab">Описание продукта</a></li>
                        <li><a href="#product-review" data-toggle="tab">Технические характеристики</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="product-description" class="tab-pane active show">
                            <div class="product-description">
                                @foreach($product->descriptions as $description )
                                        <h6 style="font-weight: 700">{{$description->name_descr}}</h6>
                                            <p>{{$description->descr}}</p>
                                @endforeach
                            </div>
                        </div>
                        <div id="product-review" class="tab-pane">
                            <div class="product-review">

                                <div class="review-form">
                                    <div class="col-12">
                                <!-- Cart Table -->
                                <div class="cart-table table-responsive mb-30">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="pro-title">Технические характеристики</th>
                                            <th class="pro-price">Значение</th>
                                        </tr>
                                        </thead>
                                        @foreach($product->specifications as $specification )
                                        <tbody>


                                        <tr>
                                            <td class="pro-title">{{$specification->name_param}}</td>
                                            <td class="pro-price"><span>{{$specification->param}}</span></td>
                                        </tr>


                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Product Details Section End -->

@endsection

