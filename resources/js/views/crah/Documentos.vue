<script>
import Jaimegeronimo from '../../../images/crah/miembros/jaimegeronimo.jpg';
export default {

    data() {
        return {
            Jaimegeronimo,

        }
    }
}
</script>
<template>
<div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title text-secondary">CRAH</div>
                        <h4>DOCUMENTOS NORMATIVOS</h4>
                    </div>
                </div>
            </div>
<div class="row">

    <div class="col-xl-3 col-sm-6">
        <div class="card blog-box mb-4 mb-xl-0">
            <div class="position-relative">
                <!-- <img :src="cryblog1" alt="" class="rounded img-fluid mx-auto d-block" /> -->
                <img :src="Jaimegeronimo" alt="" class="rounded img-fluid mx-auto d-block" />
                <!-- <div class="badge bg-danger blog-badge font-size-11">
                                Acitividad
                            </div> -->
            </div>

            <div class="mt-4 text-muted p-2">
                <!-- <p class="mb-2">
                                <i class="bx bx-calendar me-1"></i> 19 Abril,
                                2024
                            </p> -->
                <p class="mb-3 text-center">
                    Dr. Jaime Gerónimo De la Cruz <br>
                    <b>Presidente del CRAH</b>
                </p>
                <!-- <p>
                                Los miembros de la Comisión Regional Anticorrupción de Huánuco (CRAH) presidida por el Dr. Jaime Gerónimo De la Cruz, realizaron una sesión extraordinaria en donde tuvieron la participación del Gobernador Regional de Huánuco, Antonio Pulgar Lucas.
                            </p>

                            <div>
                                <a href="#">Leer más</a>
                            </div> -->
            </div>
        </div>
    </div>
</div>
</template>
