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
            data_marconomativo:{},
            datepickervalue: new Date(),
        };
    },
    mounted() {
        this.cargadatos();
    },
    methods: {
        cargadatos()
        {
            var url='/pagina/389'
            axios.get(url).then(res=>{
                let valor=res.data.pagina
                this.data_marconomativo=valor[0]
            })
        }
    },
};
</script>
<template>
<!-- <Layout> -->

<Header />

<div class="container">
    <PageHeader :title="title" :items="items"  class="pt-5 mt-5"/>
    <div class="row pt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1">Marco Normativo</h5>

                    </div>
                </div>
                <!-- <div class="card-body border-bottom">
                    <div class="row g-3">
                        <div class="col-xxl-6a col-lg-6">
                            <input type="search" class="form-control" id="searchTableList" placeholder="Buscar por ...">
                        </div>

                        <div class="col-xxl-2 col-lg-4">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Tipo</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <div id="datepicker1">
                                <input placeholder="Select Date" class="form-control" type="date">

                            </div>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <button type="button" class="btn btn-secondary w-100"><i class="mdi mdi-filter-outline align-middle"></i>
                                Buscar</button>
                        </div>
                    </div>
                </div> -->
                <div class="card-body">
                    <div class="table-responsive" v-html="data_marconomativo.cont_pagina">
                        
                    </div>
                    
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
</div>

<!-- The modal -->
<b-modal v-model="listDeleteModal" hide-footer title="Delete" class="v-modal-custom">
    <p class="text-muted font-size-16 mb-4">are you sure want to delete?</p>
    <div class="modal-footer v-modal-footer">
        <b-button type="button" variant="light" @click="listDeleteModal = false">Close
        </b-button>
        <b-button type="button" variant="success">Save Changes</b-button>
    </div>
</b-modal>
<!-- </Layout> -->
</template>
