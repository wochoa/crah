<script>
// import Layout from "../../layouts/main.vue";
import Header from './Header.vue';
import PageHeader from "../../components/page-header.vue";

import img1 from '../../../images/small/img-1.jpg';
import img2 from '../../../images/small/img-2.jpg';
import img4 from '../../../images/small/img-4.jpg';
import img6 from '../../../images/small/img-6.jpg';
import img7 from '../../../images/small/img-7.jpg';
import axios from 'axios';
export default {
    page: {
        title: "Blog-grid",
    },
    components: {
        // Layout,
        Header,
        PageHeader,
    },
    methods: {},
    data() {
        return {
            img1,
            img2,
            img4,
            img6,
            img7,
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
            data_noticias: {},
        };
    },
    mounted() {
        // console.log('Current Swiper instance object', this.swiper);
        // this.swiper.slideTo(0, 1000, false);
        this.noticiasini();
    },
    methods: {
        noticiasini() {
            var url = '/allnoticias';
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
        recorta_cad(texto) {
            var substr = texto.substr(7);
            return substr;
        }
    }

};
</script>

<template>
<Header />
<!-- <Layout> -->
<div class="container">
    <PageHeader :title="title" :items="items" class="pt-5 mt-5" />

    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card">
                <b-tabs content-class="p-4" class="pt-2" nav-wrapper-class="nav-item" nav-class="justify-content-center nav-tabs-custom">
                    <b-tab title="Listado total" active>
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div>
                                                    <h5 class="mb-0">Listado de noticias</h5>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end row -->

                                        <hr class="mb-4" />

                                        <div class="row">
                                            <div class="col-sm-4" v-for="(prim,index) in data_noticias.data" :key="index">
                                                <div class="card p-1 border shadow-none">
                                                    <!-- <div class="p-3">
                                                        <h5>
                                                            <router-link to="/blog/detail" class="text-dark">Beautiful Day with Friends</router-link>
                                                        </h5>
                                                        <p class="text-muted mb-0">10 Apr, 2020</p>
                                                    </div> -->

                                                    <div class="position-relative">
                                                        <!-- <img :src="img2" alt="" class="img-thumbnail" /> -->
                                                        <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+recorta_cad(prim.img1)" class="img-thumbnail">
                                                    </div>

                                                    <div class="p-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                    Noticias
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                    {{ prim.fechapubli }}
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            {{ decodeHtml(prim.titulo) }}
                                                        </p>

                                                        <div>
                                                            <!-- <a href="#" class="text-primary">Leer más <i class="mdi mdi-arrow-right"></i></a> -->
                                                            <router-link :to="'/noticias/'+prim.idnoticias+'/detalles'">
                                                                Leer más <i class="mdi mdi-arrow-right"></i>
                                                            </router-link>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr class="my-4" />

                                        <div class="text-center">
                                            <ul class="pagination justify-content-center pagination-rounded">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">...</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">10</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </b-tab>

                </b-tabs>
                <!-- Nav tabs -->
            </div>
        </div>

    </div>
    <!-- end row -->
</div>

<!-- </Layout> -->
</template>
