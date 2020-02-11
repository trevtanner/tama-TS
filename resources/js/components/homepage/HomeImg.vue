<template>
    <div class="w-100">
        <b-img :src="src" fluid fluid-grow alt="Responsive image"/>
</div>
</template>

<script>
    export default {
        name: "HomeImg",

        data: function () {
            return {
                src: require('/opt/lampp/htdocs/tama/tama-TS/public/img/usflagdarkened.jpg'),
                loaded: false,
            }
        },
    }
</script>

<style scoped>
img {
    position: fixed;
    height: 100%;
    background-size: cover;
}
</style>
