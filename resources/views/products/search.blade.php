@extends('layouts.app')

@section('title')
    <title>Search - Tama Team Sports</title>
@endsection

@section('content')
    <div class="container pt-4 justify-content-center text-center">
        <div class="row justify-content-center text-center">
            <h1>Search Products</h1>
        </div>
        <br>
        <hr>
        <br>
        <form action="{{ route('search') }}" class="form-group" method="GET">
            <input type="text" class="form-control" name="search" placeholder="Search Products" style="color: #d1102b">
            <br>
            <button class="btn btn-lg my-2" style="background-color: red; color: white" type="submit">Search</button>
        </form>
        <hr>
        <div class="row pt-3">
            <div class="col-12 align-text-center"><h3>Results<br><br></h3></div>
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        {{--                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>--}}
                        <a href="{{ route('products.show', $product->id) }}"><img class="card-img-top"
                                                                                  src="{{ asset('storage/' . $product->index_image) }}"
                                                                                  alt=""></a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a>
                            </h5>

                            <p class="card-text">{{ $product->productnumber }}</p>

                            <p class="card-text">{{ $product->shortdescript }}</p>
                            <hr>
                            <a href="{{ route('supplier', $product->supplier->id) }}">{{ $product->supplier->name }}</a>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('tag', $product->tag->id) }}">{{ $product->tag->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="row justify-content-center">
            <p>
                {{ $products->appends(['search' => request()->query('search')])->links() }}

            </p>
        </div>
    </div>

@endsection
