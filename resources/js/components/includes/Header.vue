<template>
        <b-navbar toggleable="sm" type="" id="navbar" class="vueNav" sticky>
            <b-navbar-brand :href="home">TTS</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"/>

            <b-collapse id="nav-collapse" is-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">

                    <b-nav-item :href="home" right>About</b-nav-item>
                    <b-nav-item-dropdown text="Products" right>
                        <b-dropdown-item :href="productIndex">Product Overview</b-dropdown-item>
                        <b-dropdown-item :href="tag1">Apparel</b-dropdown-item>
                        <b-dropdown-item :href="tag2">Drinkware</b-dropdown-item>
                        <b-dropdown-item :href="tag3">Bags</b-dropdown-item>
                        <b-dropdown-item :href="tag4">Tactical</b-dropdown-item>
                        <b-dropdown-item :href="tag5">Coins</b-dropdown-item>
                        <b-dropdown-item :href="tag6">Miscellaneous</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item :href="suppliersIndex" right>Manufacturers</b-nav-item>
                    <b-nav-item :href="contact" right>Contact Us</b-nav-item>
                    <b-nav-item :href="search" right>Search</b-nav-item>

                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
</template>


<script>
    export default {
        name: "Header",

        props: {
            home: {type: String, required: true},
            productIndex: {type: String, required: true},
            tag1: {type: String, required: true},
            tag2: {type: String, required: true},
            tag3: {type: String, required: true},
            tag4: {type: String, required: true},
            tag5: {type: String, required: true},
            tag6: {type: String, required: true},
            suppliersIndex: {type: String, required: true},
            contact: {type: String, required: true},
            search: {type: String, required: true},
        }
    }

</script>

<style scoped>
.vueNav {
    background-color: black;
    color: red;


    font-family: 'Black Ops One', cursive;
}
@media(min-width:574px){
    #navbar {
        padding: 15px;
    }
}
button{
    border-color: red;
}
</style>

