<?php

use Livewire\Volt\Component;
use App\Traits\GeneralTrait;
use Livewire\Attributes\{Layout, Title};
use TallStackUi\Traits\Interactions; 
use Livewire\Attributes\Locked;
use Illuminate\Support\Facades\Hash;
use Spatie\LivewireFilepond\WithFilePond;

new 
#[Layout('layouts.app')]
class extends Component {
    use Interactions, GeneralTrait, WithFilePond;

    public $old_password;
    public $new_password;
    public $new_password_confirmation;
    public $title = 'Account Password';


    public function mount()
    {
    
    }

    public function updatePassword()
    {
        $this->validate([
            'old_password' => ['required', 'string', 'current_password'],
            'new_password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);

        if (Hash::check($this->old_password, user()->password)) {

            $user = user();
            $user->password = Hash::make($this->new_password);
            $user->save();

            $this->reset(['old_password','new_password','new_password_confirmation']);

            $this->dialog()->success('Password Changed Successfully')->send();
            return;
        }else{
            $this->dialog()->error('Old Password is Wrong')->send();
            return;
        }

    }

}; ?>

<div>
  @section('title', $title)
   <div class="container account-container custom-account-container">
       <div class="row">
        @include('livewire.account.sidebar', ['activeTab' => 'dashboard'])
         <div class="col-lg-9 order-lg-last order-1 tab-content">
          <div class="card">
            <div class="card-body">
              <div class="mb-4 main-content-label">Account Password</div>
              <form wire:submit.prevent="updatePassword">
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" wire:model="old_password" placeholder="Old Password" class="form-control" required="">
                    @error('old_password') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <input type="password" wire:model="new_password" placeholder="New Password" class="form-control" required="">
                    @error('new_password') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
                <br>

                <div class="row">
                  <div class="col-md-12">
                    <input type="password" wire:model="new_password_confirmation" placeholder="Confirm Password" class="form-control" required="">
                    @error('new_password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn ripple btn-dark" type="submit">Change Password</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>