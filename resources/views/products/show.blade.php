@extends('layouts.app')
@section('title')
    <title>{{ $product->title }}-Tama Team Sports</title>
@endsection
@section('content')
    <div class="container">
        <div class="row medium-padding120">
            @include('includes.productsidebar')
            <div class="product-details col-lg-8 col-md-8 col-sm-12 col-xs-12 d-flex">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pt-5">
                    <div class="product-details-thumb">
                        <div class="swiper-container" data-effect="fade">
                        <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                            <!-- Slides -->
                                <div class="product-details-img-wrap swiper-slide">
                                    {{--                                    <img src="{{ asset( $product->image) }}" alt="product" data-swiper-parallax="-10">--}}
                                    <a href="https://placeholder.com"><img src="https://via.placeholder.com/300"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="product-details-info col-lg-6 col-md-4 col-sm-6 col-xs-6 pb-4 pt-5">
                        <h3 class="product-details-info-title">{{ $product->title }}</h3>
                        <br>
                        <h4>Supplier:</h4>
                        <p class="product-details-info-text">
                            {{ $product->supplier->name }}
                        </p>
                        <h5>Product #:</h5>
                        <p class="product-details-info-text">
                            {{ $product->productnumber }}
                        </p>
                        <br>
                        <p class="product-details-info-text">{{ $product->shortdescript }}</p>
                        <h4>Description:</h4>
                        <p class="product-details-info-text">{{ $product->longdescript }}</p>
                        <br>
                        <h4>Sizes:</h4>
                        <p class="product-details-info-text">
                        @foreach ($product->sizes as $size)
                                {{ $size->name }}
                            @endforeach
                        </p>
                        <h4>Colors:</h4>
                        <p class="product-details-info-text">
                        @foreach ($product->colors as $color)
                                {{ $color->name }}
                            @endforeach
                        </p>
                        <p class="product-details-info-text">
                            @foreach ($product->tags as $tag)
                                <a href="{{ route('tag', $tag->id) }}">{{ $tag->name }}</a>
                            @endforeach
                        </p>


                    </div>

                </div>
            </div>
        </div>
@endsection

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

@endsection
