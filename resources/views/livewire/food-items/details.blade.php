<?php
use Livewire\Attributes\{Layout,Url};
use Livewire\Volt\Component;
use Vinkla\Hashids\Facades\HashId;
use App\Models\FoodItem;

new 
#[Layout('layouts.guest')] 
class extends Component
{

  #[Url]
  public $id;

  public function with(){
    $this->id = $this->id ? decode_id($this->id) : null;
    $food_item = FoodItem::find($this->id);
    $product_category = $food_item?->categories?->first()?->name ?? '';
    return [
      'food_item' => $food_item,
      'title' => $food_item ? $food_item->name : '',
      'product_category' => $product_category
    ];
  }
   
}; ?>

<div>
  @section('title', $title)
   
  <div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ route('welcome') }}">
            <i class="icon-home"></i>
          </a>
        </li>
        <li class="breadcrumb-item">
          <a href="{{ route('food-items.index') }}">Food Items</a>
        </li>
        <li class="breadcrumb-item">
          <a href="javascript:void(0)">{{ $product_category }}</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="javascript:void(0)">{{ $title }}</a>
        </li>
      </ol>
    </nav>
    <div class="product-single-container product-single-default">
      <div class="cart-message d-none">
        <strong class="single-cart-notice">“{{ $title }}”</strong>
        <span>has been added to your cart.</span>
      </div>
      <div class="row">
        <div class="col-lg-5 col-md-6 product-single-gallery">
          <div class="product-slider-container">
            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
              <div class="product-item">
                <img class="product-single-image" src="{{asset($food_item->image)}}" data-zoom-image="{{asset($food_item->image)}}" width="468" height="468" alt="product" />
              </div>
            </div>
            <!-- End .product-single-carousel -->
            <span class="prod-full-screen">
              <i class="icon-plus"></i>
            </span>
          </div>
          <div class="prod-thumbnail owl-dots">
            <div class="owl-dot">
              <img src="{{asset($food_item->image)}}" width="110" height="110" alt="product-thumbnail" />
            </div>
          </div>
        </div>
        <!-- End .product-single-gallery -->
        <div class="col-lg-7 col-md-6 product-single-details">
          <h1 class="product-title">{{ $title }}</h1>
          <div class="ratings-container">
            <div class="product-ratings">
              <span class="ratings" style="width:{{get_rating_percentage($food_item->rating)}}%"></span>
              <!-- End .ratings -->
              <span class="tooltiptext tooltip-top"></span>
            </div>
            <!-- End .product-ratings -->
            <a href="#" class="rating-link">( {{ $food_item?->reviews_count }} Reviews )</a>
          </div>
          <!-- End .ratings-container -->
          <hr class="short-divider">
          <div class="price-box">
            <span class="product-price"> {{ amount_format($food_item->price) }} </span>
          </div>
          <!-- End .price-box -->
          <div class="product-desc">
            <p> {{ $food_item->description }} </p>
          </div>
          <!-- End .product-desc -->
          <ul class="single-info-list">
            <!---->
            <li> SKU: <strong>{{ $food_item->sku }}</strong>
            </li>
            <li> CATEGORY: <strong>
                <a href="javascript:void(0)" class="product-category">{{ $product_category }}</a>
              </strong>
            </li>
          </ul>
          <div class="product-action">
            <div class="product-single-qty">
              <input class="horizontal-quantity form-control" type="text">
            </div>
            <!-- End .product-single-qty -->
            <a href="javascript:;" class="btn btn-dark add-cart mr-2" title="Add to Cart">Add to Cart</a>
            <a href="/cart" class="btn btn-gray view-cart d-none">View cart</a>
          </div>
          <!-- End .product-action -->
          <hr class="divider mb-0 mt-0">
          <div class="product-single-share mb-2">
            <label class="sr-only">Share:</label>
            <div class="social-icons mr-2">
              {{-- <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
              <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
              <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
              <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
              <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a> --}}
            </div>
            <!-- End .social-icons -->
            <a href="wishlist.html" class="btn-icon-wish add-wishlist" title="Add to Wishlist">
              <i class="icon-wishlist-2"></i>
              <span>Add to Wishlist</span>
            </a>
          </div>
          <!-- End .product single-share -->
        </div>
        <!-- End .product-single-details -->
      </div>
      <!-- End .row -->
    </div>
    <!-- End .product-single-container -->
    <div class="product-single-tabs">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews ({{ $food_item?->reviews_count }})</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
          <div class="product-desc-content">
            <p>{{ $food_item->description }}</p>
          </div>
          <!-- End .product-desc-content -->
        </div>
        <!-- End .tab-pane -->
        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
          <div class="product-reviews-content">
            <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>
            <div class="comment-list">
              <div class="comments">
                <figure class="img-thumbnail">
                  <img src="assets/images/blog/author.jpg" alt="author" width="80" height="80">
                </figure>
                <div class="comment-block">
                  <div class="comment-header">
                    <div class="comment-arrow"></div>
                    <div class="ratings-container float-sm-right">
                      <div class="product-ratings">
                        <span class="ratings" style="width:60%"></span>
                        <!-- End .ratings -->
                        <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <!-- End .product-ratings -->
                    </div>
                    <span class="comment-by">
                      <strong>Joe Doe</strong> – April 12, 2018 </span>
                  </div>
                  <div class="comment-content">
                    <p>Excellent.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="divider"></div>
            <div class="add-product-review">
              <h3 class="review-title">Add a review</h3>
              <form action="#" class="comment-form m-0">
                <div class="rating-form">
                  <label for="rating">Your rating <span class="required">*</span>
                  </label>
                  <span class="rating-stars">
                    <a class="star-1" href="#">1</a>
                    <a class="star-2" href="#">2</a>
                    <a class="star-3" href="#">3</a>
                    <a class="star-4" href="#">4</a>
                    <a class="star-5" href="#">5</a>
                  </span>
                  <select name="rating" id="rating" required="" style="display: none;">
                    <option value="">Rate…</option>
                    <option value="5">Perfect</option>
                    <option value="4">Good</option>
                    <option value="3">Average</option>
                    <option value="2">Not that bad</option>
                    <option value="1">Very poor</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Your review <span class="required">*</span>
                  </label>
                  <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                </div>
                <!-- End .form-group -->
                <div class="row">
                  <div class="col-md-6 col-xl-12">
                    <div class="form-group">
                      <label>Name <span class="required">*</span>
                      </label>
                      <input type="text" class="form-control form-control-sm" required>
                    </div>
                    <!-- End .form-group -->
                  </div>
                  <div class="col-md-6 col-xl-12">
                    <div class="form-group">
                      <label>Email <span class="required">*</span>
                      </label>
                      <input type="text" class="form-control form-control-sm" required>
                    </div>
                    <!-- End .form-group -->
                  </div>
                  <div class="col-md-12">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="save-name" />
                      <label class="custom-control-label mb-0" for="save-name">Save my name, email, and website in this browser for the next time I comment.</label>
                    </div>
                  </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
            </div>
            <!-- End .add-product-review -->
          </div>
          <!-- End .product-reviews-content -->
        </div>
        <!-- End .tab-pane -->
      </div>
      <!-- End .tab-content -->
    </div>
    <!-- End .product-single-tabs -->
    <div class="products-section pt-0">
      <h2 class="section-title">Related Products</h2>
      <div class="products-slider owl-carousel owl-theme dots-top">
        <div class="product-default inner-quickview inner-icon">
          <figure>
            <a href="demo41-product.html">
              <img src="assets/images/food/beans.png" width="300" height="300" alt="product">
            </a>
            <div class="label-group">
              <span class="product-label label-sale">-17%</span>
            </div>
            <div class="btn-icon-group">
              <a href="#" class="btn-icon btn-add-cart product-type-simple">
                <i class="icon-shopping-cart"></i>
              </a>
            </div>
            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
          </figure>
          <div class="product-details">
            <div class="category-wrap">
              <div class="category-list">
                <a href="#">Breakfast</a>, <a href="#">Cooking</a>
              </div>
              <a href="wishlist.html" class="btn-icon-wish" title="wishlist">
                <i class="icon-heart"></i>
              </a>
            </div>
            <h3 class="product-title">
              <a href="demo41-product.html">Product Short Name</a>
            </h3>
            <div class="ratings-container">
              <div class="product-ratings">
                <span class="ratings" style="width:0%"></span>
                <!-- End .ratings -->
                <span class="tooltiptext tooltip-top"></span>
              </div>
              <!-- End .product-ratings -->
            </div>
            <!-- End .product-container -->
            <div class="price-box">
              <del class="old-price">$59.00</del>
              <span class="product-price">$49.00</span>
            </div>
            <!-- End .price-box -->
          </div>
          <!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
          <figure>
            <a href="demo41-product.html">
              <img src="assets/images/food/rice.png" width="300" height="300" alt="product">
            </a>
            <div class="label-group">
              <span class="product-label label-sale">-17%</span>
            </div>
            <div class="btn-icon-group">
              <a href="#" class="btn-icon btn-add-cart product-type-simple">
                <i class="icon-shopping-cart"></i>
              </a>
            </div>
            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
          </figure>
          <div class="product-details">
            <div class="category-wrap">
              <div class="category-list">
                <a href="#">Fruits</a>
              </div>
              <a href="wishlist.html" class="btn-icon-wish" title="wishlist">
                <i class="icon-heart"></i>
              </a>
            </div>
            <h3 class="product-title">
              <a href="demo41-product.html">Product Short Name</a>
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
              <del class="old-price">$59.00</del>
              <span class="product-price">$49.00</span>
            </div>
            <!-- End .price-box -->
          </div>
          <!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
          <figure>
            <a href="demo41-product.html">
              <img src="assets/images/food/waakye.png" width="300" height="300" alt="product">
            </a>
            <div class="btn-icon-group">
              <a href="#" class="btn-icon btn-add-cart product-type-simple">
                <i class="icon-shopping-cart"></i>
              </a>
            </div>
            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
          </figure>
          <div class="product-details">
            <div class="category-wrap">
              <div class="category-list">
                <a href="#">Fruits</a>, <a href="#">Fruits & Vegetables</a>
              </div>
              <a href="wishlist.html" class="btn-icon-wish" title="wishlist">
                <i class="icon-heart"></i>
              </a>
            </div>
            <h3 class="product-title">
              <a href="demo41-product.html">Product Short Name</a>
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
              <span class="product-price">$23.00</span>
            </div>
            <!-- End .price-box -->
          </div>
          <!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
          <figure>
            <a href="demo41-product.html">
              <img src="assets/images/food/plantain.png" width="300" height="300" alt="product">
            </a>
            <div class="label-group">
              <span class="product-label label-sale">-17%</span>
            </div>
            <div class="btn-icon-group">
              <a href="#" class="btn-icon btn-add-cart product-type-simple">
                <i class="icon-shopping-cart"></i>
              </a>
            </div>
            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
          </figure>
          <div class="product-details">
            <div class="category-wrap">
              <div class="category-list">
                <a href="#">Bakery</a>, <a href="#">Bread & Bakery</a>, <a href="#">Breakfast</a>, <a href="#">Frozen</a>, <a href="#">Party Supplies & Crafts</a>
              </div>
              <a href="wishlist.html" class="btn-icon-wish" title="wishlist">
                <i class="icon-heart"></i>
              </a>
            </div>
            <h3 class="product-title">
              <a href="demo41-product.html">Product Short Name</a>
            </h3>
            <div class="ratings-container">
              <div class="product-ratings">
                <span class="ratings" style="width:0%"></span>
                <!-- End .ratings -->
                <span class="tooltiptext tooltip-top"></span>
              </div>
              <!-- End .product-ratings -->
            </div>
            <!-- End .product-container -->
            <div class="price-box">
              <del class="old-price">$59.00</del>
              <span class="product-price">$49.00</span>
            </div>
            <!-- End .price-box -->
          </div>
          <!-- End .product-details -->
        </div>
        <div class="product-default inner-quickview inner-icon">
          <figure>
            <a href="demo41-product.html">
              <img src="assets/images/food/kenkey.png" width="300" height="300" alt="product">
            </a>
            <div class="label-group">
              <span class="product-label label-sale">-50%</span>
            </div>
            <div class="btn-icon-group">
              <a href="#" class="btn-icon btn-add-cart product-type-simple">
                <i class="icon-shopping-cart"></i>
              </a>
            </div>
            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
          </figure>
          <div class="product-details">
            <div class="category-wrap">
              <div class="category-list">
                <a href="#">Bakery</a>, <a href="#">Bread</a>, <a href="#">Bread & Bakery</a>, <a href="#">Breakfast</a>, <a href="#">Frozen</a>
              </div>
              <a href="wishlist.html" class="btn-icon-wish" title="wishlist">
                <i class="icon-heart"></i>
              </a>
            </div>
            <h3 class="product-title">
              <a href="demo41-product.html">Product Short Name</a>
            </h3>
            <div class="ratings-container">
              <div class="product-ratings">
                <span class="ratings" style="width:0%"></span>
                <!-- End .ratings -->
                <span class="tooltiptext tooltip-top"></span>
              </div>
              <!-- End .product-ratings -->
            </div>
            <!-- End .product-container -->
            <div class="price-box">
              <del class="old-price">$22.00</del>
              <span class="product-price">$11.00</span>
            </div>
            <!-- End .price-box -->
          </div>
          <!-- End .product-details -->
        </div>
      </div>
      <!-- End .products-slider -->
    </div>
    <!-- End .products-section -->
  </div>
  <!-- End .container -->
  
  @livewire('includes.subscribe')
</div>
