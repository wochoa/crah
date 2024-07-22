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

export default {
    components: {
        VueCountdown,
        TeamSlider,
        ClientSlider,
        TimelineSlider,
        MiembrosInte,
        Documentos
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
            ]
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
        }
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
                    <li class="nav-item">
                        <a class="nav-link" href="#documentos">Documentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#noticias">Noticas</a>
                    </li>
                    <!-- <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li> -->
                    <!-- <li class="nav-item">
              <a class="nav-link" href="#news">News</a>
            </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#denuncia">Denuncia</a>
                    </li>
                </ul>

                <div class="ms-lg-2">
                    <!-- <a href="/login" class="btn btn-outline-success w-xs">Ingresar</a> -->
                    <router-link to="/login" class="btn btn-dark w-xs">Ingresar</router-link>
                </div>
            </div>
        </div>
    </nav>

    <!-- hero section start -->
    <section class="section hero-section bg-ico-hero" id="inicio">
        <div class="bg-overlay bg-danger" style="background-color: #DA291C !important;"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="text-white-50">
                        <h1 class="text-white fw-semibold mb-3 hero-title">
                            Comisión Regional Anticorrupción de Huánuco
                        </h1>
                        <p class="h4">Implementaremos lineamientos y estándares de cumplimiento en materia de integridad y lucha contra la corrupción en el departamento de Huánuco...</p>
                        <!-- {{ escribirEnPantalla("Implementaremos lineamientos y estándares de cumplimiento en materia de integridad y lucha contra la corrupción en el departamento de Huánuco...")}} -->
                        <!-- <p class="font-size-20 line anim-typewriter">
                            Implementaremos lineamientos y estándares de cumplimiento en materia de integridad y lucha contra la corrupción en el departamento de Huánuco
                        </p> -->
                        <!-- <p id="titulo" class="font-size-20">
                        </p> -->

                        <div class="button-items mt-4">
                            <a href="#" class="btn btn-dark me-2">Leer más</a>
                            <!-- <a href="#" class="btn btn-light">How it work</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 ms-lg-auto">
                    <div class="card overflow-hidden mb-0 mt-5 mt-lg-0">
                        <div class="card-header text-center">
                            <h5 class="mb-0">Evento: Implementación del CRAH desconcentradas</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5>Tiempo restante:</h5>
                                <!-- <div class="mt-4">
                                    <vue-countdown :time="15 * 24 * 60 * 60 * 1000" v-slot="{ days, hours, minutes, seconds }" tag="div" class="counter-number ico-countdown d-flex">
                                        <div class="coming-box">
                                            {{ days }}
                                            <span>Days</span>
                                        </div>
                                        <div class="coming-box">
                                            {{ hours }}
                                            <span>Hours</span>
                                        </div>
                                        <div class="coming-box">
                                            {{ minutes }}
                                            <span>Minutes</span>
                                        </div>
                                        <div class="coming-box">
                                            {{ seconds }}
                                            <span>Seconds</span>
                                        </div>
                                    </vue-countdown>
                                </div>

                                <div class="mt-4">
                                    <button type="button" class="btn btn-success w-md">
                                        Inscribirme
                                    </button>
                                </div> -->

                                <div class="mt-5">
                                    <h5 class="fw-semibold">
                                        Inscritos hasta la fecha
                                    </h5>
                                    <div class="clearfix mt-4">
                                        <h5 class="float-end font-size-14">
                                            87
                                        </h5>
                                    </div>
                                    <div class="progress p-1 progress-xl softcap-progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-label">
                                                15 %
                                            </div>
                                        </div>
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-label">
                                                30 %
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <button class="btn btn-sm btn-danger">Hacer click</button>
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
                                        <button class="btn btn-sm btn-danger">Hacer click</button>
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
                                        <h5 class="text-muted">Normatividad CRAH</h5>
                                        <p class="text-muted text-truncate mb-0">Actas, Acuerdos, etc.</p>
                                        <button class="btn btn-sm btn-danger">Hacer click</button>
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
                        <h4>Presentación</h4>
                        <p style="text-align: justify;">
                            La corrupción en nuestro país, desde el periodo colonial hasta nuestros días, ha sido un fenómeno insidioso, amplio, variado y global que no sólo comprende actividades públicas sino también privadas, como el ofrecimiento y la recepción de sobornos; la malversación y mala asignación de fondos y gastos públicos; los escándalos financieros y políticos; el fraude electoral, el tráfico de influencias y otras trasgresiones administrativas como el financiamiento ilegal de partidos políticos en busca de favores indebidos, los cuales limitan el desarrollo de nuestro país.
                        </p>
                        <!-- <p class="mb-4">
                It would be necessary to have uniform
                pronunciation.
              </p> -->

                        <div class="button-items">
                            <a href="https://themesbrand.com/skote-django/layouts/crypto-ico-landing.html" class="btn btn-danger me-2 ">Ver miembros</a>
                            <!-- <a href="#" class="btn btn-outline-primary">How It work</a> -->
                        </div>

                        <!-- <div class="row mt-4">
                <div class="col-lg-4 col-6">
                  <div class="mt-4">
                    <h4>$ 6.2 M</h4>
                    <p>Invest amount</p>
                  </div>
                </div>
                <div class="col-lg-4 col-6">
                  <div class="mt-4">
                    <h4>16245</h4>
                    <p>Users</p>
                  </div>
                </div>
              </div> -->

                    </div>
                </div>

                <div class="col-lg-6 ms-auto">
                    <div class="mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border shadow-sm bg-danger">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="mdi mdi-bullseye h2 text-white"></i>
                                        </div>
                                        <h5 class="text-white">Misión</h5>
                                        <p class="text-white mb-0 text-justyfi">
                                            Trabajar incansablemente para erradicar la corrupción en todas sus formas, promoviendo la integridad y la transparencia en la administración pública y la sociedad.
                                        </p>
                                    </div>
                                    <!-- <div class="card-footer bg-transparent border-top text-center">
                                        <a href="#" class="text-primary">Learn more</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border shadow-sm mt-lg-5 bg-danger">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="mdi mdi-eye-circle h2 text-white"></i>
                                        </div>
                                        <h5 class="text-white">Visión</h5>
                                        <p class="text-white mb-0">
                                            Ser un referente regional en la lucha contra la corrupción, contribuyendo a una sociedad justa, ética y libre de prácticas corruptas, donde impera la confianza y la honestidad.
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

            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="card blog-box mb-4 mb-xl-0">
                        <div class="position-relative">
                            <!-- <img :src="cryblog1" alt="" class="rounded img-fluid mx-auto d-block" /> -->
                            <img :src="'https://scontent.flim14-1.fna.fbcdn.net/v/t39.30808-6/439223038_451001217450961_8269347793739996455_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFVPjEOLB4wW9O09kyMcSZMpcXtQwUiZjilxe1DBSJmOGUWF-EbDNM8I0_putU6_88&_nc_ohc=Alrtu-zkm3cQ7kNvgEwERKv&_nc_ht=scontent.flim14-1.fna&oh=00_AYBFEJPT2fOkl-YLjkLOT-i0N5Oh-DUDxZ5YAWE_0-hs_g&oe=66A42045'" alt="" class="rounded img-fluid mx-auto d-block" />
                            <div class="badge bg-danger blog-badge font-size-11">
                                Acitividad
                            </div>
                        </div>

                        <div class="mt-4 text-muted p-2">
                            <p class="mb-2">
                                <i class="bx bx-calendar me-1"></i> 19 Abril,
                                2024
                            </p>
                            <h5 class="mb-3">
                                ANTONIO PULGAR ACUDE A CITACIÓN DE COMISIÓN REGIONAL ANTICORRUPCIÓN
                            </h5>
                            <p>
                                Los miembros de la Comisión Regional Anticorrupción de Huánuco (CRAH) presidida por el Dr. Jaime Gerónimo De la Cruz, realizaron una sesión extraordinaria en donde tuvieron la participación del Gobernador Regional de Huánuco, Antonio Pulgar Lucas.
                            </p>

                            <div>
                                <a href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="card blog-box mb-4 mb-xl-0">
                        <div class="position-relative">
                            <!-- <img :src="cryblog2" alt="" class="rounded img-fluid mx-auto d-block" /> -->
                            <img :src="'https://scontent.flim14-1.fna.fbcdn.net/v/t39.30808-6/441866411_476265651591184_4588199416413517617_n.jpg?stp=dst-jpg_s600x600&_nc_cat=109&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeESYCNb-hF4nPyzseaMGHBe7KkZ9zK7Yt_sqRn3Mrti3zgStl1YcFfU8AlpnHfBuXo&_nc_ohc=9xK6QOej9QgQ7kNvgEugys4&_nc_ht=scontent.flim14-1.fna&oh=00_AYCMAhY1JOOjiCdq5sLUF9Ha1qcfaIZ6xZraAzU4p-mpqg&oe=66A41B22'" alt="" class="rounded img-fluid mx-auto d-block" />
                            <div class="badge bg-danger blog-badge font-size-11">
                                actividad
                            </div>
                        </div>

                        <div class="mt-4 text-muted p-2">
                            <p class="mb-2">
                                <i class="bx bx-calendar me-1"></i> 29 Mayo,
                                2024
                            </p>
                            <h5 class="mb-3">LA CORRUPCIÓN ES SINÓNIMO DE VIOLACIÓN DE DERECHOS HUMANOS</h5>
                            <p>
                                Fiscal Anticorrupción, Jeremías Rojas Velásquez:
                                “LA CORRUPCIÓN ES SINÓNIMO DE VIOLACIÓN DE DERECHOS HUMANOS”
                                Comisión Regional Anticorrupción de Huánuco realiza charla para funcionarios de la Municipalidad Provincial...
                            </p>

                            <div>
                                <a href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-6">
                    <div class="card blog-box mb-4 mb-xl-0">
                        <div class="position-relative">
                            <!-- <img :src="cryblog3" alt="" class="rounded img-fluid mx-auto d-block" /> -->
                            <img :src="'https://scontent.flim14-1.fna.fbcdn.net/v/t39.30808-6/441910463_476268344924248_2499813405112068058_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFTCEfXU3ngpreUp71RHjaYU0Riq6QH0QZTRGKrpAfRBsxe7iTaChyaLHIXKmDOCRA&_nc_ohc=ZucByv8bnLwQ7kNvgHPyrnq&_nc_ht=scontent.flim14-1.fna&oh=00_AYC-Z0qSyEQXGnobQ5PyIdOaBEsOXvI4xc1ubgBt68Qr5Q&oe=66A451EB'" alt="" class="rounded img-fluid mx-auto d-block" />
                            <div class="badge bg-danger blog-badge font-size-11">
                                Actividad
                            </div>
                        </div>

                        <div class="mt-4 text-muted p-2">
                            <p class="mb-2">
                                <i class="bx bx-calendar me-1"></i> 29 Mayo,
                                2024
                            </p>
                            <h5 class="mb-3">
                                La integridad pública y el código de la ética como fundamento de la función pública
                            </h5>
                            <p>
                                Con el tema: “La integridad pública y el código de la ética como fundamento de la función pública”
                                REPRESENTANTE DE LA COMISIÓN REGIONAL ANTICORRUPCIÓN BRINDA CHARLA A FUNCIONARIOS DEL GOBIERNO REGONAL DE HUÁNUCO..
                            </p>

                            <div>
                                <a href="#">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- MIEMBROS integranrtes  -->
    <section class="section pt-4" style="background-color: #b5a7a7 !important;">
        <div class="container">
            <MiembrosInte />
        </div>
    </section>


    <section class="section" id="documentos" style="background-color: #d5d5d5 !important;">
        <div class="container">
            <div class="container">
                 <Documentos />
            </div>
        </div>
        <!-- end container -->
    </section>
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
                <div class="col-3">
                    <div class="card">
                        <img :src="poderj" alt="" height="70px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img :src="policia" alt="" height="70px">
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <img :src="Ministeriop" alt="" height="70px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img :src="gorehco" alt="" height="70px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img :src="prefectura" alt="" height="150px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img :src="Contraloria" alt="" height="150px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img :src="Minjus" alt="" height="150px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img :src="MinjusAnt" alt="" height="150px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img :src="Camara" alt="" height="100px">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img :src="Defensoria" alt="" height="100px">
                    </div>
                </div>
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
