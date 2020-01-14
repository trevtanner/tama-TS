<template>
        <footer>
            <cookie-law/>
        </footer>
</template>

<script>
    import CookieLaw from 'vue-bootstrap-cookie-law'
    export default {
        components: {CookieLaw }
    }
</script>

<style scoped>
    .cookie {
color: black;
    }

    .cookie-content {
color: white;
    }

    .cookie-button {
        color: red;
    }
</style>
