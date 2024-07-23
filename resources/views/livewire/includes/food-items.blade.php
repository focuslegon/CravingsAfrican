<?php
use Livewire\Attributes\{Layout,Url,On};
use Livewire\Volt\Component;
use App\Models\Category;
use App\Models\FoodItem;
use Vinkla\Hashids\Facades\Hashids;

new 
class extends Component
{

  #[Url]
  public $category;
  public $food_items;
  public $food_category_id;
  public $isFirstTime=true;
  public $search='';

  public function mount(FoodItem $food_items) {
    $this->food_category_id = $this->category ? Hashids::decode($this->category)[0] : null;
    $this->food_items = $food_items;
  }

  #[On('changeCategory')]
  public function changeCategory($id) {
    $this->isFirstTime = false;
    $this->food_category_id = $id;
  }

  #[On('searchFoodItem')]
  public function searchFoodItem($search) {
    $this->search = $search;
    $this->isFirstTime = false;
  }

  public function with(){
    $food_categories = Category::where('status', 'active')
                                ->when($this->search, function($q) {
                                  return $q->where('name', 'like', '%'.$this->search.'%')
                                      ->orWhereHas('foodItems', function($q) {
                                          return $q->where('name', 'like', '%'.$this->search.'%')
                                                  ->orWhere('description', 'like', '%'.$this->search.'%')
                                                  ->orWhere('tags', 'like', '%'.$this->search.'%');
                                          });
                                })
                                ->when($this->food_category_id, fn($q) => $q->where('id', $this->food_category_id))
                                ->orderBy('order')
                                ->get();
              return [
                'food_categories' => $food_categories,
              ];
            
  }
   
}; ?>

<div>
   <x-loader />
    @forelse ($food_categories as $food_category)
    <h4 class="{{$isFirstTime ? 'appear-animate':''}} text-danger" data-animation-name="fadeInUpShorter" data-animation-delay="300">{{ $food_category->name }}</h4>
        <div class="row {{$isFirstTime ? 'appear-animate':''}} rated-products" id="menu">

          @php
            $food_itemsArray = $food_category?->foodItems?->pluck('id')?->toArray()??[];
            $food_itemsData = $food_items->whereIn('id', $food_itemsArray)
                    ->when($this->search, function($q) {
                      return $q->where('name', 'like', '%'.$this->search.'%')
                              ->orWhere('description', 'like', '%'.$this->search.'%')
                              ->orWhere('tags', 'like', '%'.$this->search.'%');
                    })->get();
          @endphp
          @forelse ($food_itemsData as $key => $foodItem)
          <div class="col-6 col-sm-4 col-md-3 col-xl-5col">
            <div class="product-default inner-quickview inner-icon">
              <figure>
                <a href="{{ route('food-items.details', encode_id($foodItem->id)) }}">
                  <img src="{{ asset($foodItem->image) }}" width="300" height="300" alt="{{ $foodItem->name }}">
                </a>
                <div class="btn-icon-group">
                  <a href="javascript:void(0)" class="btn-icon btn-add-cart product-type-simple">
                    <i class="icon-shopping-cart"></i>
                  </a>
                </div>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#food{{$key }}" class="btn-quickview">Quick View</a>
              </figure>
              <div class="product-details">
                <div class="category-wrap">
                  <div class="category-list">
                    <a href="javascript:void(0)">{{ $food_category->name }}</a>
                    <a href="javascript:void(0)"></a>
                  </div>
                  <a href="javascript:void(0)" class="btn-icon-wish" title="wishlist">
                    <i class="icon-heart"></i>
                  </a>
                </div>
                <h3 class="product-title">
                  <a href="{{ route('food-items.details', encode_id($foodItem->id)) }}">{{ $foodItem->name }}</a>
                </h3>
                <div class="ratings-container">
                  <div class="product-ratings">
                    <span class="ratings" style="width:{{get_rating_percentage($foodItem->rating)}}%"></span>
                    <!-- End .ratings -->
                    <span class="tooltiptext tooltip-top"></span>
                  </div>
                  <!-- End .product-ratings -->
                </div>
                <!-- End .product-container -->
                <div class="price-box">
                  <span class="product-price">{{ amount_format($foodItem->price) }}</span>
                </div>
                <!-- End .price-box -->
              </div>
              <!-- End .product-details -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="food{{$key }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="product-single-container product-single-default product-quick-view mb-0 custom-scrollbar">
                      <div class="row">
                        <div class="col-md-6 product-single-gallery mb-md-0">
                          <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                              <div class="product-item">
                                <img class="product-single-image" src="{{ asset($foodItem->image) }}" data-zoom-image="{{ asset($foodItem->image) }}" />
                              </div>
                            </div>
                            <!-- End .product-single-carousel -->
                          </div>
                        </div>
                        <!-- End .product-single-gallery -->
                        <div class="col-md-6">
                          <div class="product-single-details mb-0 ml-md-4">
                            <h1 class="product-title">{{ $foodItem->name }}</h1>
                            <hr class="short-divider">
                            <div class="price-box">
                              <span class="product-price"> {{ amount_format($foodItem->price) }} </span>
                            </div>
                            <!-- End .price-box -->
                            <div class="product-desc">
                              <p> {{ $foodItem->description }} </p>
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
          @empty
          @endforelse

        </div>
    @empty
    @endforelse
</div>