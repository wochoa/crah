<script>
// import Layout from "../../layouts/main.vue";
import PageHeader from "../../components/page-header.vue";
import Datepicker from "vue3-datepicker";
import Header from './Header.vue';
import axios from 'axios';
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
            data_marconomativo: {},
            datepickervalue: new Date(),
        };
    },
    mounted() {
        this.cargadatos();
    },
    methods: {
        cargadatos() {
            var url = '/pagina/390'
            axios.get(url).then(res => {
                let valor = res.data.pagina
                this.data_marconomativo = valor[0]
            })
        }
    },
};
</script>
<template>
<!-- <Layout> -->

<Header />
<!-- <div v-html="data_marconomativo.cont_pagina">
</div> -->

<div class="container">
    <PageHeader :title="title" :items="items" class="pt-5 mt-5" />
    <div class="card">
        <div class="card-body" v-html="data_marconomativo.cont_pagina">
            
        </div>
    </div>

</div>

<!-- </Layout> -->
</template>
