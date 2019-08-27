@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row medium-padding120">
            <div class="product-details">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="product-details-thumb">
                        <div class="swiper-container" data-effect="fade">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="product-details-img-wrap swiper-slide">
                                    <img src="{{ asset( $product->image) }}" alt="product" data-swiper-parallax="-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="product-details-info">
                        <h3 class="product-details-info-title">{{ $product->title }}</h3>
                        <br>
                        <h4>Supplier:</h4>
                        <p class="product-details-info-text">
                            @foreach ($suppliers as $supplier)
                                {{ $supplier->name }}
                            @endforeach
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


                        </div>

                    </div>
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
