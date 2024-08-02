<script>
// import Layout from "../../layouts/main.vue";
import Header from './Header.vue';
import PageHeader from "../../components/page-header.vue";

import img1 from '../../../images/small/img-1.jpg';
import img2 from '../../../images/small/img-2.jpg';
import img4 from '../../../images/small/img-4.jpg';
import img6 from '../../../images/small/img-6.jpg';
import img7 from '../../../images/small/img-7.jpg';

export default {
    page: {
        title: "Blog-grid",
    },
    components: {
        // Layout,
        Header,
        PageHeader,
    },
    methods: {},
    data() {
        return {
            img1,
            img2,
            img4,
            img6,
            img7,
            title: "Eventos",
            items: [{
                    text: "CRAH",
                    href: "/",
                },
                {
                    text: "Eventos",
                    active: true,
                },
            ],

        };
    },
};
</script>

<template>
<Header />
<!-- <Layout> -->
<div class="container">
    <PageHeader :title="title" :items="items" class="pt-5 mt-5" />

    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card">
                <b-tabs content-class="p-4" class="pt-2" nav-wrapper-class="nav-item" nav-class="justify-content-center nav-tabs-custom">
                    <b-tab title="Listado total" active>
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div>
                                                    <h5 class="mb-0">Nuestro eventos</h5>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end row -->

                                        <hr class="mb-4" />

                                        <!-- <div class="row">
                                            <div class="col-sm-4">
                                                <div class="card p-1 border shadow-none">
                                                    <div class="p-3">
                                                        <h5>
                                                            <router-link to="/blog/detail" class="text-dark">Beautiful Day with Friends</router-link>
                                                        </h5>
                                                        <p class="text-muted mb-0">10 Apr, 2020</p>
                                                    </div>

                                                    <div class="position-relative">
                                                        <img :src="img2" alt="" class="img-thumbnail" />
                                                    </div>

                                                    <div class="p-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                    Project
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                    12 Comments
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            Neque porro quisquam est, qui dolorem ipsum quia
                                                            dolor sit amet
                                                        </p>

                                                        <div>
                                                            <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="card p-1 border shadow-none">
                                                    <div class="p-3">
                                                        <h5>
                                                            <router-link to="/blog/detail" class="text-dark">Drawing a sketch</router-link>
                                                        </h5>
                                                        <p class="text-muted mb-0">24 Mar, 2020</p>
                                                    </div>

                                                    <div class="position-relative">
                                                        <img :src="img6" alt="" class="img-thumbnail" />

                                                        <div class="blog-play-icon">
                                                            <a href="javascript: void(0);" class="avatar-sm d-block mx-auto">
                                                                <span class="avatar-title rounded-circle font-size-18"><i class="mdi mdi-play"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                    Development
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                    08 Comments
                                                                </a>
                                                            </li>
                                                        </ul>

                                                        <p>
                                                            At vero eos et accusamus et iusto odio
                                                            dignissimos ducimus quos
                                                        </p>

                                                        <div>
                                                            <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="card p-1 border shadow-none">
                                                    <div class="p-3">
                                                        <h5>
                                                            <router-link to="/blog/detail" class="text-dark">Drawing a sketch</router-link>
                                                        </h5>
                                                        <p class="text-muted mb-0">24 Mar, 2020</p>
                                                    </div>

                                                    <div class="position-relative">
                                                        <img :src="img6" alt="" class="img-thumbnail" />

                                                        <div class="blog-play-icon">
                                                            <a href="javascript: void(0);" class="avatar-sm d-block mx-auto">
                                                                <span class="avatar-title rounded-circle font-size-18"><i class="mdi mdi-play"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="p-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                    Development
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                    08 Comments
                                                                </a>
                                                            </li>
                                                        </ul>

                                                        <p>
                                                            At vero eos et accusamus et iusto odio
                                                            dignissimos ducimus quos
                                                        </p>

                                                        <div>
                                                            <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="card p-1 border shadow-none">
                                                    <div class="p-3">
                                                        <h5>
                                                            <router-link to="/blog/detail" class="text-dark">Riding bike on road</router-link>
                                                        </h5>
                                                        <p class="text-muted mb-0">10 Apr, 2020</p>
                                                    </div>

                                                    <div class="position-relative">
                                                        <img :src="img1" alt="" class="img-thumbnail" />
                                                    </div>

                                                    <div class="p-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                    Travel
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                    08 Comments
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            Itaque earum rerum hic tenetur a sapiente
                                                            delectus ut aut
                                                        </p>

                                                        <div>
                                                            <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="card p-1 border shadow-none">
                                                    <div class="p-3">
                                                        <h5>
                                                            <router-link to="/blog/detail" class="text-dark">Project discussion with team</router-link>
                                                        </h5>
                                                        <p class="text-muted mb-0">24 Mar, 2020</p>
                                                    </div>

                                                    <div class="position-relative">
                                                        <img :src="img2" alt="" class="img-thumbnail" />
                                                    </div>

                                                    <div class="p-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                    Development
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                    08 Comments
                                                                </a>
                                                            </li>
                                                        </ul>

                                                        <p>
                                                            Sed ut perspiciatis unde omnis iste eaque natus
                                                            error sit
                                                        </p>

                                                        <div>
                                                            <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="card p-1 border shadow-none">
                                                    <div class="p-3">
                                                        <h5>
                                                            <router-link to="/blog/detail" class="text-dark">Project discussion with team</router-link>
                                                        </h5>
                                                        <p class="text-muted mb-0">24 Mar, 2020</p>
                                                    </div>

                                                    <div class="position-relative">
                                                        <img :src="img2" alt="" class="img-thumbnail" />
                                                    </div>

                                                    <div class="p-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                    Development
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item me-3">
                                                                <a href="#" class="text-muted">
                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                    08 Comments
                                                                </a>
                                                            </li>
                                                        </ul>

                                                        <p>
                                                            Sed ut perspiciatis unde omnis iste eaque natus
                                                            error sit
                                                        </p>

                                                        <div>
                                                            <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                                        <hr class="my-4" />

                                        <div class="text-center">
                                            <ul class="pagination justify-content-center pagination-rounded">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">...</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">10</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </b-tab>

                </b-tabs>
                <!-- Nav tabs -->
            </div>
        </div>

    </div>
    <!-- end row -->
</div>

<!-- </Layout> -->
</template>
