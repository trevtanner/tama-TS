<template>
    <div>
        <b-carousel
            id="carousel-1"
            fade
            :interval="6000"
            no-hover-pause='true'
            img-width="1024"
            img-height="300"
        >
            <b-carousel-slide :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/tags2bg.jpg')" style="max-height: 480px" class="slidetext">
                <div class="carousel-caption">
                    <p>{{ tag }}</p>
                </div>
            </b-carousel-slide>
        </b-carousel>

    </div>
</template>

<script>
    export default {
        props: {
            tag: {type: String, required: true},
        }
    }
</script>

<style scoped>

    .slidetext {
        -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
        filter: grayscale(0%);
    }
    .carousel-caption p {
        position: fixed;
        margin: 0;
        color: white;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 6vw;

        /*text outline solid black 1px*/
        text-shadow:
            -1px -1px 0 #000,
            1px -1px 0 #000,
            -1px 1px 0 #000,
            1px 1px 0 #000;
    }
</style>
