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
      img1, img2, img4, img6, img7,
      title: "Noticias",
      items: [
        {
          text: "CRAH",
          href: "/",
        },
        {
          text: "Noticias",
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
    <PageHeader :title="title" :items="items"  class="pt-5 mt-5"/>

<div class="row">
  <div class="col-xl-12 col-lg-8">
    <div class="card">
      <b-tabs
        content-class="p-4"
        class="pt-2"
        nav-wrapper-class="nav-item"
        nav-class="justify-content-center nav-tabs-custom"
      >
        <b-tab title="Listado total" active>
          <div>
            <div class="row justify-content-center">
              <div class="col-xl-12">
                <div>
                  <div class="row align-items-center">
                    <div class="col-4">
                      <div>
                        <h5 class="mb-0">Listado de noticias</h5>
                      </div>
                    </div>

                    <!-- <div class="col-8">
                      <div class="float-end">
                        <ul class="nav nav-pills">
                          <li class="nav-item">
                            <a
                              class="nav-link disabled"
                              href="#"
                              tabindex="-1"
                              aria-disabled="true"
                              >View :</a
                            >
                          </li>
                          <li
                            class="nav-item"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="List"
                          >
                            <router-link class="nav-link" to="/blog/list">
                              <i class="mdi mdi-format-list-bulleted"></i>
                            </router-link>
                          </li>
                          <li
                            class="nav-item"
                            data-toggle="tooltip"
                            data-placement="top"
                            title="Grid"
                          >
                            <router-link
                              class="nav-link active text-white"
                              to="/blog/grid"
                            >
                              <i class="mdi mdi-view-grid-outline"></i>
                            </router-link>
                          </li>
                        </ul>
                      </div>
                    </div> -->
                  </div>
                  <!-- end row -->

                  <hr class="mb-4" />

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="card p-1 border shadow-none">
                        <div class="p-3">
                          <h5>
                            <router-link to="/blog/detail" class="text-dark"
                              >Beautiful Day with Friends</router-link
                            >
                          </h5>
                          <p class="text-muted mb-0">10 Apr, 2020</p>
                        </div>

                        <div class="position-relative">
                          <img
                            :src="img2"
                            alt=""
                            class="img-thumbnail"
                          />
                        </div>

                        <div class="p-3">
                          <ul class="list-inline">
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-purchase-tag-alt align-middle text-muted me-1"
                                ></i>
                                Project
                              </a>
                            </li>
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-comment-dots align-middle text-muted me-1"
                                ></i>
                                12 Comments
                              </a>
                            </li>
                          </ul>
                          <p>
                            Neque porro quisquam est, qui dolorem ipsum quia
                            dolor sit amet
                          </p>

                          <div>
                            <a href="#" class="text-primary"
                              >Read more <i class="mdi mdi-arrow-right"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card p-1 border shadow-none">
                        <div class="p-3">
                          <h5>
                            <router-link to="/blog/detail" class="text-dark"
                              >Drawing a sketch</router-link
                            >
                          </h5>
                          <p class="text-muted mb-0">24 Mar, 2020</p>
                        </div>

                        <div class="position-relative">
                          <img
                            :src="img6"
                            alt=""
                            class="img-thumbnail"
                          />

                          <div class="blog-play-icon">
                            <a
                              href="javascript: void(0);"
                              class="avatar-sm d-block mx-auto"
                            >
                              <span
                                class="avatar-title rounded-circle font-size-18"
                                ><i class="mdi mdi-play"></i
                              ></span>
                            </a>
                          </div>
                        </div>
                        <div class="p-3">
                          <ul class="list-inline">
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-purchase-tag-alt align-middle text-muted me-1"
                                ></i>
                                Development
                              </a>
                            </li>
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-comment-dots align-middle text-muted me-1"
                                ></i>
                                08 Comments
                              </a>
                            </li>
                          </ul>

                          <p>
                            At vero eos et accusamus et iusto odio
                            dignissimos ducimus quos
                          </p>

                          <div>
                            <a href="#" class="text-primary"
                              >Read more <i class="mdi mdi-arrow-right"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card p-1 border shadow-none">
                        <div class="p-3">
                          <h5>
                            <router-link to="/blog/detail" class="text-dark"
                              >Drawing a sketch</router-link
                            >
                          </h5>
                          <p class="text-muted mb-0">24 Mar, 2020</p>
                        </div>

                        <div class="position-relative">
                          <img
                            :src="img6"
                            alt=""
                            class="img-thumbnail"
                          />

                          <div class="blog-play-icon">
                            <a
                              href="javascript: void(0);"
                              class="avatar-sm d-block mx-auto"
                            >
                              <span
                                class="avatar-title rounded-circle font-size-18"
                                ><i class="mdi mdi-play"></i
                              ></span>
                            </a>
                          </div>
                        </div>
                        <div class="p-3">
                          <ul class="list-inline">
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-purchase-tag-alt align-middle text-muted me-1"
                                ></i>
                                Development
                              </a>
                            </li>
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-comment-dots align-middle text-muted me-1"
                                ></i>
                                08 Comments
                              </a>
                            </li>
                          </ul>

                          <p>
                            At vero eos et accusamus et iusto odio
                            dignissimos ducimus quos
                          </p>

                          <div>
                            <a href="#" class="text-primary"
                              >Read more <i class="mdi mdi-arrow-right"></i
                            ></a>
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
                            <router-link to="/blog/detail" class="text-dark"
                              >Riding bike on road</router-link
                            >
                          </h5>
                          <p class="text-muted mb-0">10 Apr, 2020</p>
                        </div>

                        <div class="position-relative">
                          <img
                            :src="img1"
                            alt=""
                            class="img-thumbnail"
                          />
                        </div>

                        <div class="p-3">
                          <ul class="list-inline">
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-purchase-tag-alt align-middle text-muted me-1"
                                ></i>
                                Travel
                              </a>
                            </li>
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-comment-dots align-middle text-muted me-1"
                                ></i>
                                08 Comments
                              </a>
                            </li>
                          </ul>
                          <p>
                            Itaque earum rerum hic tenetur a sapiente
                            delectus ut aut
                          </p>

                          <div>
                            <a href="#" class="text-primary"
                              >Read more <i class="mdi mdi-arrow-right"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card p-1 border shadow-none">
                        <div class="p-3">
                          <h5>
                            <router-link to="/blog/detail" class="text-dark"
                              >Project discussion with team</router-link
                            >
                          </h5>
                          <p class="text-muted mb-0">24 Mar, 2020</p>
                        </div>

                        <div class="position-relative">
                          <img
                            :src="img2"
                            alt=""
                            class="img-thumbnail"
                          />
                        </div>

                        <div class="p-3">
                          <ul class="list-inline">
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-purchase-tag-alt align-middle text-muted me-1"
                                ></i>
                                Development
                              </a>
                            </li>
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-comment-dots align-middle text-muted me-1"
                                ></i>
                                08 Comments
                              </a>
                            </li>
                          </ul>

                          <p>
                            Sed ut perspiciatis unde omnis iste eaque natus
                            error sit
                          </p>

                          <div>
                            <a href="#" class="text-primary"
                              >Read more <i class="mdi mdi-arrow-right"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="card p-1 border shadow-none">
                        <div class="p-3">
                          <h5>
                            <router-link to="/blog/detail" class="text-dark"
                              >Project discussion with team</router-link
                            >
                          </h5>
                          <p class="text-muted mb-0">24 Mar, 2020</p>
                        </div>

                        <div class="position-relative">
                          <img
                            :src="img2"
                            alt=""
                            class="img-thumbnail"
                          />
                        </div>

                        <div class="p-3">
                          <ul class="list-inline">
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-purchase-tag-alt align-middle text-muted me-1"
                                ></i>
                                Development
                              </a>
                            </li>
                            <li class="list-inline-item me-3">
                              <a href="#" class="text-muted">
                                <i
                                  class="bx bx-comment-dots align-middle text-muted me-1"
                                ></i>
                                08 Comments
                              </a>
                            </li>
                          </ul>

                          <p>
                            Sed ut perspiciatis unde omnis iste eaque natus
                            error sit
                          </p>

                          <div>
                            <a href="#" class="text-primary"
                              >Read more <i class="mdi mdi-arrow-right"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr class="my-4" />

                  <div class="text-center">
                    <ul
                      class="pagination justify-content-center pagination-rounded"
                    >
                      <li class="page-item disabled">
                        <a href="#" class="page-link"
                          ><i class="mdi mdi-chevron-left"></i
                        ></a>
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
                        <a href="#" class="page-link"
                          ><i class="mdi mdi-chevron-right"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </b-tab>
        <b-tab title="Lista total por fechas">
          <div>
            <div class="row justify-content-center">
              <div class="col-xl-10">
                <h5>Listado por fechas</h5>

                <div class="mt-5">
                  <div class="d-flex flex-wrap">
                    <div class="me-2">
                      <h4>2020</h4>
                    </div>
                    <div class="ml-auto">
                      <span
                        class="badge badge-soft-success rounded-pill float-end ml-1 font-size-12"
                        >03</span
                      >
                    </div>
                  </div>
                  <hr class="mt-2" />

                  <div class="list-group list-group-flush">
                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Beautiful
                      Day with Friends</router-link
                    >

                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Drawing a
                      sketch</router-link
                    >

                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Project
                      discussion with team</router-link
                    >
                  </div>
                </div>

                <div class="mt-5">
                  <div class="d-flex flex-wrap">
                    <div class="me-2">
                      <h4>2019</h4>
                    </div>
                    <div class="ml-auto">
                      <span
                        class="badge badge-soft-success rounded-pill float-end ml-1 font-size-12"
                        >06</span
                      >
                    </div>
                  </div>
                  <hr class="mt-2" />

                  <div class="list-group list-group-flush">
                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Coffee
                      with Friends</router-link
                    >

                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Neque
                      porro quisquam est</router-link
                    >

                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Quis autem
                      vel eum iure</router-link
                    >

                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Cras mi eu
                      turpis</router-link
                    >

                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Drawing a
                      sketch</router-link
                    >

                    <router-link
                      to="/blog/detail"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Project
                      discussion with team</router-link
                    >
                  </div>
                </div>

                <div class="mt-5">
                  <div class="d-flex flex-wrap">
                    <div class="me-2">
                      <h4>2018</h4>
                    </div>
                    <div class="ml-auto">
                      <span
                        class="badge badge-soft-success rounded-pill float-end ml-1 font-size-12"
                        >03</span
                      >
                    </div>
                  </div>
                  <hr class="mt-2" />

                  <div class="list-group list-group-flush">
                    <router-link
                      to="/blog/details"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Beautiful
                      Day with Friends</router-link
                    >

                    <router-link
                      to="/blog/details"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Drawing a
                      sketch</router-link
                    >

                    <router-link
                      to="/blog/details"
                      class="list-group-item text-muted"
                      ><i class="mdi mdi-circle-medium me-1"></i> Project
                      discussion with team</router-link
                    >
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
