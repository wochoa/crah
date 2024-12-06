<script>
import VueCountdown from "@chenfengyuan/vue-countdown";

import TeamSlider from "../../components/widgets/team-slider.vue";
import ClientSlider from "../../components/widgets/client-slider.vue";
import TimelineSlider from "../../components/widgets/timeline-slider.vue";

import img1 from '../../../images/crypto/features-img/img-1.png';
import img2 from '../../../images/crypto/features-img/img-2.png';
import cryBlog1 from '../../../images/crypto/blog/img-1.jpg';
import cryBlog2 from '../../../images/crypto/blog/img-2.jpg';
import cryBlog3 from '../../../images/crypto/blog/img-3.jpg';
import logoLight from '../../../images/logo-light.png';
import logoDark from '../../../images/logo-dark.png';
// logo miembros instituciones
import poderj from '../../../images/crah/pj.png';
import prefectura from '../../../images/crah/prefectura-hco.jpg';
import Ministeriop from '../../../images/crah/Ministerio_publico.png';
import gorehco from '../../../images/crah/gorehco.jpg';
import policia from '../../../images/crah/policia.png';
import Camara from '../../../images/crah/CCIHco-Logotipo-Verde.png';
import Contraloria from '../../../images/crah/contraloria.jpg';
import Minjus from '../../../images/crah/minjus.png';
import MinjusAnt from '../../../images/crah/minjusAnt.png';
import Defensoria from '../../../images/crah/Defensoría_del_Pueblo.png';

//miembros integranrtes
import MiembrosInte from './Miembros.vue';
import Documentos from './Documentos.vue';
import Slidernoticias from './Carrouselnoticias.vue'
import Enlacesrefes from './Enlacesreferenciales.vue'
import axios from "axios";

export default {
    components: {
        VueCountdown,
        TeamSlider,
        ClientSlider,
        TimelineSlider,
        MiembrosInte,
        Documentos,
        Slidernoticias,
        Enlacesrefes
    },
    data() {
        return {
            img1,
            img2,
            cryBlog1,
            cryBlog2,
            cryBlog3,
            logoLight,
            logoDark,
            poderj,
            prefectura,
            Ministeriop,
            gorehco,
            policia,
            Camara,
            Contraloria,
            Minjus,
            MinjusAnt,
            Defensoria,
            clientsPerPage: [
                [576, 2],
                [768, 3],
                [992, 4]
            ],
            datoslider: {}
        };
    },
    created() {
        window.addEventListener("scroll", function () {
            var scroll = window.scrollY;

            if (scroll >= 50) {
                document.querySelector(".sticky") ? document.querySelector(".sticky").classList.add("nav-sticky") : '';
            } else {
                document.querySelector(".sticky") ? document.querySelector(".sticky").classList.remove("nav-sticky") : '';
            }
        });
        document.querySelectorAll(".navbar-nav a").forEach(item => {
            item.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopImmediatePropagation();
                var $anchor = event.target;
                document.querySelectorAll("html, body").scrollTo({
                    top: document.querySelector($anchor.href).offsetTop,
                    behaviour: "smooth"
                });
            });
        });

        this.slider();
    },
    computed: {
        dateDiff() {
            var now = new Date();
            var date2 = new Date(2023, 12, 31, 0, 0, 0);
            return date2.getTime() - now.getTime();
        }

    },
    methods: {
        /**
         * Toggle menu
         */
        toggleMenu() {
            document.getElementById("topnav-menu-content").classList.toggle("show");
        },
        escribirEnPantalla(texto) {
            let arr = texto.split("");
            var i = 0;
            let intervalo = setInterval(function () {
                if (i == arr.length - 1) {
                    document.getElementById("titulo").innerHTML += arr[i];
                    clearInterval(intervalo);
                } else {
                    if (arr[i] == " ") {
                        document.getElementById("titulo").innerHTML += arr[i];
                        document.getElementById("titulo").innerHTML += arr[i + 1];
                        i += 2;
                    } else {
                        document.getElementById("titulo").innerHTML += arr[i];
                        i++;
                    }
                }
            }, 100);
        },
        slider() {
            var url = '/slider'
            axios.get(url).then(res => {
                this.datoslider = res.data;
            })
        },
        // recorta_cad(texto) {
        //     var substr = texto.substr(7);
        //     return substr;
        // },
    }
};
</script>

