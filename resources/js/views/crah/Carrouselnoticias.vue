<template>
    <swiper
    class="swiper"
    :modules="modules"
    :space-between="30"
    :slides-per-view="3"
    :pagination="{ clickable: true }"
    :autoplay="{
      delay: 2500,
      disableOnInteraction: false
    }"
    >

        <swiper-slide v-for="(prim,index) in data_noticias" :key="index">

            <div class="card shadow-sm " style="height: 390px;">
                <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+prim.img1" class="card-img-top" alt="...">
                <div class="card-body pb-1">
                    <router-link :to="'/noticias/'+prim.idnoticias+'/detalles'" class="text-dark">
                        <h6>{{ decodeHtml(prim.titulo)}}</h6>
                    </router-link>

                    <!-- <p class=" card-text lh-1 textxs" style="font-size: 12px">{{prim.cortado}}</p> -->

                </div>
                <div class="card-footer d-flex justify-content-between align-items-center pb-1 pt-1">
                    <div class="btn-group">
                        <!-- <a href="#" class="btn btn-primary btn-sm">Leer más</a> -->
                        <router-link :to="'/noticias/'+prim.idnoticias+'/detalles'" class="btn btn-dark btn-sm">Leer más</router-link>
                        <!-- <a href="#" class="">Another link</a> -->
                    </div>
                    <small class="text-muted">{{ prim.fecha}}</small>
                </div>
            </div>

        </swiper-slide>

        <div class="swiper-pagination pt-10" slot="pagination"></div>

    </swiper>

</template>

<script>

import { Pagination,Navigation, Autoplay } from 'Swiper';

import {Swiper,SwiperSlide} from 'vue-awesome-swiper';

// import swiper module styles
  import 'swiper/css'
  import 'swiper/css/pagination'


import axios from 'axios';

export default {
    props: ['ruta'],
    name: 'carrousel',
    data() {
        return {
            data_noticias: {},
            // modules: [Pagination]
            modules: [Pagination, Navigation, Autoplay]

        }
    },
    components: {
        Swiper,
        SwiperSlide
    },
    //   directives: {
    //     swiper: directive
    //   },

    computed: {
        swiper() {
          return this.$refs.mySwiper.$swiper
        }
    },
    mounted() {
        // console.log('Current Swiper instance object', this.swiper);
        // this.swiper.slideTo(0, 1000, false);
        this.noticiasini();
    },
    methods: {
        noticiasini() {
            var url = '/noticiasini';
            axios.get(url)
                .then(response => {
                    this.data_noticias = response.data.listanoticias;

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
