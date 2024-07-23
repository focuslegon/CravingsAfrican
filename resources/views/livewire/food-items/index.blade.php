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
    $this->id = $this->id ? HashId::decode($this->id)[0] : null;
    $food_item = FoodItem::find($this->id);
    return [
      'food_item' => $food_item,
      'title' => $food_item ? $food_item->name : ''
    ];
  }
   
}; ?>

<div>
  @section('title', $title)
  <section class="product-section container">
    @livewire('includes.food-items')
  </section>

  @livewire('includes.subscribe')
</div>
