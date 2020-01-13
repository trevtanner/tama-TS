<template>
    <div class="container pt-4 tama">
        <div class="row justify-content-center">
            <h1>Contact Us</h1>
        </div>
        <br>
        <div class="row justify-content-center pb-5">
            <div class="col-md-8">
                <h5 class="text-center">
                    To submit any order please contact us at the following information. For any general questions please
                    visit
                    our <a :href="faq">FAQ</a> page. For any specific questions don't hesitate to call or
                    e-mail
                    us from the info below.
                </h5>
            </div>
        </div>
        <b-card-group deck class="pt-2 pb-3">
            <div class="col-6">
                    <b-card header="Brian Stewart" class="shadow">
                        <b-card-text>
                            Phone: 1-999-999-9999<br>
                            Email: <a href="mailto: brian@tamateamsports.com">brian@tamateamsports.com</a>
                        </b-card-text>
                </b-card>
            </div>
            <div class="col-6">
                <b-card header="Eric Tanner" class="shadow">
                    <b-card-text>
                    Phone: 1-999-999-9999<br>
                    Email: <a href="mailto: eric@tamateamsports.com">eric@tamateamsports.com</a>
                    </b-card-text>
                </b-card>
            </div>
        </b-card-group>
        </div>
</template>

<script>
    export default {
        props: {
            faq: {type: String, required: true},

        }
    }
</script>

<style scoped>

</style>
