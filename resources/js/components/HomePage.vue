<template>
    <div>
<!--        <header class="masthead" style="background-image: url('/img/usflag.jpg')">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-heading">Tama Team Sports</div>
                    <div class="intro-lead-in">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etenim semper
                        illud extra est, quod arte comprehenditur. In his igitur partibus duabus nihil erat, quod Zeno
                        commutare gestiret.</div>
                </div>
            </div>
        </header>-->
        <app-section></app-section>
        <hr>
        <app-about></app-about>
        <hr>
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
    </div>
</template>

<script>
    import Services from './homepage/Services.vue';
    import TopProducts from "./homepage/TopProducts";
    import HomeSection from "./homepage/HomeSection";
    import HomeAbout from "./homepage/HomeAbout";


    export default {
        components: {
            data: function() {
                return {
                }
            },
            AppServices: Services,
            AppProducts: TopProducts,
            AppSection: HomeSection,
            AppAbout: HomeAbout,
    },
        props: {
            imprint: {type: String, required: true},

        }
    }
</script>

<style scoped>

</style>
