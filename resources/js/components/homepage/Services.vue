<template>
    <div>
        <section class="page-section services pt-3 pb-4">
            <div class="container">
                <div>
                    <h1 class="text-center" style="color: white;">Top Services</h1>
                    <br>
                    <b-card-group deck class="w-100">

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/heatpress300.jpg')"
                            img-alt="Heat Press By Scrud123 - Own work, CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=28817022"
                            img-bottom
                            no-body

                        >
                            <b-card-header class="text-center"><a href="#">Heat Pressing</a></b-card-header>
                        </b-card>

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/laser300.jpg')"
                            img-alt="Image"
                            img-bottom
                            no-body

                        >
                            <b-card-header class="text-center"><a href="#">Laser Engraving</a></b-card-header>
                        </b-card>

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/spools300.jpg')"
                            img-alt="Image"
                            img-bottom
                            no-body

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
.services {
    background-color: black;
}

</style>
