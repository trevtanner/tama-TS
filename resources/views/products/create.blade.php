@extends('layouts.app')
@section('title')
    <title>Create Product-Tama Team Sports</title>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('includes.tagssidebar')
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pb-4 pt-4">
                <card class="card-default">
                    <div class="card-header">
                        {{ isset($product) ? 'Edit Product' : 'Create Product' }}
                    </div>
                    <div class="card-body">
                        @include('partials.errors')
                        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($product))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="title">Product Title:</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       value="{{ isset($product) ? $product->title : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="productnumber">Product #:</label>
                                <input type="text" id="productnumber" class="form-control" name="productnumber"
                                       value="{{ isset($product) ? $product->productnumber : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="shortdescript">Product Short Description:</label>
                                <input type="text" id="shortdescript" class="form-control" name="shortdescript"
                                       value="{{ isset($product) ? $product->shortdescript : '' }}">
                            </div>

                            {{--Add text edit similar to cms project--}}
                            <div class="form-group">
                                <label for="longdescript">Product Long Description:</label>
                                <textarea name="longdescript" id="longdescript" cols="20" rows="10"
                                          class="form-control">{{ isset($product) ? $product->longdescript : '' }}</textarea>

                            </div>

                            @if(isset($product))
                                <div class="form-group">
                                    <img src="{{ asset('storage/' . $product->index_image) }}" alt=""
                                         style="width: 100%">
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="index_image">Index Image:</label>
                                <input type="file" class="form-control-file" name="index_image" id="index_image">
                            </div>
                            @if(isset($product))
                                <div class="form-group">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="" style="width: 100%">
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <label for="supplier">Supplier:</label>
                                <select name="supplier" id="supplier" class="custom-select">
                                    <option value="" disabled selected>Select Supplier</option>
                                    @foreach($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}"
                                                @if(isset($product))
                                                @if($supplier->id === $product->supplier_id)
                                                selected
                                                @endif
                                                @endif

                                        >{{ $supplier->name }}</option>


                                    @endforeach
                                </select>
                            </div>
                            @if($tags->count() > 0)
                                <div class="form-group">
                                    <label for="tag">Category:</label>
                                    <select name="tag" id="tag" class="custom-select">
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}"
                                                    @if(isset($product))
                                                    @if($product->hasTag($tag->id))
                                                    selected
                                                    @endif
                                                    @endif
                                            >
                                                {{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                            @if($subcategories->count() > 0)
                                <div class="form-group">
                                    <label for="subcategory">Sub-Category:</label>
                                    <select name="subcategory" id="subcategory" class="custom-select">
                                        <option value="" disabled selected>Select Sub-Category</option>
                                        @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}"
                                                    @if(isset($product))
                                                    @if($product->hasTag($subcategory->id))
                                                    selected
                                                    @endif
                                                    @endif
                                            >
                                                {{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                            <div class="form-group">
                                <button class="btn btn-success">
                                    {{ isset($product) ? 'Update Product' : 'Add Product' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </card>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    Bootstrap Themes


    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <script>

        function handleDelete(id) {
            var form = document.getElementById('deleteProductForm');
            form.action = '/products/' + id;
            $('#deleteModel').modal('show');

        }

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').selectpicker();
        });
    </script>
@endsection

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet"/>

@endsection
