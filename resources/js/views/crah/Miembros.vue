<script>
import { Pagination,Navigation, Autoplay } from 'Swiper';

import {Swiper,SwiperSlide} from 'vue-awesome-swiper';

// import swiper module styles
  import 'swiper/css'
  import 'swiper/css/pagination'

import Jaimegeronimo from '../../../images/crah/miembros/presidente.jpg';

import Rodolfovega from '../../../images/crah/miembros/rodolfovega.jpg';
import Fredyaguirre from '../../../images/crah/miembros/fredyaguirre.jpg';
import Procuradora from '../../../images/crah/miembros/procuradora.jpg';
import Luismendoza from '../../../images/crah/miembros/luismendoza.jpg';
import Emma from '../../../images/crah/miembros/emma.jpeg';
import Miguel from '../../../images/crah/miembros/miguel.jpg';
import Pulgar from '../../../images/crah/miembros/pulgar.jpeg';
import Marcodurand from '../../../images/crah/miembros/marcodurand.jpg';
import Olgaugarte from '../../../images/crah/miembros/olgaugarte.jpg';
import Carlosconsejero from '../../../images/crah/miembros/carlosconsejero.jpg';
import Seberotiburcio from '../../../images/crah/miembros/seberotiburcio.jpg';
import Ceciliacook from '../../../images/crah/miembros/ceciliacook.jpg';

export default {

    data() {
        return {
            Jaimegeronimo,
            Rodolfovega,
            Fredyaguirre,
            Procuradora,
            Luismendoza,
            Emma,
            Miguel,
            Pulgar,
            Marcodurand, 
            Olgaugarte,           
            Carlosconsejero,
            Seberotiburcio,
            Ceciliacook,
            modules: [Pagination, Navigation, Autoplay],

            datosmiembros: [
                {
                    foto: Jaimegeronimo,
                    nombre: "Dr. Jaime Gerónimo De la Cruz",
                    cargo: "Presidente de la Corte Superior de Justicia de Huánuco / Presidente de la Comisión Regional Anticorrupción Huánuco",
                },
                {
                    foto: Procuradora,
                    nombre: "Dra. KRUPSKAIA JESMIDLU BERAUN AGUIRRE",
                    cargo: "Procuradora Público Anticorrupción Descentralizado de Huánuco",
                },
                {
                    foto: Rodolfovega,
                    nombre: "Dr. Rodolfo Vega Billán",
                    cargo: "Presidente de la Junta de Fiscales Superiores del Distrito Fiscal de Huánuco",
                },
                {
                    foto: Luismendoza,
                    nombre: "Cmdt. GERARDO LUIS MENDOZA CAMARENA",
                    cargo: "Departamento Desconcentrado de Investigación contra la Corrupción – DIRCOCOR",
                },
                {
                    foto: Fredyaguirre,
                    nombre: "Mag. FREDDY SILES AGUIRRE MELGAREJO",
                    cargo: "Decano del Colegio de Periodistas Consejo Regional Huánuco.",
                },
                {
                    foto: Marcodurand,
                    nombre: "Marco O. Durand Rocca",
                    cargo: "Jefe de la Oficina de la Defensoria del Pueblo de Huánuco",
                },
                {
                    foto: Emma,
                    nombre: "Emma M. Mariano Tucto",
                    cargo: "Coordinadora Regional de las Juntas Vecinales y Seguridad Ciudadana Región Huánuco",
                },
                {
                    foto: Miguel,
                    nombre: "Miguel A. Berrospi Jara",
                    cargo: "Presidente de la Cámara de Comercio e Industrias de Huánuco",
                },
                {
                    foto: Olgaugarte,
                    nombre: "Sra. OLGA UGARTE CASIMIRO",
                    cargo: "Presidenta de las Iglesias Evangélicas de Huánuco.",
                },
                {
                    foto: Seberotiburcio,
                    nombre: "Ing. SEVERO TIBURCIO SOTO",
                    cargo: "Coordinador Regional de la Mesa de Concertación para la Lucha contra la Pobreza.",
                },
                {
                    foto: Ceciliacook,
                    nombre: "Dra. CARMEN CECILIA COOK GONZALES",
                    cargo: "Directora Distrital de Defensa Pública y Acceso a la Justicia de Huánuco ",
                },
                {
                    foto: Pulgar,
                    nombre: "Antonio L. Pulgar Lucas",
                    cargo: "Gobernador Regional",
                },
                
                {
                    foto: Carlosconsejero,
                    nombre: "Carlos A.  Esteban Atencia",
                    cargo: "Consejero Delegado",
                },
                
                

            ],

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
            // return this.$refs.mySwiper.$swiper
        }
    },
    mounted() {
        // console.log('Current Swiper instance object', this.swiper);
        // this.swiper.slideTo(0, 1000, false);
        // this.noticiasini();
    },
}
</script>
<template>
<div class="row">
    <div class="col-lg-12">
        <div class="text-center mb-5">
            <div class="small-title text-white">CRAH</div>
            <h4 class="text-white">COMISIÓN REGIONAL ANTICORRUPCIÓN DE HUÁNUCO</h4>
        </div>
    </div>
</div>
<div class="row">

    <swiper class="swiper" :modules="modules" :space-between="30" :slides-per-view="4" :pagination="{ clickable: true }" :autoplay="{
      delay: 2500,
      disableOnInteraction: false
    }">

        <swiper-slide v-for="(prim,index) in datosmiembros" :key="index">

            <!-- <div class="col-xl-3 col-sm-6"> -->
                <div class="card blog-box mb-4 mb-xl-0">
                    <div class="position-relative">
                        <img :src="prim.foto" alt="" class="rounded img-fluid mx-auto d-block" />
                    </div>
                    <div class="mt-4 text-muted p-2">
                        <p class="mb-3 text-center">
                            {{ prim.nombre }} <br>
                            <b>{{ prim.cargo }}</b>
                        </p>
                    </div>
                </div>
            <!-- </div> -->

        </swiper-slide>

        <div class="swiper-pagination pt-10" slot="pagination"></div>

    </swiper>

</div>

<div class="row mt-3">
    <div class="col-12 ">
        <div class="position-absolute top-0 end-0">
            <!-- <button class="btn btn-danger btn-sm">Ver más miembros</button> -->
            <router-link to="/miembroscrah" class="btn btn-danger btn-sm">
                Ver más miembros
            </router-link>
        </div>

    </div>
</div>
</template>
