<template>
<div class="col-3" v-for="enlace in data_enlaces">
    <div class="card">
        <a :href="enlace.link_refe" target="_blank">
            <img :src="'https://gestionportales.regionhuanuco.gob.pe/storage/'+enlace.img_refe" alt="" height="70px">
        </a>
    </div>
</div>

</template>

<script>
import axios from 'axios';

export default {
    props: ['ruta'],
    name: 'enlaces',
    data() {
        return {
            data_enlaces: {},

        }
    },

    //   directives: {
    //     swiper: directive
    //   },

    computed: {

    },
    mounted() {
        // console.log('Current Swiper instance object', this.swiper);
        // this.swiper.slideTo(0, 1000, false);
        this.noticiasini();
    },
    methods: {
        noticiasini() {
            var url = '/enlace_refe';
            axios.get(url)
                .then(response => {
                    this.data_enlaces = response.data.referenciales;

                });
        },
        decodeHtml(html) {
            // console.log(html);
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        },
    }
}
</script>

<style>
.swiper-pagination {
    bottom: 0px !important;
}
</style>
