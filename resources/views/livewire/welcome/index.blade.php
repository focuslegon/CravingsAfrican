<?php
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Slider;
use App\Models\Banner;
use App\Models\Category;

new 
#[Layout('layouts.guest')] 
class extends Component
{

  public function with(){
    $sliders = Slider::where('status', 'active')->orderBy('order')->get();
    $banners = Banner::where('status', 'active')->orderBy('order')->get();
    $food_categories = Category::where('status', 'active')->orderBy('order')->get();
    return [
      'sliders' => $sliders,
      'banners' => $banners,
      'food_categories' => $food_categories,
    ];
  }
   
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
         @forelse ($sliders as $slider)
         <div class="intro-slide1 banner">
          <div class="row">
            <div class="col-lg-12 order-0 order-lg-1">
              <figure class="banner-media">
                <img class="main_img" src="{{asset($slider->image)}}" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="100%" height="100%" alt="intro-banner" />
              </figure>
            </div>
          </div>
        </div>
         @empty

         <div class="intro-slide1 banner">
          <div class="row">
            <div class="col-lg-12 order-0 order-lg-1">
              <figure class="banner-media">
                <img class="main_img" src="/assets/images/banners/slide.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="100%" height="100%" alt="intro-banner" />
              </figure>
            </div>
          </div>
        </div>
             
         @endforelse
          
         
           {{-- <div class="intro-slide2 banner"><div class="row"><div class="col-lg-6"><figure class="banner-media position-relative"><img class="main_img" src="assets/images/food/plantain.png" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="297" height="273" alt="intro-banner" /></figure></div><div class="col-lg-6"><div class="banner-layer banner-layer-middle position-relative pb-3"><h2 class="banner-title font-weight-bold appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">Eat Whatever
                                          </h2><h2 class="banner-desc text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300">You Are Craving!</h2><p class="text-right appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="700">All The Combos You Can Have.</p></div></div></div></div><div class="intro-slide2 banner"><div class="row"><div class="col-lg-6"><figure class="banner-media position-relative"><img class="main_img" src="assets/images/food/jollof.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="200" height="200" alt="intro-banner" /></figure></div><div class="col-lg-6"><div class="banner-layer banner-layer-middle position-relative pb-3"><h2 class="banner-title font-weight-bold appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">I AM YOURS
                                          </h2><h2 class="banner-desc text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300">FOR JUST £9.99</h2></div></div></div></div><div class="intro-slide2 banner"><div class="row"><div class="col-lg-6"><figure class="banner-media position-relative"><img class="main_img" src="assets/images/food/waakye2.jpg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="200" height="200" alt="intro-banner" /></figure></div><div class="col-lg-6"><div class="banner-layer banner-layer-middle position-relative pb-3"><h2 class="banner-title font-weight-bold appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="200">GET BELLY FULL
                                          </h2><h2 class="banner-desc text-uppercase appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300">@ £9.99</h2></div></div></div></div>  --}}
        </div>
      </div>
      <!-- End .intro-slider -->
      <section class="product-section container">

        @forelse ($banners as $banner)
        <span class="inline-title appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300" style="margin-bottom: -10px;">{{ucfirst($banner->name)}}</span>
        <div class="divider"></div>
        <div class="product-banner banner">
          <div class="row justify-content-center mx-0">
            <img src="{{asset($banner->image)}}" class="appear-animate" data-animation-delay="200" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="100%" height="270" alt="banner" />
            
            {{-- <div class="col-lg-4 py-6 banner-content"><h4 class="banner-subtitle font-weight-normal text-right appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="100">SOFT FLAVOR</h4><h3 class="banner-title font-weight-bold appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="200">Fresh Cola</h3><p class="banner-desc appear-animate" data-animation-name="fadeInRightShorter" data-animation-delay="300">SODA DRINK</p></div><div class="col-lg-4"><img src="assets/images/demoes/demo41/banner/banner-3.jpg" class="appear-animate" data-animation-delay="200" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 9.8, 'transition': true, 'horizontal':false,'transitionDuration':1000}" width="364" height="270" alt="banner" /></div><div class="col-lg-4 py-6 banner-price" style="z-index: 1;"><h2 class="up-to text-right mb-0 pb-2 appear-animate" data-animation-name="fadeInLeftShorter" data-animation-delay="200"><sup class="font-weight-bold">ONLY</sup><strong>£0,99</strong></h2></div>  --}}
          </div>
        </div>
               
        @empty
            
        @endforelse



        <span class="inline-title appear-animate" data-animation-name="fadeInUpShorter" data-animation-delay="300">
          <span>Menu</span> 
          <a href="{{route('food-items.index')}}" class="float-right">View All</a></span>
        <div class="divider"></div>

        @livewire('includes.food-items')
        
        
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
