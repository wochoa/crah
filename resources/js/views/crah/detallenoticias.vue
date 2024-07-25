<script>
import Header from './Header.vue';
import PageHeader from "../../components/page-header.vue";
import {
    Swiper,
    SwiperSlide
} from 'vue-awesome-swiper'
import 'swiper/css'
import 'swiper/css/pagination'

import axios from 'axios';

export default {
    name: '',
    components: {
        Swiper,
        SwiperSlide,
        Header,
        PageHeader
    },

    data() {
        return {
            idnot: this.$route.params.id,
            detnot: {},
            swiperOptions: {
                slidesPerView: 1,
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            },

            title: "Noticias",
            items: [{
                    text: "CRAH",
                    href: "/",
                },
                {
                    text: "Noticias",
                    active: true,
                },
            ],

        }
    },
    created() {
        this.cargardatos();
    },
    mounted() {},
    methods: {
        cargardatos() {
            var url = '/noticias/' + this.idnot;
            axios.get(url)
                .then(response => {
                    this.detnot = response.data.detallenot[0];
                });
        },
        decodeHtml(html) {
            console.log(html);
            var txt = document.createElement("textarea");
            txt.innerHTML = html;
            return txt.value;
        },
    }
}
</script>
<template>
<Header />
<div>
    <!-- Content Header (Page header) -->

    <div class="container pt-3">
        <PageHeader :title="title" :items="items" class="pt-5 mt-5" />

        <div class="row">
            <div class="col-8">
                <div class="card p-3">
                    <h4 class="p-3">{{ detnot.titulo }}</h4>

                    <swiper class="swiper-autoplay container" :options="swiperOptions">
                        <swiper-slide v-if="detnot.img1"><img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+detnot.img1" class="card-img-top"></swiper-slide>
                        <swiper-slide v-if="detnot.img2"><img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+detnot.img2" class="card-img-top"></swiper-slide>
                        <swiper-slide v-if="detnot.img3"><img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+detnot.img3" class="card-img-top"></swiper-slide>

                        <div slot="pagination" class="swiper-pagination" />
                        <div slot="button-next" class="swiper-button-next" />
                        <div slot="button-prev" class="swiper-button-prev" />
                    </swiper>

                    <!-- <p >{{decodeHtml(detnot.contenido)}}</p> -->
                    <p v-html="detnot.contenido"></p>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <!-- <h4>Fanpage facebook</h4> -->

                    <iframe :src="'https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100076232595594&tabs=timeline&width=415&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=431428387353926'" width="415" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                </div>
            </div>
        </div>
    </div>

</div>
</template>

<style lang="css" scoped>

</style>
