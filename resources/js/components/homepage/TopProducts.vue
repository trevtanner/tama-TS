<template>
    <div class="productsimg">
        <b-container class="py-2">
    <b-row>
        <b-col  cols="6" class="products text-center">
        <h1>Top Products</h1>
        </b-col>
        <b-col  cols="6" class="products text-center">
            <h1>New Products</h1>
        </b-col>
    </b-row>
<b-row>
    <b-col cols="6" class="productimg">
        <b-carousel
            id="carousel-fade"
            fade
            indicators
            controls
            img-width="400"
            img-height="400"

        >
            <a href="#">
            <b-carousel-slide
                caption="Top Product 1"
                text="Top product 1 short description, should be about this long"
                img-src="https://via.placeholder.com/400/630400/FFFFFF/?text=TamaTeamSports"
                img-width="400"
                img-height="400"
            ></b-carousel-slide>
            </a>
            <b-carousel-slide
                caption="Top Product 2"
                text="Top product 2 short description, should be about this long"
                img-src="https://via.placeholder.com/400/232732/FFFFFF/?text=TamaTeamSports"
                img-width="400"
                img-height="400"
            ></b-carousel-slide>
            <b-carousel-slide
                caption="Top Product 3"
                text="Top product 3 short description, should be about this long"
                img-src="https://via.placeholder.com/400/4E4E4E/FFFFFF/?text=TamaTeamSports"
                img-width="400"
                img-height="400"
            ></b-carousel-slide>
        </b-carousel>
    </b-col>
    <b-col cols="6" class="productimg">
        <b-carousel
            id="carousel-fade"
            fade
            indicators
            controls
            img-width="400"
            img-height="400"

        >
            <a href="#">
                <b-carousel-slide
                    caption="New Product 1"
                    text="Top product 1 short description, should be about this long"
                    img-src="https://via.placeholder.com/400x400/630400/FFFFFF/?text=TamaTeamSports"
                    img-width="400"
                    img-height="400"
                ></b-carousel-slide>
            </a>
            <b-carousel-slide
                caption="New Product 2"
                text="Top product 2 short description, should be about this long"
                img-src="https://via.placeholder.com/400x400/232732/FFFFFF/?text=TamaTeamSports"
                img-width="400"
                img-height="400"
            ></b-carousel-slide>
            <b-carousel-slide
                caption="New Product 3"
                text="Top product 3 short description, should be about this long"
                img-src="https://via.placeholder.com/400x400/4E4E4E/FFFFFF/?text=TamaTeamSports"
                img-width="400"
                img-height="400"
            ></b-carousel-slide>
        </b-carousel>
    </b-col>
</b-row>
  <!--  <div>
        <section class="page-section services pt-2 pb-3">
            <div class="container pt-3 pb-2">
                <div>
                    <h1 class="text-center pb-1">Top Products</h1>
                    <br>
                    <b-card-group deck class="w-100">

                        <b-card
                            img-src="https://picsum.photos/600/400/?image=25"
                            img-alt="Image"
                            img-top
                            class="shadow"
                            border-variant="danger"
                        >
                            <b-card-title><a href="#">Product 1</a></b-card-title>
                            <b-card-text>
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </b-card-text>
                        </b-card>

                        <b-card
                            img-src="https://picsum.photos/600/400/?image=25"
                            img-alt="Image"
                            img-top
                            class="shadow"
                            border-variant="danger"
                        >
                            <b-card-title><a href="#">Product 2</a></b-card-title>
                            <b-card-text>
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </b-card-text>
                        </b-card>

                        <b-card
                            img-src="https://picsum.photos/600/400/?image=25"
                            img-alt="Image"
                            img-top
                            class="shadow"
                            border-variant="danger"
                        >
                            <b-card-title><a href="#">Product 3</a></b-card-title>
                            <b-card-text>
                                Some quick example text to build on the card title and make up the bulk of the card's
                                content.
                            </b-card-text>
                        </b-card>
                    </b-card-group>
                </div>
            </div>
        </section>
    </div>-->
        </b-container>

    </div>
</template>


<script>
    export default {
    }
</script>

<style scoped>

    .carousel {
        max-width: 400px;
        max-height: 400px;
    }
    img {

    }
    .products {
        font-size: 80px;
        color: white;
    }

    .productimg {
        position: sticky;
        text-align: -moz-center;
    }

    h1 {
        text-shadow:
            -0.75px -0.75px 0 #000,
            0.75px -0.75px 0 #000,
            -0.75px 0.75px 0 #000,
            0.75px 0.75px 0 #000;
    }

</style>
