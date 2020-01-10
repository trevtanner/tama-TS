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
        <app-services></app-services>
        <app-products></app-products>
    </div>
</template>

<script>
    import Services from './homepage/Services.vue';
    import About from './homepage/About';
    import TopProducts from "./homepage/TopProducts";

    export default {
        components: {
            AppServices: Services,
            AppAbout: About,
            AppProducts: TopProducts
    }
    }
</script>

<style scoped>

</style>
