<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new 
#[Layout('layouts.guest')] 
class extends Component
{
   
}; ?>

<div>
  

    <div class="intro-slider" style="background-color: #ececec;">
        <div class="container slide-animate owl-carousel owl-theme show-nav-hover nav-big" data-owl-options="{
                              'loop': true,
                              'nav': true,
                              'dots': false,
                              'autoplay': true,
                              'autoplayTimeout': 5000,
                              'autoplayHoverPause': true
                      }">
          <div class="intro-slide1 banner">
            <div class="row">
              <div class="col-lg-12 order-0 order-lg-1">
                <figure class="banner-media">
                  <img class="main_img" src="assets/images/banners/slide.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="100%" height="100%" alt="intro-banner" />
                </figure>
              </div>
            </div>
          </div>
          <div class="intro-slide2 banner">
            <div class="row">
              <div class="col-lg-12 order-0 order-lg-1">
                <figure class="banner-media">
                  <img class="main_img" src="assets/images/banners/slide2.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="100%" height="100%" alt="intro-banner" />
                </figure>
              </div>
            </div>
          </div>
          <div class="intro-slide3 banner">
            <div class="row">
              <div class="col-lg-12 order-0 order-lg-1">
                <figure class="banner-media">
                  <img class="main_img" src="assets/images/banners/slide5.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="100%" height="100%" alt="intro-banner" />
                </figure>
              </div>
            </div>
          </div>
          <div class="intro-slide3 banner">
            <div class="row">
              <div class="col-lg-12 order-0 order-lg-1">
                <figure class="banner-media">
                  <img class="main_img" src="assets/images/banners/slide6.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="100%" height="100%" alt="intro-banner" />
                </figure>
              </div>
            </div>
          </div>
          <!-- <div class="intro-slide2 banner"><div class="row"><div class="col-lg-6"><figure class="banner-media position-relative"><img class="main_img" src="assets/images/food/plantain.png" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="297" height="273" alt="intro-banner" /></figure></div><div class="col-lg-6"><div class="banner-layer banner-layer-middle position-relative pb-3"><h2 class="banner-title font-weight-bold appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">Eat Whatever
                                          </h2><h2 class="banner-desc text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300">You Are Craving!</h2><p class="text-right appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="700">All The Combos You Can Have.</p></div></div></div></div><div class="intro-slide2 banner"><div class="row"><div class="col-lg-6"><figure class="banner-media position-relative"><img class="main_img" src="assets/images/food/jollof.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="200" height="200" alt="intro-banner" /></figure></div><div class="col-lg-6"><div class="banner-layer banner-layer-middle position-relative pb-3"><h2 class="banner-title font-weight-bold appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">I AM YOURS
                                          </h2><h2 class="banner-desc text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300">FOR JUST £9.99</h2></div></div></div></div><div class="intro-slide2 banner"><div class="row"><div class="col-lg-6"><figure class="banner-media position-relative"><img class="main_img" src="assets/images/food/waakye2.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="200" height="200" alt="intro-banner" /></figure></div><div class="col-lg-6"><div class="banner-layer banner-layer-middle position-relative pb-3"><h2 class="banner-title font-weight-bold appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">GET BELLY FULL
                                          </h2><h2 class="banner-desc text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300">@ £9.99</h2></div></div></div></div> -->
        </div>
      </div>
      <!-- End .intro-slider -->
      <section class="product-section container">
        <span class="inline-title appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300" style="margin-bottom: -10px;">Drinks</span>
        <div class="divider"></div>
        <div class="product-banner banner">
          <div class="row justify-content-center mx-0">
            <img src="assets/images/banners/drinks.jpg" class="appear-animate" data-animation-delay="200" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="100%" height="270" alt="banner" />
            <!-- <div class="col-lg-4 py-6 banner-content"><h4 class="banner-subtitle font-weight-normal text-right appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="100">SOFT FLAVOR</h4><h3 class="banner-title font-weight-bold appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">Fresh Cola</h3><p class="banner-desc appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="300">SODA DRINK</p></div><div class="col-lg-4"><img src="assets/images/demoes/demo41/banner/banner-3.jpg" class="appear-animate" data-animation-delay="200" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="364" height="270" alt="banner" /></div><div class="col-lg-4 py-6 banner-price" style="z-index: 1;"><h2 class="up-to text-right mb-0 pb-2 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200"><sup class="font-weight-bold">ONLY</sup><strong>£0,99</strong></h2></div> -->
          </div>
        </div>
        <span class="inline-title appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300">Menu</span>
        <div class="divider"></div>
        <h4 class="appear-animate text-danger" data-animation-name="fadeInUpShorter" data-animation-delay="300">Starter</h4>
        <div class="row appear-animate rated-products" id="menu">
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/kebab.webp" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#kebab" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list">
                    <a href="#">Starter</a>
                    <a href="#"></a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Kebab</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£4.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="kebab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/kebab.webp" data-zoom-image="assets/images/food/kebab.webp" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Kebab</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £4.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Grilled chevon/beef/chicken </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/friedchicken.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#wings" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list">
                    <a href="#">Wings</a>, <a href="#">Thigh, Drumsticks</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Fried Chicken</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£3.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="wings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/friedchicken.jpg" data-zoom-image="assets/images/food/friedchicken.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Fried Chicken</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £3.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Fried chicken thighs, wings and drumsticks </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/chofi.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#chofi" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list">
                    <a href="#">Starter</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Chofi</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£4.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="chofi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/chofi.jpg" data-zoom-image="assets/images/food/chofi.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Chofi</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £4.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Fried/grilled turkey tail </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/kelewele.jpeg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#kele" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list">
                    <a href="#">Starter</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Kelewele</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£5.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="kele" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/kelewele.jpeg" data-zoom-image="assets/images/food/kelewele.jpeg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Kelewele</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £5.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Spicy Fried Plantains </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/springrolls.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#spring" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list">
                    <a href="#">Starter</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Spring Rolls</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£3.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="spring" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/springrolls.jpg" data-zoom-image="assets/images/food/springrolls.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Spring Rolls</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £3.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Spring Rolls stuffed with chicken/beef/fish. </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <h4 class="appear-animate text-danger" data-animation-name="fadeInUpShorter" data-animation-delay="300">OUR 5✯ MEALS</h4>
        <div class="row appear-animate rated-products">
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/jollof.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#jollof" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Jollof Rice</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£9.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="jollof" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/jollof.jpg" data-zoom-image="assets/images/food/jollof.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Jollof Rice</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £9.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Jollof Rice with chicken/fish </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/kenkey.png" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#kenkey" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Kenkey with Red Snapper Fish & Shrimps</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£9.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="kenkey" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/kenkey.png" data-zoom-image="assets/images/food/kenkey.png" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Kenkey with Red Snapper Fish & Shrimps</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £9.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Boiled corn dough with fried fish/shrimps and hot pepper </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/waakye2.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#waakye" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Waakye</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£10.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="waakye" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/waakye2.jpg" data-zoom-image="assets/images/food/waakye2.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Waakye</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £10.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Rice and Beans with assorted accompaniments </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/friedyam_chofi.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#chofyam" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Fried Yam with Chofi & Hot Pepper</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£12.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="chofyam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/friedyam_chofi.jpg" data-zoom-image="assets/images/food/friedyam_chofi.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Fried Yam with Chofi & Hot Pepper</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £12.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Fried yam with turkey tail and hot pepper </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/beans.png" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#beans" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Red Red Ghana (Gobe)</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£8.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="beans" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/beans.png" data-zoom-image="assets/images/food/beans.png" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Red Red Ghana (Gobe)</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £8.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Beans sauce with fried plantain </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/banku-and-okra.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#okro" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Banku with Okro Stew</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£13.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="okro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/banku-and-okra.jpg" data-zoom-image="assets/images/food/banku-and-okra.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Banku with Okro Stew</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £13.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Banku with Okro Stew </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/tilapia.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#tilapia" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Banku with Tilapia (Large)</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£15.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="tilapia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/tilapia.jpg" data-zoom-image="assets/images/food/tilapia.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Banku with Tilapia (Large)</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £15.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Banku with grilled tilapia fish </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/yam.png" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#palava" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Boiled Yam with Palava Sauce</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£10.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="palava" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/yam.png" data-zoom-image="assets/images/food/yam.png" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Boiled Yam with Palava Sauce</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £10.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Slices of Boiled Yam with Palava Sauce </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/boiledyam_gardeneggs.webp" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#eggs" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Boiled Yam with Garden Eggs Stew</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£11.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="eggs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/boiledyam_gardeneggs.webp" data-zoom-image="assets/images/food/boiledyam_gardeneggs.webp" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Boiled Yam with Garden Eggs Stew</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £11.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Slices of boiled yam with Garden Eggs Stew </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/fufu_lightsoup.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#lightsoup" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                    <a href="#"></a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Fufu with Light Soup</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£13.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="lightsoup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/fufu_lightsoup.jpg" data-zoom-image="assets/images/food/fufu_lightsoup.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Fufu with Light Soup</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £13.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Pounded cassave and plantain with hot pepper soup </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/Fufu-and-palmnut-Soup-1.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#palmnut" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Fufu with Palmnut Soup</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£13.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="palmnut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/Fufu-and-palmnut-Soup-1.jpg" data-zoom-image="assets/images/food/Fufu-and-palmnut-Soup-1.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Fufu with Palmnut Soup</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £13.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Pounded cassave and plantain with palmnut soup </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/tz2.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#tz" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list sunday">
                    <a href="#">Sunday Special</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Tuozafi Special</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£13.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="tz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/tz2.jpg" data-zoom-image="assets/images/food/tz2.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Tuozafi Special</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £13.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> SPecially made Tuo-zaafi with indigenous soup </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="#.">
                  <img src="assets/images/food/riceballs.jpg" width="300" height="300" alt="product">
                </a>
                <div class="btn-icon-group">
                  <a href="#" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="" data-toggle="modal" data-target="#omotuo" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list daily">
                    <a href="#">Daily Meal</a>
                  </div>
                  <a href="#." class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="#.">Omotuo Special</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:100%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">£10.99</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="omotuo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="assets/images/food/riceballs.jpg" data-zoom-image="assets/images/food/riceballs.jpg" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">Omotuo Special</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> £10.99</span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> Rice Balls with any Soup of your choice (Peanut/Palmnut/Lightsoup) </p>
                            </div>
                            <!-- End .product-desc -->
                          </div>
                        </div>
                        <!-- End .product-single-details -->
                        <button title="Close (Esc)" type="button" class="mfp-close" data-dismiss="modal"> × </button>
                      </div>
                      <!-- End .row -->
                    </div>
                    <!-- End .product-single-container -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End .product-section -->
      <section class="category-section container appear-animate">
        <div class="owl-carousel owl-theme" data-owl-options="{
                          'dots': true,
                          'nav': false,
                          'loop': false,
                          'margin': 20,
                          'responsive': {
                              '0': {
                                  'items': 1
                              },
                              '576': {
                                  'items': 2
                              },
                              '767': {
                                  'items': 3
                              }
                          }
                      }">
          <div class="product-category content-left-center">
            <a href="#.">
              <figure>
                <img src="assets/images/demoes/demo41/category/community.jpg" width="393" height="200" alt="category" />
              </figure>
              <div class="category-content">
                <h3>Charity Projects</h3>
                <span>Giving back to <br> the community is <br> our priority </span>
              </div>
            </a>
          </div>
          <div class="product-category content-left-center">
            <a href="#.">
              <figure>
                <img src="assets/images/demoes/demo41/category/category-1.jpg" width="393" height="200" alt="category" />
              </figure>
              <div class="category-content">
                <h3>Become a Partner</h3>
                <span>Register Your Restaurant <br> With Us </span>
              </div>
            </a>
          </div>
          <div class="product-category content-left-center">
            <a href="#.">
              <figure>
                <img src="assets/images/demoes/demo41/category/category-2.jpg" width="393" height="200" alt="category" />
              </figure>
              <div class="category-content">
                <h3>Mama's Bowl</h3>
                <span>Order specific amounts of <br>food based on your prefernce. </span>
              </div>
            </a>
          </div>
        </div>
      </section>
      <!-- End .category-section -->
      @livewire('includes.subscribe')


</div>
