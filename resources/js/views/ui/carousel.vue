<script>
import Layout from '../../layouts/main.vue'
import PageHeader from '../../components/page-header.vue'

import img1 from '../../../images/small/img-1.jpg';
import img2 from '../../../images/small/img-2.jpg';
import img3 from '../../../images/small/img-3.jpg';
import img4 from '../../../images/small/img-4.jpg';
import img5 from '../../../images/small/img-5.jpg';
import img6 from '../../../images/small/img-6.jpg';
import img7 from '../../../images/small/img-7.jpg';

/**
 * Carousel component
 */
export default {
    components: { Layout, PageHeader },
    data() {
        return {
            img1, img2, img3, img4, img5, img6, img7,
            title: 'Carousel',
            items: [
                {
                    text: 'UI Elements',
                    href: '/',
                },
                {
                    text: 'Carousel',
                    active: true,
                },
            ],
            slide: 0,
            slide1: 0,
            sliding: null,
        }
    },
}
</script>

<template>
    <Layout>
        <PageHeader :title="title" :items="items" />
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Slides only</h4>
                        <p class="card-title-desc">Here’s a carousel with slides only.
                            Note the presence of the <code>.d-block</code>
                            and <code>.img-fluid</code> on carousel images
                            to prevent browser default image alignment.</p>

                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="3000">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" :src="img1" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" :src="img2" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" :src="img3" alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">With controls</h4>
                        <p class="card-title-desc">Adding in the previous and next controls:</p>

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" :src="img4" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" :src="img5" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" :src="img6" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">With indicators</h4>
                        <p class="card-title-desc">You can also add the indicators to the
                            carousel, alongside the controls, too.</p>

                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" :src="img3" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" :src="img2" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" :src="img1" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">With captions</h4>
                        <p class="card-title-desc">Add captions to your slides easily with the
                            <code>.carousel-caption</code> element within any <code>.carousel-item</code>.
                        </p>

                        <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img :src="img7" alt="..." class="d-block img-fluid">
                                    <div class="carousel-caption d-none d-md-block text-white-50">
                                        <h5 class="text-white">First slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img :src="img5" alt="..." class="d-block img-fluid">
                                    <div class="carousel-caption d-none d-md-block text-white-50">
                                        <h5 class="text-white">Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img :src="img4" alt="..." class="d-block img-fluid">
                                    <div class="carousel-caption d-none d-md-block text-white-50">
                                        <h5 class="text-white">Third slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaption" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaption" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Crossfade</h4>
                        <p class="card-title-desc">Add <code>.carousel-fade</code> to your carousel to animate slides with a
                            fade transition instead of a slide.</p>
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" :src="img1" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" :src="img2" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" :src="img3" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Individual <code>.carousel-item</code> interval</h4>
                        <p class="card-title-desc">Add <code>data-bs-interval=""</code> to a <code>.carousel-item</code> to
                            change the amount of time to delay between automatically cycling to the next item.</p>

                        <div id="carouselExampleInterval" class="carousel slide" data-bs-touch="true"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img :src="img2" class="d-block w-100" alt="First slide">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img :src="img1" class="d-block w-100" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img :src="img3" class="d-block w-100" alt="Third slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Dark variant</h4>
                            <p class="card-title-desc">Add <code>.carousel-dark</code> to the <code>.carousel</code> for
                                darker controls, indicators, and captions. Controls have been inverted from their default
                                white fill with the <code>filter</code> CSS property. Captions and controls have additional
                                Sass variables that customize the <code>color</code> and <code>background-color</code>.</p>

                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img :src="img6" class="d-block w-100" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img :src="img5" class="d-block w-100" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img :src="img4" class="d-block w-100" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                    </div>
                </div>
            </div><!--end col-->
        </div>
        <!-- end row -->
    </div>
    <!-- end row -->
</Layout></template>