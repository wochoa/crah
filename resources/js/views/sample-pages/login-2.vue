<script>
import logoDark from '../../../images/logo-dark.png';
import logoLight from '../../../images/logo-light.png';

export default {
  data() {
    return {
      slide: 0,
      sliding: null,
      logoDark, logoLight
    };
  },
  components: {},
  methods: {
    onSlideStart(slide) {
      this.sliding = true
    },
    onSlideEnd(slide) {
      this.sliding = false
    }
  },
  mounted() {
    document.body.classList.add("auth-body-bg");
  },
};
</script>

<template>
  <div>
    <div class="container-fluid p-0">
      <div class="row g-0">
        <div class="col-xl-9">
          <div class="auth-full-bg pt-lg-5 p-4">
            <div class="w-100">
              <div class="bg-overlay"></div>
              <div class="d-flex h-100 flex-column">
                <div class="p-4 mt-auto">
                  <div class="row justify-content-center">
                    <div class="col-lg-7">
                      <div class="text-center">
                        <h4 class="mb-3">
                          <i class="bx bxs-quote-alt-left text-primary h1 align-middle mr-3"></i><span
                            class="text-primary">5k</span>+ Satisfied
                          clients
                        </h4>

                        <div dir="ltr" class="owl-theme">
                          <b-carousel id="carousel-1" v-model="slide" :interval="4000" indicators
                            @sliding-start="onSlideStart" @sliding-end="onSlideEnd">
                            <b-carousel-slide>
                              <p class="font-size-16 mb-4">
                                " Fantastic theme with a ton of options. If you
                                just want the HTML to integrate with your
                                project, then this is the package.
                                documentation talks about. "
                              </p>
                              <div>
                                <h4 class="font-size-16 text-primary">
                                  Abs1981
                                </h4>
                                <p class="font-size-14 mb-0">- Skote User</p>
                              </div>
                            </b-carousel-slide>
                            <b-carousel-slide>
                              <p class="font-size-16 mb-4">
                                " If Every Vendor on Envato are as supportive as
                                Themesbrand, Development with be a nice
                                experience. You guys are Wonderful. Keep us the
                                good work. "
                              </p>
                              <div>
                                <h4 class="font-size-16 text-primary">
                                  nezerious
                                </h4>
                                <p class="font-size-14 mb-0">- Skote User</p>
                              </div>
                            </b-carousel-slide>
                          </b-carousel>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end col -->

        <div class="col-xl-3">
          <div class="auth-full-page-content p-md-5 p-4">
            <div class="w-100">
              <div class="d-flex flex-column h-100">
                <div class="mb-4 mb-md-5">
                  <a href="/" class="d-block auth-logo">
                    <img :src="logoDark" alt="" height="18" class="auth-logo-dark" />
                    <img :src="logoLight" alt="" height="18" class="auth-logo-light" />
                  </a>
                </div>
                <div class="my-auto">
                  <div>
                    <h5 class="text-primary">Welcome Back !</h5>
                    <p class="text-muted">Sign in to continue to Skote.</p>
                  </div>

                  <div class="mt-4">
                    <form>
                      <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" />
                      </div>

                      <div class="mb-3">
                        <div class="float-end">
                          <a href="/auth/recoverpwd-2" class="text-muted">Forgot password?</a>
                        </div>
                        <label for="userpassword">Password</label>
                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password" />
                      </div>

                      <b-form-checkbox id="customControlInline" name="checkbox-1" value="accepted"
                        unchecked-value="not_accepted">
                        Remember me
                      </b-form-checkbox>
                      <div class="mt-3 d-grid">
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                          Log In
                        </button>
                      </div>

                      <div class="mt-4 text-center">
                        <h5 class="font-size-14 mb-3">Sign in with</h5>

                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                              <i class="mdi mdi-facebook"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                              <i class="mdi mdi-twitter"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                              <i class="mdi mdi-google"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </form>
                    <div class="mt-5 text-center">
                      <p>
                        Don't have an account ?
                        <a href="/auth/register-2" class="fw-medium text-primary">
                          Signup now
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="mt-4 mt-md-5 text-center">
                  <p class="mb-0">
                    ©
                    {{ new Date().getFullYear() }}; Skote. Crafted with
                    <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container-fluid -->
  </div>
</template>

<style lang="scss" scoped>
:deep(.carousel-caption) {
  position: relative !important;
  right: 0;
  bottom: 1.25rem;
  left: 0;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #495057;
  text-align: center;
}

:deep(.carousel-indicators li) {
  background-color: rgba(85, 110, 230, 0.25);
}

.carousel-item {
  background: none !important;
}
</style>