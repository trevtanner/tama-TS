<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
    <div style="background-color: black;">
        <div class="container">

            <!-- Grid row-->
        {{--
                    <div class="row py-1 d-flex align-items-center">

                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g white-text mr-4"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram white-text"> </i>
                            </a>

                        </div>
                        <!-- Grid column -->

                    </div>
        --}}
        <!-- Grid row-->


            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5 text-white pt-4">

                <!-- Grid row -->
                <div class="row mt-3">

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4 align-items-center">

                        <!-- Content -->
                        <a href=""><img src="https://via.placeholder.com/250?text=Tama+Team+Sports+Logo" alt=""></a>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Products</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="{{route('tag', 1)}}">Apparel</a>
                        </p>
                        <p>
                            <a href="{{route('tag', 2)}}">Drinkware</a>
                        </p>
                        <p>
                            <a href="{{route('tag', 3)}}">Bags</a>
                        </p>
                        <p>
                            <a href="{{route('tag', 4)}}">Tactical</a>
                        </p>
                        <p>
                            <a href="{{route('tag', 5)}}">Coin</a>
                        </p>
                        <p>
                            <a href="{{route('tag', 6)}}">Miscellaneous</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Links</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="{{ route('products.index') }}">Products</a>
                        </p>
                        <p>
                            <a href="{{ route('suppliers.index') }}">Suppliers</a>
                        </p>
                        <p>
                            <a href="{{ route('imprint') }}">Imprint Information</a>
                        </p>
                        <p>
                            <a href="{{ route('faq') }}">FAQ</a>
                        </p>
                        <p>
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </p>
                        @if(auth()->user())

                        @else
                            <p>
                                <a href="{{route('login')}}">Login</a>
                            </p>
                        @endif
                        @if(auth()->user())
                            <p>
                                <a href="{{route('suppliers.create')}}">Add Supplier</a>
                            </p>
                            <p>
                                <a href="{{ route('products.create') }}">Add Product</a>
                            </p>
                        @endif
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Tama Team Sports</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            Colorado Springs, CO
                        </p>
                        <p>
                            +1-719-999-9999
                        </p>
                        <p>
                            <a href="mailto: testemail@tamateamsports.com">testemail@tamateamsports.com</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-white">© <?php echo date("Y"); ?> Copyright
                <a href="{{ route('home') }}"> Tama Team Sports</a>
            </div>
            <!-- Copyright -->
            <!-- Footer -->
        </div>
    </div>
</footer>