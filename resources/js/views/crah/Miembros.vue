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
                        <div class="small-title text-white">CRAH</div>
                        <h4 class="text-white">COMISIÓN REGIONAL ANTICORRUPCIÓN DE HUÁNUCO</h4>
                    </div>
                </div>
            </div>
<div class="row">

    <div class="col-xl-3 col-sm-6">
        <div class="card blog-box mb-4 mb-xl-0">
            <div class="position-relative">
                <img :src="Jaimegeronimo" alt="" class="rounded img-fluid mx-auto d-block" />
            </div>
            <div class="mt-4 text-muted p-2">
                <p class="mb-3 text-center">
                    Dr. Jaime Gerónimo De la Cruz <br>
                    <b>Presidente del CRAH</b>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 ">
    <div class="position-absolute top-0 end-0">
        <button class="btn btn-danger btn-sm">Ver más miembros</button>
    </div>

    </div>
</div>
</template>
