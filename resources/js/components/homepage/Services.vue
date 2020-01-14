<template>
    <div>
        <section class="page-section services pt-3 pb-4">
            <div class="container">
                <div>
                    <h1 class="text-center" style="color: black;">Top Services</h1>
                    <br>
                    <b-card-group deck class="w-100">

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/heatpress300.jpg')"
                            img-alt="Heat Press By Scrud123 - Own work, CC BY-SA 3.0, https://commons.wikimedia.org/w/index.php?curid=28817022"
                            img-bottom
                            no-body
                            border-variant="dark"
                            shadow

                        >
                            <b-card-header class="text-center"><a :href="imprint">Heat Pressing</a></b-card-header>
                        </b-card>

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/laser300.jpg')"
                            img-alt="Image"
                            img-bottom
                            no-body
                            border-variant="dark"
                            shadow

                        >
                            <b-card-header class="text-center"><a :href="imprint">Laser Engraving</a></b-card-header>
                        </b-card>

                        <b-card
                            :img-src="require('/opt/lampp/htdocs/tama/tama-TS/public/img/spools300.jpg')"
                            img-alt="Image"
                            img-bottom
                            no-body
                            border-variant="dark"
                            shadow

                        >
                            <b-card-header class="text-center"><a :href="imprint">Embroidery</a></b-card-header>
                        </b-card>
                    </b-card-group>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        props: {
            imprint: {type: String, required: true},
        }
    }
</script>

<style scoped>
.services {
    background-color: white;
}

</style>
