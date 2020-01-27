<template>
    <div>
        <b-carousel
            id="carousel-1"
            fade
            :interval="5000"
            no-hover-pause
            img-width="1024"
            img-height="480"
        >
            <b-carousel-slide :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/usflag480.jpg')" style="max-height: 480px" class="slidetext">
                <div class="carousel-caption">
                    <p>Tama Team Sports</p>
                </div>
            </b-carousel-slide>
            <b-carousel-slide :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/mtns480.jpg')" style="max-height: 480px" class="slidetext">
                <div class="carousel-caption">
                    <p>Started In Colorado</p>
                </div>
            </b-carousel-slide>
            <b-carousel-slide :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/us-supreme-court.jpg')" style="max-height: 480px" class="slidetext">
                <div class="carousel-caption">
                    <p>Serving All Branches</p>
                </div>
            </b-carousel-slide>
        </b-carousel>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                slide: 0,
                sliding: null
            }
        },
        methods: {
            onSlideStart(slide) {
                this.sliding = true
            },
            onSlideEnd(slide) {
                this.sliding = false
            }
        }
    }
</script>

<style scoped>

    .slidetext {
        -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
        filter: grayscale(0%);
    }

    .carousel-caption {


        font-family: 'Black Ops One', cursive;


    }

    .carousel-caption p {
        position:inherit;
        margin: 0;
        color: white;
        left: auto;
        top: auto;
        right: auto;
        bottom: 40px;
        font-size: 6vw;

        /*text outline solid black 1px*/
        text-shadow:
            -1px -1px 0 #000,
            1px -1px 0 #000,
            -1px 1px 0 #000,
            1px 1px 0 #000;
    }



    /*Everything under 400px*/
    @media (max-width: 400px) {
        .carousel-caption p {
            position: inherit;
            margin: 0;
            color: white;
            left: auto;
            top: auto;
            right: auto;
            bottom: 5px;
        }

    }
    /*Everything under 576 to 400px*/
    @media (min-width: 400px) {
        .carousel-caption p {
            position: inherit;
            margin: 0;
            color: white;
            left: auto;
            top: auto;
            right: auto;
            bottom: 50px;
        }

    }


    /*Small devices (landscape phones, 576px and up)*/
    @media (min-width: 576px) {
        .carousel-caption p {
            position: inherit;
            margin: 0;
            color: white;
            left: auto;
            top: auto;
            right: auto;
            bottom: 50px;
        }

    }

    /*Medium devices (tablets, 768px and up)*/
    @media (min-width: 768px) {
        .carousel-caption p {
            position: inherit;
            margin: 0;
            color: white;
            left: auto;
            top: auto;
            right: auto;
            bottom: 50px;
        }
    }

    /*Large devices (desktops, 992px and up)*/
    @media (min-width: 992px) {
        .carousel-caption p {
            position: inherit;
            margin: 0;
            color: white;
            left: auto;
            top: auto;
            right: auto;
            bottom: 50px;
        }

    }

    /*Extra large devices (large desktops, 1200px and up)*/
    @media (min-width: 1200px) {
        .carousel-caption p {
            position: inherit;
            margin: 0;
            color: white;
            left: auto;
            top: auto;
            right: auto;
            bottom: 50px;
        }
    }

</style>
