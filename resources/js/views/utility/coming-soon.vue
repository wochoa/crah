<script>

import logoDark from '../../../images/logo-dark.png';
import logoLight from '../../../images/logo-light.png'
import coming from '../../../images/coming-soon.svg'

/**
 * Maintenance component
 */
export default {
  data() {
    return {
      start: "",
      end: "",
      interval: "",
      days: "",
      minutes: "",
      hours: "",
      seconds: "",
      starttime: "Mar 23, 2023 15:37:25",
      endtime: "Dec 31, 2025 16:37:25",
      logoDark, logoLight, coming
    };
  },
  created() {
    window.addEventListener("scroll", this.windowScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.windowScroll);
  },
  mounted() {
    this.start = new Date(this.starttime).getTime();
    this.end = new Date(this.endtime).getTime();
    // Update the count down every 1 second
    this.timerCount(this.start, this.end);
    this.interval = setInterval(() => {
      this.timerCount(this.start, this.end);
    }, 1000);
  },
  methods: {
    timerCount: function (start, end) {
      // Get todays date and time
      var now = new Date().getTime();
      
      // Find the distance between now an the count down date
      var distance = start - now;
      var passTime = end - now;
      
      if (distance < 0 && passTime < 0) {
        clearInterval(this.interval);
        return;
      } else if (distance < 0 && passTime > 0) {
        this.calcTime(passTime);
      } else if (distance > 0 && passTime > 0) {
        this.calcTime(distance);
      }
    },
    calcTime: function (dist) {
      // Time calculations for days, hours, minutes and seconds
      this.days = Math.floor(dist / (1000 * 60 * 60 * 24));
      this.hours = Math.floor(
        (dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      this.minutes = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
      this.seconds = Math.floor((dist % (1000 * 60)) / 1000);
    },
  },
  page: {
    title: "coming-soon",
    meta: [
      {
        name: "description",
      },
    ],
  },
};
</script>
<template>
  <div>
    <div class="home-btn d-none d-sm-block">
      <a href="/" class="text-dark">
        <i class="fas fa-home h2"></i>
      </a>
    </div>
    <section class="my-5 pt-sm-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <a href="/" class="d-block auth-logo">
                <img
                  :src="logoDark"
                  alt=""
                  height="20"
                  class="auth-logo-dark mx-auto"
                />
                <img
                  :src="logoLight"
                  alt=""
                  height="20"
                  class="auth-logo-light mx-auto"
                />
              </a>
              <div class="row justify-content-center mt-5">
                <div class="col-sm-4">
                  <div class="maintenance-img">
                    <img
                      :src="coming"
                      alt=""
                      class="img-fluid mx-auto d-block"
                    />
                  </div>
                </div>
              </div>
              <h4 class="mt-5">Let's get started with Skote</h4>
              <p class="text-muted">
                It will be as simple as Occidental in fact it will be
                Occidental.
              </p>

              <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                  <div
                    data-countdown="2020/12/31"
                    class="counter-number ico-countdown"
                  >
                    <div class="coming-box">
                      {{ days }}
                      <span>Days</span>
                    </div>
                    <div class="coming-box">
                      {{ hours }}
                      <span>Hours</span>
                    </div>
                    <div class="coming-box">
                      {{ minutes }}
                      <span>Minutes</span>
                    </div>
                    <div class="coming-box">
                      {{ seconds }}
                      <span>Seconds</span>
                    </div>
                  </div>
                </div>
                <!-- end col-->
              </div>
              <!-- end row-->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