<style>
.hero-section {
    padding-top: 120px;
    padding-bottom: 80px;
}
</style>

<template>
<div>
    <nav class="navbar navbar-expand-lg navigation fixed-top sticky" id="navbar">
        <div class="container">
            <a class="navbar-logo" href="/">
                <img :src="logoDark" alt="" height="60" class="logo logo-dark" />
                <img :src="logoLight" alt="" height="60" class="logo logo-light" />
            </a>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" @click="toggleMenu()" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav ms-auto" id="topnav-menu">
                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Quienes somos</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#documentos">Documentos</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#noticias">Noticas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://facilita.gob.pe/t/16438" target="_blank">Sugerencias</a>
                    </li>
                </ul>

                <!-- <div class="ms-lg-2">
                    <router-link to="/login" class="btn btn-dark w-xs">Ingresar</router-link>
                </div> -->
            </div>
        </div>
    </nav>

    <!-- hero section start -->
    <section class="section hero-section bg-ico-hero" id="inicio">
        <div class="bg-overlay bg-danger" style="background-color: #350303 !important;"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="text-white-50">
                        <h1 class="text-white fw-semibold mb-3 hero-title">
                            Comisión Regional Anticorrupción de Huánuco
                        </h1>
                        <p class="h4">Implementaremos lineamientos y estándares de cumplimiento en materia de integridad y lucha contra la corrupción en el departamento de Huánuco...</p>

                        <div class="button-items mt-4">
                            <a href="#" class="btn btn-dark me-2">Leer más</a>
                            <!-- <a href="#" class="btn btn-light">How it work</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 ms-lg-auto">
                    <div class="card overflow-hidden mb-0 mt-5 mt-lg-0">
                        <!-- succes -->
                        <img :src="'http://gestionportales.regionhuanuco.gob.pe/storage/'+datoslider" alt="">
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- hero section end -->

    <!-- currency price section start -->
    <section class="section bg-white p-0">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ACTAS 2024
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table table-hover table-responsive-sm table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Descripción</th>
                                    <th>Enlace</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1.</td>
                                    <td>ACTA 001-2024-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/144fjT9eAq_g0_9N7MFijRn-sqnt8mX_H/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>ACTA 002-2024-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1AnkoSSvxi1BbsqtQKzUH3QVmUtLmfQkN/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>ACTA 003-2024-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1Qh5at0S4IImuucmJ3OWGMmgo0C3jyHCb/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ACTAS 2023
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table table-hover table-responsive-sm table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Descripción</th>
                                    <th>Enlace</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1.</td>
                                    <td>ACTA 001-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1iBZe-7PHwvnAzZM2MFgUPqMUKEGzDppF/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>ACTA 002-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1gcSh1DpAdCa8dd2OStLYHrZ-evvXwyPj/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>ACTA 003-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1NeAzLFM0nLr3C-VvOnrclTAU0wV5TByW/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>ACTA 004-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1w8eizZvyDksD1LmA6uXCVCoV-49vVwMX/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>ACTA 005-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1GxVBUFPuve5SyxKY_iX77OenKUl-1Mrv/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>ACTA 006-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/12EehISAQxhiMJFO-CgJD7H2aNuzTFNRg/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>ACTA 007-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1IDOhadBefrYiH2x9MG9PnYDwBEfzWQcy/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>ACTA 008-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1mcbFJUvTqzXgCMWl0ULGjCLIwcSCbJjN/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td>ACTA 009-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1CDeFmMOdSsTDn8n3JBhcss2nB32mItVX/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td>ACTA 010-2023-CRAH</td>
                                    <td><a href="https://drive.google.com/file/d/1WqgXiHzD6wCd2XCNtHKImeAnF65_8y57/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ACTAS 2022
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table table-hover table-responsive-sm table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Descripción</th>
                                    <th>Enlace</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>ACTA FEBRERO</td>
                                    <td><a href="https://drive.google.com/file/d/1jbtDdzldTc-mPGmqtr-1EF9_DMOpDg75/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>ACTA MARZO</td>
                                    <td><a href="https://drive.google.com/file/d/1HpMxRUhvfqv0sNlrne3fkx7lBgE-6XbW/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>ACTA MAYO</td>
                                    <td><a href="https://drive.google.com/file/d/1oKwV7wKVo7fW7-VOCZIXhmlb9MGeFGox/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>ACTA 8 JUNIO</td>
                                    <td><a href="https://drive.google.com/file/d/1PbVcnwXvPq10UJaR7zFE4JeOmqUGmPC1/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>ACTA 20 JUNIO</td>
                                    <td><a href="https://drive.google.com/file/d/1BqY142oVksBSRENGuLiF0oMcDyQkMjDv/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>ACTA 19 JULIO</td>
                                    <td><a href="https://drive.google.com/file/d/1YCxJfEr0ma9qX7_rtoL_RP5AVeH5ZEwt/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>ACTA 12 AGOSTO</td>
                                    <td><a href="https://drive.google.com/file/d/191fD6fZr2MexF3UxpypHWmkMQ037BAie/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td>ACTA 19 DICIEMBRE</td>
                                    <td><a href="https://drive.google.com/file/d/1nVhm1kGAWTqo4Wi7AW2LtGJnCdQsW9is/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                        ACTAS 2021
                    </button>
                </h2>
                <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table table-hover table-responsive-sm table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Descripción</th>
                                    <th>Enlace</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>ACTA 14 SETIEMBRE</td>
                                    <td><a href="https://drive.google.com/file/d/18Kyc-jvzaVjLI9HtbksPDuqeIsCCzT3_/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>ACTA 21 SETIEMBRE</td>
                                    <td><a href="https://drive.google.com/file/d/1iCIL42P4UrPTeGt8MOWwda9UFPPo-RWA/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>ACTA 1 DE OCTUBRE</td>
                                    <td><a href="https://drive.google.com/file/d/1vqDa2bRxDwyWbak84LeoDI-DyoSS8v5c/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>ACTA 5 OCTUBRE</td>
                                    <td><a href="https://drive.google.com/file/d/1h-2T7LhCnqo6yqwL1Ov2_WQNXsaJ46nr/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>ACTA 22 OCTUBRE</td>
                                    <td><a href="https://drive.google.com/file/d/1FrziX65iOImsO25n_u1wYJt_3gOT5Baz/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>ACTA 30 NOVIEMBRE</td>
                                    <td><a href="https://drive.google.com/file/d/15J2cTuHyGvQ8mkKxVYfh48lURfcTgnNS/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                        ACTAS 2017
                    </button>
                </h2>
                <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table table-hover table-responsive-sm table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Descripción</th>
                                    <th>Enlace</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>ACTA 28 MARZO</td>
                                    <td><a href="https://drive.google.com/file/d/1C0_oe4ogmmHjpSHzxj2RB8IP196w90E4/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>ACTA 5 JUNIO</td>
                                    <td><a href="https://drive.google.com/file/d/17UlnpE9SqeHGWeXmEX7tx-KeWDZzDCZg/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                        ACTAS 2016
                    </button>
                </h2>
                <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table table-hover table-responsive-sm table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Descripción</th>
                                    <th>Enlace</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>ACTA 6 DICIEMBRE</td>
                                    <td><a href="https://drive.google.com/file/d/1qiToZZ4XNacrlzvMi1DCr-HCej8mef_8/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <hr>
        
        <div class="accordion" id="plananual1">

            
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panaul" aria-expanded="false" aria-controls="panaul">
                        PLAN ANUAL DE TRABAJO
                    </button>
                </h2>
                <div id="panaul" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#plananual1">
                    <div class="accordion-body">
                        <table class="table table-hover table-responsive-sm table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Descripción</th>
                                    <th>Enlace</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1.</td>
                                    <td>PLAN ANUAL DE TRABAJO 2024</td>
                                    <td><a href="https://drive.google.com/file/d/1yNDaYNMKA58nK7kw1AvcCfGQhP-Mggli/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>PLAN ANUAL DE TRABAJO 2023</td>
                                    <td><a href="https://drive.google.com/file/d/1jY91_2KIimZH6yef61y7cZWpz_MdjoGt/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>PLAN ANUAL DE TRABAJO 2022</td>
                                    <td><a href="https://drive.google.com/file/d/120q9HiWnHEGemnRDrenbAGl-k9DRtlZO/view?usp=sharing" target="_blank"><span class="mailbox-attachment-icon" style="font-size: 25px !important; padding: 3px !important; color:#ff0909;"><i class="far fa-file-pdf"></i></span></a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            

        </div>
        <!-- end container -->
    </section>

</div>
</template>
