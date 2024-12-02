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
            datoslider:{}
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
        <div class="container">
            <div class="currency-price">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card shadow-lg bg-body rounded">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-soft bg-danger text-danger font-size-22">
                                            <i class="mdi mdi-book-arrow-right"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="text-muted">Marco normativo</h5>
                                        <p class="text-muted text-truncate mb-0">Documentos de gestión</p>
                                        <!-- <button class="btn btn-sm btn-danger">Hacer click</button> -->
                                        <router-link to="/documentos/crah" class="btn btn-sm btn-danger">
                                            ver documentos
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-lg bg-body rounded">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-soft bg-danger text-danger font-size-22">
                                            <i class="mdi mdi-calendar"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="text-muted">proximo eventos</h5>
                                        <p class="text-muted text-truncate mb-0">Eventos CRAH</p>
                                        <!-- <button class="btn btn-sm btn-danger">Hacer click</button> -->
                                        <router-link to="/eventos/lista" class="btn btn-sm btn-danger">
                                            Ver eventos
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-lg bg-body rounded">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title rounded-circle bg-soft bg-danger text-danger font-size-22">
                                            <i class="mdi mdi-book-open-variant"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="text-muted">Documentos</h5>
                                        <p class="text-muted text-truncate mb-0">Actas, Acuerdos, etc.</p>
                                        <router-link to="/documentos/internos" class="btn btn-sm btn-danger">
                                            Ver documentos
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- currency price section end -->

    <!-- QUIENES SOMOS  -->
    <section class="section pt-4 bg-white" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">Quienes somos</div>
                        <h4>Presentación</h4>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="text-muted">
                        <h4 class="card-title mb-5">Objetivos</h4>
                        <ul class="verti-timeline list-unstyled">
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18 bx-fade-right"></i>
                                </div>
                                <div class="d-flex">
                                    <div class="me-3">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div style="text-align: justify;">Fortalecer la implementación de lineamientos y los estándares de cumplimiento en materia de integridad y lucha contra la corrupción en la Región Huánuco. </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18 bx-fade-right"></i>
                                </div>
                                <div class="d-flex">
                                    <div class="me-3">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div style="text-align: justify;">
                                            Mejorar la capacidad de Articulación de las entidades de la Región Huánuco, con la finalidad de prevenir, investigar y sancionar la corrupción en el marco de sus competencias, asegurando la rendición de cuentas de manera periódica.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18 bx-fade-right"></i>
                                </div>
                                <div class="d-flex">
                                    <div class="me-3">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div style="text-align: justify;">Incentivar una cultura de valores y principios de integridad en la región Huánuco.</div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="bx bx-right-arrow-circle font-size-18 bx-fade-right"></i>
                                </div>
                                <div class="d-flex">
                                    <div class="me-3">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div style="text-align: justify;">Obtener como comisión un rol protagónico dentro de la sociedad, manteniendo firme la lucha contra la corrupción en la Región Huánuco, tomando acciones concretas que sean reconocidas por la población.</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-center mt-4">
                            <!-- <a href="javascript: void(0);" class="btn btn-primary btn-sm">Load More</a> -->
                            <router-link to="/miembroscrah" class="btn btn-dark btn-sm">
                                Ver miembros del CRAH
                            </router-link>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 ms-auto">
                    <div class="mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border shadow-sm bg-secondary">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="mdi mdi-bullseye h2 text-white"></i>
                                        </div>
                                        <h5 class="text-white">Misión</h5>
                                        <p class="text-white mb-0" style="text-align: justify;">
                                            Articular iniciativas, objetivos, planes y acciones en la lucha frontal contra la Corrupción en la Región Huánuco, que tengo efecto en la prevención, investigación y sanción de todo de tipo de actos de corrupción en la Administración Pública. Acciones que en su esencia deben aportar a la mejora de una buena administración pública con contenido ético y profesionalismo de los funcionarios y servidores públicos, y en favor del ciudadano.
                                        </p>
                                    </div>
                                    <!-- <div class="card-footer bg-transparent border-top text-center">
                                        <a href="#" class="text-primary">Learn more</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border shadow-sm mt-lg-5 bg-secondary">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="mdi mdi-eye-circle h2 text-white"></i>
                                        </div>
                                        <h5 class="text-white">Visión</h5>
                                        <p class="text-white mb-0 " style="text-align: justify;">
                                            Procurar en la Región Huánuco que la administración pública se encamine libre de todo acto de corrupción, recuperando los valores éticos en la función pública en el marco del Estado Constitucional de Derecho y el respeto irrestricto de los Derechos Fundamentales, donde la administración pública sea transparente, objetivo e imparcial, y que el ciudadano tenga las mismas condiciones y oportunidad para el desarrollo de sus derechos fundamentales.
                                        </p>
                                    </div>
                                    <!-- <div class="card-footer bg-transparent border-top text-center">
                                        <a href="#" class="text-primary">Learn more</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <hr class="my-5" />

            <div class="row">
                <div class="col-lg-12">
                    <!-- <client-slider /> -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- Blog noticias  start -->
    <section class="section" id="noticias">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">Noticias/Actividades</div>
                        <h4>Nuevas noticias</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <Slidernoticias />

            <!-- end row -->
            <div class="row mt-3">
                <div class="col-12 ">
                    <div class="position-absolute top-0 end-0">
                        <!-- <button class="btn btn-info btn-sm">Ver más documentos</button> -->
                        <router-link to="/noticiasall" class="btn btn-success btn-sm">
                            Ver más noticias
                        </router-link>
                    </div>

                </div>
            </div>
        </div>
        <!-- end container -->
    </section>

    <!-- MIEMBROS integranrtes  -->
    <section class="section pt-4" style="background-color: #b5a7a7 !important;">
        <div class="container">
            <MiembrosInte />
        </div>
    </section>

    <!-- <section class="section pt-4" id="documentos" style="background-color: #d5d5d5 !important;">
        <div class="container">
            <div class="container">
                <Documentos />
            </div>
        </div>

    </section> -->
    <!-- Features end -->

    <!-- Faqs instrituciones miembros del CRAH start -->
    <section class="section" id="Miembroscra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">Miembros CRAH</div>
                        <h4>Instituciones Miembros</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <Enlacesrefes />

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Faqs end -->

    <!-- Footer start -->
    <footer class="landing-footer" style="background-color: #282221 !important;">
        <div class="container">
            <!-- <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4 mb-lg-0">
              <h5 class="mb-3 footer-list-title">Company</h5>
              <ul class="list-unstyled footer-list-menu">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4 mb-lg-0">
              <h5 class="mb-3 footer-list-title">Resources</h5>
              <ul class="list-unstyled footer-list-menu">
                <li><a href="#">Whitepaper</a></li>
                <li><a href="#">Token sales</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="mb-4 mb-lg-0">
              <h5 class="mb-3 footer-list-title">Links</h5>
              <ul class="list-unstyled footer-list-menu">
                <li><a href="#">Tokens</a></li>
                <li><a href="#">Roadmap</a></li>
                <li><a href="#">FAQs</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-sm-6">
            <div class="mb-4 mb-lg-0">
              <h5 class="mb-3 footer-list-title">Latest News</h5>
              <div class="blog-post">
                <a href="#" class="post">
                  <div class="badge badge-soft-success font-size-11 mb-3">
                    Cryptocurrency
                  </div>
                  <h5 class="post-title">
                    Donec pede justo aliquet nec
                  </h5>
                  <p class="mb-0">
                    <i class="bx bx-calendar me-1"></i> 04
                    Mar, 2020
                  </p>
                </a>
                <a href="#" class="post">
                  <div class="badge badge-soft-success font-size-11 mb-3">
                    Cryptocurrency
                  </div>
                  <h5 class="post-title">
                    In turpis, Pellentesque
                  </h5>
                  <p class="mb-0">
                    <i class="bx bx-calendar me-1"></i> 12
                    Mar, 2020
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div> -->
            <!-- end row -->

            <!-- <hr class="footer-border my-5" /> -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <img :src="logoLight" alt="" height="50" />
                    </div>

                    <p class="mb-2">
                        2020 © CRAH. Comisión Regional Anticorrupción de Huánuco
                    </p>
                    <!-- <p>
              It will be as simple as occidental in fact, it will
              be to an english person, it will seem like
              simplified English, as a skeptical
            </p> -->
                </div>
            </div>
        </div>
        <!-- end container -->
    </footer>
</div>
</template>
