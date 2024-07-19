<?php
use Livewire\Volt\Component;
use App\Models\Subscribe;
use TallStackUi\Traits\Interactions;

new class extends Component
{
    use  Interactions;

    public $email;

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email',
        ]);
        // check if email already exists
        if (Subscribe::where('email', $this->email)->exists()) {
            $this->dialog()->info('You are already subscribed')->send();
            return;
        }
        $subscribe = new Subscribe();
        $subscribe->email = $this->email;
        $subscribe->status = 'active';
        $subscribe->save();
        $this->email = '';

        $this->dialog()->success('Thank you for subscribing. We will send you updates shortly.')->send();

    }
    
}; ?>

 <div class="container">
    <div class="newsletter d-flex align-items-center flex-wrap ">
      <div class="info-box info-box-icon-left d-inline-flex">
        <i class="icon-envolope"></i>
        <div class="info-box-content">
          <h4 class="font-weight-bold text-capitalize">Subscribe To Our Newsletter</h4>
          <p>Get all the latest information on Events, Sales and Offers.</p>
        </div>
        <!-- End .info-box-content -->
      </div>
        <form wire:submit="subscribe" class="d-flex justify-content-center mb-0">
       <div class="form-group">
        <input type="email" class="form-control mb-0" wire:model="email" placeholder="Your E-mail Address" >
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror 
       </div>
        <div>
            <button class="btn btn-secondary" type="submit" style="height: 49px">subscribe now!
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" wire:loading wire:target="subscribe"></span>
            </button>
        </div>
      </form>
    </div>
   
  </div>