<template>
        <b-navbar toggleable="md" type="" id="navbar" class="vueNav">
            <b-navbar-brand :href="home">TTS</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"/>

            <b-collapse id="nav-collapse" is-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav>
                    <b-nav-item-dropdown text="Products" left>
                        <b-dropdown-item :href="tag1" class="dropdowns">Drinkware</b-dropdown-item>
                        <b-dropdown-item :href="tag2" class="dropdowns">Apparel</b-dropdown-item>
                        <b-dropdown-item :href="tag3" class="dropdowns">Knives/Tools</b-dropdown-item>
                        <b-dropdown-item :href="tag4" class="dropdowns">Electronics</b-dropdown-item>
                        <b-dropdown-item :href="tag5" class="dropdowns">Writing/Utensils</b-dropdown-item>
                        <b-dropdown-item :href="tag6" class="dropdowns">Bags</b-dropdown-item>
                        <b-dropdown-item :href="tag7" class="dropdowns">Miscellaneous</b-dropdown-item>
                    </b-nav-item-dropdown>
                    <b-nav-item :href="imprint" class="pr-2">Decoration/Art Generation</b-nav-item>
                </b-navbar-nav>
                <b-navbar-nav class="ml-auto">
                    <b-nav-form>
                        <b-form-input size="sm" class="mr-sm-2 dropdowns" placeholder="Search Products"></b-form-input>
                        <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
                    </b-nav-form>

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
            tag7: {type: String, required: true},
            suppliersIndex: {type: String, required: true},
            contact: {type: String, required: true},
            search: {type: String, required: true},
            imprint: {type: String, required: true},
        }
    }

</script>

<style scoped>
.vueNav {
    background-color: transparent;
    color: red;
    /*position: relative;*/
    font-family: 'Black Ops One', cursive;
    text-shadow:
        -0.75px -0.75px 0 #000,
        0.75px -0.75px 0 #000,
        -0.75px 0.75px 0 #000,
        0.75px 0.75px 0 #000;
}
@media(min-width:574px){
    #navbar {
        padding: 15px;
    }
}
button{
    border-color: red;
}
    .dropdowns {
        text-shadow: none;
    }
</style>

