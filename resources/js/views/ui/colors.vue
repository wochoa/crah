<script>
import Layout from "../../layouts/main.vue";
import PageHeader from "../../components/page-header.vue";

/**
 * Colors component
 */
export default {
  components: { Layout, PageHeader },
  data() {
    return {
      title: "Colors",
      items: [
        {
          text: "UI Elements",
          href: "/",
        },
        {
          text: "Colors",
          active: true,
        },
      ],
    };
  },
};
</script>

<template>
  <Layout>
    <PageHeader :title="title" :items="items" />
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">
              <div class="color-box bg-primary p-4">
                <h5 class="my-2 text-white">#556ee6</h5>
              </div>
              <div class="color-box bg-primary bg-gradient p-4">
                <h5 class="my-2 text-white">bg-gradient</h5>
              </div>
              <div class="color-box bg-primary bg-soft p-4">
                <h5 class="my-2 text-primary">bg-soft</h5>
              </div>
            </div>

            <h5 class="mb-0 mt-3 text-primary">Primary</h5>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">
              <div class="color-box bg-success p-4">
                <h5 class="my-2 text-white">#34c38f</h5>
              </div>
              <div class="color-box bg-success bg-gradient p-4">
                <h5 class="my-2 text-white">bg-gradient</h5>
              </div>
              <div class="color-box bg-success bg-soft p-4">
                <h5 class="my-2 text-success">bg-soft</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-success">Success</h5>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">
              <div class="color-box bg-info p-4">
                <h5 class="my-2 text-white">#50a5f1</h5>
              </div>
              <div class="color-box bg-info bg-gradient p-4">
                <h5 class="my-2 text-white">bg-gradient</h5>
              </div>
              <div class="color-box bg-info bg-soft p-4">
                <h5 class="my-2 text-info">bg-soft</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-info">Info</h5>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">
              <div class="color-box bg-warning p-4">
                <h5 class="my-2 text-white">#f1b44c</h5>
              </div>
              <div class="color-box bg-warning bg-gradient p-4">
                <h5 class="my-2 text-white">bg-gradient</h5>
              </div>
              <div class="color-box bg-warning bg-soft p-4">
                <h5 class="my-2 text-warning">bg-soft</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-warning">Warning</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->

    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">
              <div class="color-box bg-danger p-4">
                <h5 class="my-2 text-white">#f46a6a</h5>
              </div>
              <div class="color-box bg-danger bg-gradient p-4">
                <h5 class="my-2 text-white">bg-gradient</h5>
              </div>
              <div class="color-box bg-danger bg-soft p-4">
                <h5 class="my-2 text-danger">bg-soft</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-danger">Danger</h5>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">
              <div class="color-box bg-dark p-4">
                <h5 class="my-2 text-light">#343a40</h5>
              </div>
              <div class="color-box bg-dark bg-gradient p-4">
                <h5 class="my-2 text-light">bg-gradient</h5>
              </div>
              <div class="color-box bg-dark bg-soft p-4">
                <h5 class="my-2 text-dark">bg-soft</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-dark">Dark</h5>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">
              <div class="color-box bg-secondary p-4">
                <h5 class="my-2 text-light">#74788d</h5>
              </div>
              <div class="color-box bg-secondary bg-gradient p-4">
                <h5 class="my-2 text-light">bg-gradient</h5>
              </div>
              <div class="color-box bg-secondary bg-soft p-4">
                <h5 class="my-2 text-secondary">bg-soft</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-muted">Secondary</h5>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">

              <div class="bg-primary opacity-75 p-4">
                <h5 class="my-2 text-white">opacity-75</h5>
              </div>
              <div class="bg-primary opacity-50 p-4">
                <h5 class="my-2 text-white">opacity-50</h5>
              </div>
              <div class="bg-primary opacity-25 p-4">
                <h5 class="my-2 text-white">opacity-25</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-muted">Opacity</h5>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">

              <div class="bg-primary bg-opacity-75 p-4">
                <h5 class="my-2">bg-opacity-75</h5>
              </div>
              <div class="bg-primary bg-opacity-50 p-4">
                <h5 class="my-2">bg-opacity-50</h5>
              </div>
              <div class="bg-primary bg-opacity-25 p-4">
                <h5 class="my-2">bg-opacity-25</h5>
              </div>
              <div class="bg-primary bg-opacity-10 p-4">
                <h5 class="my-2">bg-opacity-10</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-muted">bg Opacity</h5>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6">
        <div class="card">
          <div class="card-body text-center">
            <div class="rounded overflow-hidden">

              <div class="p-4">
                <h5 class="my-2 text-primary text-opacity-75">text-opacity-75</h5>
              </div>
              <div class="p-4">
                <h5 class="my-2 text-primary text-opacity-50">text-opacity-50</h5>
              </div>
              <div class="p-4">
                <h5 class="my-2 text-primary text-opacity-25">text-opacity-25</h5>
              </div>
            </div>
            <h5 class="mb-0 mt-3 text-muted">text Opacity</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->
  </Layout>
</template>