<script>
import VueCropper from "vue-cropperjs";
import "cropperjs/dist/cropper.css";

import Layout from "../../layouts/main.vue";
import PageHeader from "../../components/page-header.vue";

import img5 from '../../../images/small/img-5.jpg';

/**
 * Cropper component
 */
export default {
  components: { VueCropper, Layout, PageHeader },
  data() {
    return {
      title: "Image Cropper",
      img5,
      items: [
        {
          text: "UI Elements",
          href: "/"
        },
        {
          text: "Image Cropper",
          active: true
        }
      ],
      imageUrl: img5, 
    };
  },
  methods: {
    zoom(percent) {
      this.$refs.cropper.relativeZoom(percent);
    },
    rotate(deg) {
      this.$refs.cropper.rotate(deg);
    },
    move(offsetX, offsetY) {
      this.$refs.cropper.move(offsetX, offsetY);
    },
    flipX() {
      const dom = this.$refs.flipX;
      let scale = dom.getAttribute("data-scale");
      scale = scale ? -scale : -1;
      this.$refs.cropper.scaleX(scale);
      dom.setAttribute("data-scale", scale);
    },
    flipY() {
      const dom = this.$refs.flipY;
      let scale = dom.getAttribute("data-scale");
      scale = scale ? -scale : -1;
      this.$refs.cropper.scaleY(scale);
      dom.setAttribute("data-scale", scale);
    },
    reset() {
      this.$refs.cropper.reset();
    }
  }
};
</script>

<template>
  <Layout>
    <PageHeader :title="title" :items="items" />
    <div class="row">
      <div class="col-xl-9">
        <div class="card">
          <div class="card-body">
            <vue-cropper ref="cropper" :src="imageUrl" alt="Source Image" preview=".preview-lg" />
            <div class="mt-2">
              <a href="#" class="btn btn-primary" @click.prevent="zoom(0.2)">Zoom In</a>
              <a href="#" class="btn btn-primary ms-1" @click.prevent="zoom(-0.2)">Zoom Out</a>
              <a href="#" class="btn btn-primary ms-1" @click.prevent="rotate(90)">Rotate +90deg</a>
              <a href="#" class="btn btn-primary ms-1" @click.prevent="rotate(-90)">Rotate -90deg</a>
              <a href="#" class="btn btn-primary ms-1" @click.prevent="move(-10, 0)">Move Left</a>
              <a href="#" class="btn btn-primary ms-1" @click.prevent="move(10, 0)">Move Right</a>
              <a href="#" class="btn btn-primary ms-1" @click.prevent="move(0, -10)">Move Up</a>
              <a href="#" class="btn btn-primary ms-1" @click.prevent="move(0, 10)">Move Down</a>
              <a ref="flipX" href="#" class="btn btn-primary ms-1" @click.prevent="flipX">Flip X</a>
              <a ref="flipY" href="#" class="btn btn-primary ms-1" @click.prevent="flipY">Flip Y</a>
              <a href="#" class="btn btn-primary ms-1" @click.prevent="reset">Reset</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="preview-lg"></div>
      </div>
    </div>
  </Layout>
</template>


<style scoped>
.preview-lg {
  width: 100%;
  height: calc(372px * (9 / 16));
  overflow: hidden;
}
</style>
