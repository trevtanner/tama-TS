<template>
    <div>
        <section class="page-section services pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">for all your promotional, retention and custom needs</h2>
                        <br>
                        <h3 class="section-subheading">
                            standing behind what we do, and who we do it for
                        </h3>
                    </div>
                </div>
                <div>
                    <h3 class="text-center pb-1">Top Services</h3>
                    <br>
                    <b-card-group deck class="w-100">

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/heatpress300.jpg')"
                            img-alt="Heat Press By Scrud123 - Own work, CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=28817022"
                            img-bottom
                            no-body
                            class="shadow"
                            border-variant="danger"
                        >
                            <b-card-header class="text-center"><a href="#">Heat Pressing</a></b-card-header>
                        </b-card>

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/laser300.jpg')"
                            img-alt="Image"
                            img-bottom
                            no-body
                            class="shadow"
                            border-variant="danger"
                        >
                            <b-card-header class="text-center"><a href="#">Laser Engraving</a></b-card-header>
                        </b-card>

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/spools300.jpg')"
                            img-alt="Image"
                            img-bottom
                            no-body
                            class="shadow"
                            border-variant="danger"
                        >
                            <b-card-header class="text-center"><a href="#">Embroidery</a></b-card-header>
                        </b-card>
                    </b-card-group>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
    }
</script>

<style scoped>

</style>
