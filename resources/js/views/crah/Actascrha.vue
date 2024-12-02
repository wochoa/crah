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
</div>

<!-- </Layout> -->
</template>
