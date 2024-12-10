<script>
// import Layout from "../../layouts/main.vue";
import PageHeader from "../../components/page-header.vue";
import Datepicker from "vue3-datepicker";
import Header from './Header.vue';

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


/**
 * Starter component
 */
export default {
    page: {
        title: "Documentos normativos",
    },
    components: {
        // Layout,
        PageHeader,
        Header,
        Datepicker
    },
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

            title: "Documentos normativos",
            listDeleteModal: false,
            items: [{
                    text: "CRAH",
                    href: "/"
                },
                {
                    text: "Documentos normativos",
                    active: true
                }
            ],
            datepickervalue: new Date(),
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
        };
    }
};
</script>
<template>
<!-- <Layout> -->

<Header />

<div class="container">
    <PageHeader :title="title" :items="items" class="pt-5 mt-5" />
</div>
<section class="section pt-4" style="background-color: #b5a7a7 !important;">
        <div class="container">
            <div class="row">

                <div class="col-xl-3 col-sm-6" v-for="(prim,index) in datosmiembros" :key="index">
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
                </div>
            </div>
        </div>
    </section>
</template>
