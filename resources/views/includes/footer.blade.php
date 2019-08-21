
<div class="container">
            <div class="row">
                &copy; Tama Team Sports. <?php echo date("Y"); ?>. All Rights Reserved.
            </div>
            <div class="row justify-content-end">
                <div class="col-md-3 py-1">
            <a class="nav-link" href="">Site Map</a>

            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>

                <div class="col-md-4 py-1">
                {{--only viewable to users--}}
            <a class="nav-link" href="{{ route('suppliers.create') }}">Add Supplier</a>

            <a class="nav-link" href="{{ route('products.create') }}">Add Product</a>
                </div>
</div>
</div>
