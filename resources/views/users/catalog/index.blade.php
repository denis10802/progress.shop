@extends('layouts.shop_layout')

@section('title', 'Каталог')


@section('breadcrumb-section')

    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-section section bg_color--5 pt-60 pt-sm-50 pt-xs-40 pb-60 pb-sm-50 pb-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-breadcrumb-content">
                        <ul class="page-breadcrumb">
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <li>Каталог</li>
                        </ul>
                        <h1>Каталог</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Start -->

@endsection



@section('content')


    <div class="col-lg-9 col-12 order-lg-2 order-1">
        <div class="row">

            <div class="col-lg-12">
                <div class="archive-shop-actions mb-30">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="archive-shop-inner text-center text-sm-left">
                                <p>Всего {{$products->count()}}</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="shop-product">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-product mb-30">
                                    <div class="product-image">
                                        <a href="{{route('showProduct', [$product->category->slug, $product->id])}}">
                                            <img src="{{Storage::url($product->image)}}" alt="{{$product->image}}">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h4 class="title"><a href="{{route('showProduct', [$product->category->slug, $product->id])}}">{{$product['title']}}</a></h4>

                                        <h4 class="price"><span>${{$product['wholesale']}}</span>
                                            <span class="new">${{$product['retail']}}</span></h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Start Single Product -->

                        <!-- End Single Product -->

                    </div>
                    {{$products->links('vendor.pagination.bootstrap-4')}}

                </div>
            </div>

        </div>
    </div>

@endsection





