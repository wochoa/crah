<script>
import Layout from "../../layouts/main.vue";
import PageHeader from "../../components/page-header.vue";
import chartData from "./data-exchange";

import simplebar from "simplebar-vue";

import avatar1 from '../../../images/users/avatar-1.jpg';

export default {
  components: {
    Layout,
    PageHeader,
    simplebar,
  },
  data() {
    return {
      title: "Exchange",
      avatar1,
      items: [
        {
          text: "Crypto",
          href: "javascript:void(0)",
        },
        {
          text: "Exchange",
          active: true,
        },
      ],
      chartData,
    };
  },
};
</script>
<template>
  <Layout>
    <PageHeader :title="title" :items="items" />
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex">
              <div class="me-3">
                <img
                  :src="avatar1"
                  alt=""
                  class="avatar-md rounded-circle img-thumbnail"
                />
              </div>
              <div class="flex-grow-1 align-self-center">
                <div class="text-muted">
                  <h5>Henry wells</h5>
                  <p class="mb-1">henrywells@abc.com</p>
                  <p class="mb-0">Id no: #SK0234</p>
                </div>
              </div>
              <div class="dropdown">
                <button
                  type="button"
                  class="btn btn-light dropdown-toggle"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-wallet me-1"></i>
                  <span class="d-none d-sm-inline-block"
                    >Wallet Balance <i class="mdi mdi-chevron-down"></i
                  ></span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-md">
                  <div class="dropdown-item-text">
                    <div>
                      <p class="text-muted mb-2">Available Balance</p>
                      <h5 class="mb-0">$ 9148.23</h5>
                    </div>
                  </div>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item" href="#">
                    BTC : <span class="float-end">1.02356</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    ETH : <span class="float-end">0.04121</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    LTC : <span class="float-end">0.00356</span>
                  </a>

                  <div class="dropdown-divider"></div>

                  <a class="dropdown-item text-primary text-center" href="#">
                    Learn more
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->

    <div class="row">
      <div class="col-xl-8">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-4">Price</h4>

            <div class="row">
              <div class="col-xl-3 col-sm-4">
                <div class="d-flex">
                  <div class="avatar-sm me-3">
                    <span
                      class="avatar-title rounded-circle bg-soft bg-warning text-warning font-size-22"
                    >
                      <i class="mdi mdi-bitcoin"></i>
                    </span>
                  </div>

                  <div class="flex-grow-1">
                    <p class="text-muted mb-2">Bitcoin</p>
                    <h5>1.02356 BTC</h5>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-sm-4">
                <div class="mt-4 mt-sm-0">
                  <p class="text-muted mb-2">In USD</p>
                  <h5>6310.22 USD</h5>
                </div>
              </div>

              <div class="col-xl-3 col-sm-4">
                <div class="mt-4 mt-sm-0">
                  <p class="text-muted mb-2">Last 24 hrs</p>
                  <h5>0.24 % <i class="mdi mdi-arrow-up text-success"></i></h5>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <apexchart
                class="apex-charts"
                type="candlestick"
                :height="310"
                dir="ltr"
                :series="chartData.series"
                :options="chartData.chartOptions"
              ></apexchart>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-4">Buy / Sell</h4>

            <div>
              <p class="text-muted mb-2">
                <i class="mdi mdi-wallet me-1"></i> Wallet Balance
              </p>
              <h5>$ 9148.23</h5>
            </div>

            <div class="mt-4">
              <b-tabs nav-class="bg-light rounded" pills content-class="mt-4">
                <b-tab title="Buy" active>
                  <h5 class="font-size-14 mb-4">Buy Coin</h5>
                  <div>
                    <div>
                      <label>Add Amount :</label>
                      <div class="input-group mb-3">
                        <label class="input-group-text">Amount</label>
                        <select class="form-select" style="max-width: 90px">
                          <option value="BT" selected="">BTC</option>
                          <option value="ET">ETH</option>
                          <option value="LT">LTC</option>
                        </select>
                        <input type="text" class="form-control" />
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text">Price</label>
                        </div>
                        <input type="text" class="form-control" />
                        <div class="input-group-append">
                          <label class="input-group-text">$</label>
                        </div>
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text">Total</label>
                        </div>
                        <input type="text" class="form-control" />
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="button" class="btn btn-success w-md">
                        Buy Coin
                      </button>
                    </div>
                  </div>
                </b-tab>
                <b-tab title="Sell">
                  <h5 class="font-size-14 mb-4">Sell Coin</h5>

                  <div>
                    <div>
                      <label>Add Amount :</label>
                      <div class="input-group mb-3">
                        <label class="input-group-text">Amount</label>
                        <select class="form-select" style="max-width: 90px">
                          <option value="BT" selected="">BTC</option>
                          <option value="ET">ETH</option>
                          <option value="LT">LTC</option>
                        </select>
                        <input type="text" class="form-control" />
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text">Price</label>
                        </div>
                        <input type="text" class="form-control" />
                        <div class="input-group-append">
                          <label class="input-group-text">$</label>
                        </div>
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text">Total</label>
                        </div>
                        <input type="text" class="form-control" />
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="button" class="btn btn-danger w-md">
                        Sell Coin
                      </button>
                    </div>
                  </div>
                </b-tab>
              </b-tabs>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->

    <div class="row">
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-4">Order book</h4>

            <div class="table-responsive">
              <table class="table table-bordered mb-0">
                <thead>
                  <tr class="text-center">
                    <th colspan="3">Buy</th>
                    <th colspan="3">Sell</th>
                  </tr>
                  <tr>
                    <th scope="col">Amount</th>
                    <th scope="col">Total</th>
                    <th scope="col">Price</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Total</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>0.0412</td>
                    <td>0.0412</td>
                    <td>256.18</td>
                    <td>0.0201</td>
                    <td>0.0201</td>
                    <td>124.98</td>
                  </tr>
                  <tr>
                    <td>0.0301</td>
                    <td>0.0301</td>
                    <td>187.16</td>
                    <td>0.0165</td>
                    <td>0.0165</td>
                    <td>102.60</td>
                  </tr>
                  <tr>
                    <td>0.0523</td>
                    <td>0.0523</td>
                    <td>325.21</td>
                    <td>0.0348</td>
                    <td>0.0348</td>
                    <td>216.39</td>
                  </tr>
                  <tr>
                    <td>0.0432</td>
                    <td>0.0432</td>
                    <td>268.62</td>
                    <td>0.0321</td>
                    <td>0.0321</td>
                    <td>199.60</td>
                  </tr>
                  <tr>
                    <td>0.0246</td>
                    <td>0.0246</td>
                    <td>152.96</td>
                    <td>0.0403</td>
                    <td>0.0403</td>
                    <td>250.59</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-4">Notifications</h4>

            <simplebar style="max-height: 310px">
              <ul class="verti-timeline list-unstyled">
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <h5 class="font-size-14">
                        15 Mor
                        <i
                          class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"
                        ></i>
                      </h5>
                    </div>
                    <div class="flex-grow-1">
                      <div>If several languages coalesce of the resulting.</div>
                    </div>
                  </div>
                </li>
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <h5 class="font-size-14">
                        14 Mor
                        <i
                          class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"
                        ></i>
                      </h5>
                    </div>
                    <div class="flex-grow-1">
                      <div>
                        New common language will be more simple and regular than
                        the existing
                      </div>
                    </div>
                  </div>
                </li>
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <h5 class="font-size-14">
                        13 Mor
                        <i
                          class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"
                        ></i>
                      </h5>
                    </div>
                    <div class="flex-grow-1">
                      <div>
                        It will seem like simplified English as a skeptical
                        Cambridge
                      </div>
                    </div>
                  </div>
                </li>
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <h5 class="font-size-14">
                        13 Mor
                        <i
                          class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"
                        ></i>
                      </h5>
                    </div>
                    <div class="flex-grow-1">
                      <div>To achieve this, it would be necessary</div>
                    </div>
                  </div>
                </li>
  
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <h5 class="font-size-14">
                        12 Mor
                        <i
                          class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"
                        ></i>
                      </h5>
                    </div>
                    <div class="flex-grow-1">
                      <div>Cum sociis natoque penatibus et magnis dis</div>
                    </div>
                  </div>
                </li>
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <h5 class="font-size-14">
                        11 Mor
                        <i
                          class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"
                        ></i>
                      </h5>
                    </div>
                    <div class="flex-grow-1">
                      <div>
                        New common language will be more simple and regular than
                        the existing
                      </div>
                    </div>
                  </div>
                </li>
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <h5 class="font-size-14">
                        10 Mor
                        <i
                          class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"
                        ></i>
                      </h5>
                    </div>
                    <div class="flex-grow-1">
                      <div>
                        It will seem like simplified English as a skeptical
                        Cambridge
                      </div>
                    </div>
                  </div>
                </li>
                <li class="event-list">
                  <div class="event-timeline-dot">
                    <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="d-flex">
                    <div class="me-3">
                      <h5 class="font-size-14">
                        09 Mor
                        <i
                          class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"
                        ></i>
                      </h5>
                    </div>
                    <div class="flex-grow-1">
                      <div>To achieve this, it would be necessary</div>
                    </div>
                  </div>
                </li>
              </ul>
            </simplebar>
          </div>
        </div>
      </div>
    </div>
  </Layout>
</template>
