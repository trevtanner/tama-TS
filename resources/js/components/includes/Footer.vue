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
<!--                            <a href=""><img src="https://via.placeholder.com/200?text=Tama+Team+Sports+Logo" alt=""></a>-->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                            <!-- Links -->
                            <h4 class="text-uppercase">Products</h4>
                            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a :href="tag1">Apparel</a> || <a :href="tag2">Drinkware</a>
                            </p>
                            <p>
                                <a :href="tag3">Bags</a> || <a :href="tag4">Tactical</a>
                            </p>
                            <p>
                                <a :href="tag5">Coin</a> || <a :href="tag6">Miscellaneous</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                            <!-- Links -->
                            <h4 class="text-uppercase">Links</h4>
                            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                <a :href="productIndex">Products</a> ||  <a :href="suppliersIndex">Manufacturers</a>
                            </p>
                            <p>
                                <a :href="imprint">Imprinting</a> || <a :href="faq">FAQ</a>
                            </p>
                            <p>
                                <a :href="contact">Contact Us</a>
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
                            <h4 class="text-uppercase">Tama Team Sports</h4>
                            <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
                            <p>
                                Colorado Springs || CO
                            </p>
                            <p>
                                +1-719-999-9999
                            </p>
                            <p>
                                <a href="mailto: brianemail@tamateamsports.com">brian@tamateamsports.com</a>
                            </p>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3"  >© {{ new Date().getFullYear() }} Copyright
                    <a :href="home"> Tama Team Sports</a> <a href="#">Privacy Policy</a>
                </div>
                <!-- Copyright -->
                <!-- Footer -->
    </footer>
</template>

<script>
    export default {
        props: {
            home: {type: String, required: true},
            productIndex: {type: String, required: true},
            tag1: {type: String, required: true},
            tag2: {type: String, required: true},
            tag3: {type: String, required: true},
            tag4: {type: String, required: true},
            tag5: {type: String, required: true},
            tag6: {type: String, required: true},
            suppliersIndex: {type: String, required: true},
            contact: {type: String, required: true},
            imprint: {type: String, required: true},
            faq: {type: String, required: true},
        }
    }
</script>

<style scoped>

.tama-footer {
    background-color: black;
    font-family: 'Black Ops One', cursive;
}
.tama-footer h5 {
    font-family: 'Black Ops One', cursive;
}
    .footer-copyright {
        color: red;
    }
</style>
