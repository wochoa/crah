<script>
import logoLight from '../../../images/logo-light.png';
import logoDark from '../../../images/logo-dark.png';

export default {
    data() {
        return {

            logoLight,
            logoDark,

        };
    },
    methods: {
        /**
         * Toggle menu
         */
        toggleMenu() {
            document.getElementById("topnav-menu-content").classList.toggle("show");
        },

    }
}
</script>

<template>
<nav class="navbar navbar-expand-lg navigation fixed-top nav-sticky" id="navbar">
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
                    <!-- <a class="nav-link active" href="/#inicio">Inicio</a> -->
                    <router-link to="/#inicio" class="nav-link text-dark">
                        Inicio
                    </router-link>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="/#about">Quienes somos</a> -->
                    <router-link to="/#about" class="nav-link text-dark">
                        Quienes somos
                    </router-link>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="/#documentos">Documentos</a> -->
                    <router-link to="/#documentos" class="nav-link text-dark">
                        Documentos
                    </router-link>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link" href="/#noticias">Noticas</a> -->
                    <router-link to="/#noticias" class="nav-link text-dark">
                        Noticas
                    </router-link>
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
</template>
