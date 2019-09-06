@extends('layouts.app')
@section('title')
    <title>{{ $product->title }} - Tama Team Sports</title>
@endsection
@section('content')
    <div class="container">

        <div class="row">
        @include('includes.productsidebar')
    <div class="col-lg-2"></div>
            <div class="col-lg-6 pt-2">
                <div class="card mt-4 align-items-center">
                    <img class="card-img-top pt-2" src="{{ asset('storage/' . $product->image) }}" alt="">
                    <div class="card-body text-center">
                        <h3 class="card-title">{{ $product->title }}</h3>
                        @if(auth()->user())
                            <div class="pt-1 pb-2">
                            <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $product->id }})">Delete</button>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="" method="POST" id="deleteProductForm">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Delete Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-bold">
                                                    Are you sure you want to delete this product?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, back</button>
                                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        @endif
                        <h4 class="card-text">Supplier:</h4>
                        <p class="card-text">
                            <a href="{{ route('supplier', $product->supplier->id) }}">{{ $product->supplier->name }}</a>
                        </p>
                        <h5 class="card-text">Product #:</h5>
                        <p class="card-text">
                            {{ $product->productnumber }}
                        </p>
                        <br>
                        <p class="card-text">{{ $product->shortdescript }}</p>
                        <h4 class="card-text">Description:</h4>
                        <p class="card-text">{{ $product->longdescript }}</p>
                        <br>
                        <h5 class="card-text">Category:</h5>
                        <p class="card-text">
                            @foreach ($product->tags as $tag)
                                <a href="{{ route('tag', $tag->id) }}">{{ $tag->name }}</a>
                            @endforeach
                        </p>
                        <p class="card-text">
                            @foreach ($product->subcategories as $subcategory)
                                <a href="#">{{ $subcategory->name }}</a>
                            @endforeach
                        </p>


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
    <link href="css/shop-item.css" rel="stylesheet">

@endsection

@section('scripts')

    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteProductForm');
            form.action = '/products/' + id;
            $('#deleteModel').modal('show');
        }
    </script>
@endsection
