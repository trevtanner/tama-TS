@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex col-md-4">
                @include('includes.productsidebar')
            </div>
            <div class="col-md-8">
                <card class="card-default">
                    <div class="card-header">
                        {{ isset($product) ? 'Edit Product' : 'Create Product' }}
                    </div>
                    <div class="card-body">
                        @include('partials.errors')
                        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
                            @csrf
                            @if(isset($product))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="title">Product Title:</label>
                                <input type="text" id="title" class="form-control" name="title" value="{{ isset($product) ? $product->title : '' }}">
                            </div>
                            <div class="form-group">
                                <label for="shortdescript">Product Short Description:</label>
                                <input type="text" id="shortdescript" class="form-control" name="shortdescript" value="{{ isset($product) ? $product->shortdescript : '' }}">
                            </div>

                            {{--Add text edit similar to cms project--}}
                            <div class="form-group">
                                <label for="longdescript">Product Long Description:</label>
                                <input type="text" id="longdescript" class="form-control" name="longdescript" value="{{ isset($product) ? $product->longdescript : '' }}">
                            </div>
                            {{--add checkboxes for size, all to start, then dynamic based on Main tag--}}
                            <div class="form-group">
                                <label>Product Size(if applicable):</label><br>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="Small" name="sizes">
                                    <label class="custom-control-label" for="Small">Small</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="Medium" name="sizes">
                                    <label class="custom-control-label" for="Medium">Medium</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="Large" name="sizes">
                                    <label class="custom-control-label" for="Large">Large</label>
                                </div>
                            </div>

                            {{--add checkboxes for colors; red, green, yellow, etc--}}
                            <div class="form-group">
                                <label for="colors">Product Colors(if applicable):</label>
                                <input type="text" id="colors" class="form-control" name="colors" value="{{ isset($product) ? $product->size : '' }}">
                            </div>

                            {{--change to image input, look up how to add multiple images per product--}}
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="text" id="image" class="form-control" name="image" value="{{ isset($product) ? $product->image : '' }}">
                            </div>
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

    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteProductForm');
            form.action = '/products/' + id;
            $('#deleteModel').modal('show');
        }
    </script>
@endsection
