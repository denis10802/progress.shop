@extends('layouts.shop_layout')

@section('title', $cat->title)

@section('breadcrumb-section')

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb-content">
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <li><a href="{{route('catalog')}}">Каталог</a></li>
                            <li>{{$cat->title}}</li>

                        </ul>
                        <h1>{{$cat->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Start -->

@endsection



@section('content')



    <div class="col-lg-8 col-12 order-lg-2 order-1">
        <div class="row">

            <div class="col-lg-12">

                <div class="shop-product">
                    <div class="row">
                        @foreach($cat->products as $product)


                            <div class="col-lg-4 col-md-6 col-sm-6 col-12  card-border-bottom">
                                <div class="single-product mb-30">
                                    <div class="product-image">
                                        <a href="{{route('showProduct', [$product->category->slug, $product->id])}}">
                                            <img src="{{Storage::url($product->image)}}" alt="{{$product->image}}">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4 class="title"><a href="{{route('showProduct', [$product->category->slug, $product->id])}}">{{$product['title']}}</a></h4>

                                        <h4 class="price price-flex">
                                            <i style="font-size: 14px">В розницу</i>
                                            <span class="new">{{$product->retail}} <i class="fas fa-ruble-sign"></i></span>
                                            <i style="font-size: 14px">Оптом</i>
                                            <span class="old">{{$product->wholesale}} <i class="fas fa-ruble-sign"></i></span>

                                        </h4>
                                        <div class="all-link-button text-center mt-10">

                                            <a href="{{route('showProduct', [$product->category->slug, $product->id])}}" class="ht-btn lg-btn">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    @endforeach


                    <!-- Start Single Product -->

                        <!-- End Single Product -->

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
