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
        <app-products></app-products>
        <app-services></app-services>
        <app-about></app-about>
    </div>
</template>

<script>
    import Services from './homepage/Services.vue';
    import TopProducts from "./homepage/TopProducts";
    import HomeSection from "./homepage/HomeSection";
    import HomeAbout from "./homepage/HomeAbout";


    export default {
        components: {
            AppServices: Services,
            AppProducts: TopProducts,
            AppSection: HomeSection,
            AppAbout: HomeAbout,
    }
    }
</script>

<style scoped>

</style>
