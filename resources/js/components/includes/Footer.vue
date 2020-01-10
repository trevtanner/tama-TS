<template>
    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark tama-footer">

                <!-- Footer Links -->
                <div class="container text-center text-md-left mt-5 text-white pt-2">

                    <!-- Grid row -->
                    <div class="row mt-2">

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-3 align-items-center">

                            <!-- Content -->
                            <a href=""><img src="https://via.placeholder.com/200?text=Tama+Team+Sports+Logo" alt=""></a>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                            <!-- Links -->
                            <h5 class="text-uppercase font-weight-bold">Products</h5>
                            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a href="#">Apparel</a> || <a href="#">Drinkware</a>
                            </p>
                            <p>
                                <a href="#">Bags</a> || <a href="#">Tactical</a>
                            </p>
                            <p>
                                <a href="#">Coin</a> || <a href="#">Miscellaneous</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                            <!-- Links -->
                            <h5 class="text-uppercase font-weight-bold">Links</h5>
                            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a href="#">Products</a> ||  <a href="#">Suppliers</a>
                            </p>
                            <p>
                                <a href="#">Imprinting</a> || <a href="#">FAQ</a>
                            </p>
                            <p>
                                <a href="#">Contact Us</a>
                            </p>
                           <!-- @if(auth()->user())

                            @else
                            <p>
                                <a href="#">Login</a>
                            </p>
                            @endif
                            @if(auth()->user())
                            <p>
                                <a href="#">Add Supplier</a>
                            </p>
                            <p>
                                <a href="#">Add Product</a>
                            </p>
                            @endif-->
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                            <!-- Links -->
                            <h5 class="text-uppercase font-weight-bold">Tama Team Sports</h5>
                            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                Colorado Springs || CO
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

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3"  >© {{ new Date().getFullYear() }} Copyright
                    <a href="#"> Tama Team Sports</a> <a href="#">Privacy Policy</a>
                </div>
                <!-- Copyright -->
                <!-- Footer -->
    </footer>
</template>

<script>
    export default {
    }
</script>

<style scoped>

.tama-footer {
    background-color: black;
}
    .footer-copyright {
        color: red;
    }
</style>
