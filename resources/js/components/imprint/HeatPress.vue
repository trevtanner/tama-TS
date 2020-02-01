<template>
    <b-container class="py-2">
       <b-row>
           <b-col cols="2"/>
           <b-col cols="8" class="text-center pt-2 highlight">
           <h3>
               Heat Press
           </h3>
           </b-col>
           <b-col cols="2"/>
       </b-row>
       <b-row>
           <b-col cols="2"/>
           <b-col cols="8" class="text-center highlight pt-2">
               <div class="iframe-container">
                   <iframe
                       src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                       frameborder="0"
                       allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                       allowfullscreen/>
               </div>
              <!-- <p>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quamquam tu hanc copiosiorem etiam soles
                   dicere. Egone quaeris, inquit, quid sentiam? Respondent extrema primis, media utrisque, omnia
                   omnibus.
                   Quae diligentissime contra Aristonem dicuntur a Chryippo. Duo Reges: constructio interrete.
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quamquam tu hanc copiosiorem etiam soles
                   dicere. Egone quaeris, inquit, quid sentiam? Respondent extrema primis, media utrisque, omnia
                   omnibus.
                   Quae diligentissime contra Aristonem dicuntur a Chryippo. Duo Reges: constructio interrete.

               </p>-->
           </b-col>
           <b-col cols="2"/>
       </b-row>
    </b-container>
</template>

<script>
    export default {
    }
</script>

<style scoped>
    .highlight {
        background-size: cover;
        background-color: #1b1e21;
        position: sticky;
        color: white;
    }
    .iframe-container {
        overflow: hidden;
    /*Calculated from the aspect ration of the content (in case of 16:9 it is 9/16= 0.5625)*/
    padding-top: 56.25%;
        position: relative;
    }

    .iframe-container iframe {
        border: 0;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        padding-bottom: 10px;
    }
    .iframe-container-4x3 {
        padding-top: 75%;
    }
</style>
