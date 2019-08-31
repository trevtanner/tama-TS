@extends('layouts.app')
@section('title')
    <title>Products-Tama Team Sports</title>
@endsection
@section('content')
{{--
                <!-- Navigation -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="#">Start Bootstrap</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>--}}

                <!-- Page Content -->
                <div class="container">

                    <div class="row">

                    @include('includes.tagssidebar')

                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="row">

                                @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a>
                                            </h5>

                                            <p class="card-text">{{ $product->productnumber }}</p>

                                            <p class="card-text">{{ $product->shortdescript }}</p>
                                            <hr>
                                            {{ $product->supplier->name }}
                                        </div>
                                        <div class="card-footer">@foreach ($product->tags as $tag)
                                                <a href="{{ route('tag', $tag->id) }}">{{ $tag->name }}</a>
                                            @endforeach</div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.col-lg-9 -->

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <script>

        function handleDelete(id) {
            var form = document.getElementById('deleteProductForm');
            form.action = '/products/' + id;
            $('#deleteModel').modal('show');
        }
    </script>
@endsection

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

@endsection
