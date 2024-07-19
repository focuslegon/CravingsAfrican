<?php
use Livewire\Attributes\Layout;
use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new 
#[Layout('layouts.app')] 
class extends Component
{
  public $title = 'Dashboard';
     /**
     * Log the current user out of the application.
     */
  public function logout(Logout $logout): void{
    $logout();
    $this->redirect('/', navigate: false);
  }
   
}; ?>

<div>
   @section('title', $title)
    <div class="container account-container custom-account-container">
        <div class="row">
         @include('livewire.account.sidebar', ['activeTab' => 'dashboard'])
          <div class="col-lg-9 order-lg-last order-1 tab-content">

            <div class="dashboard">
              <div class="dashboard-content">
                <p> Hello <strong class="text-dark">{{user()->name}}</strong> (not <strong class="text-dark">{{user()->name}}</strong>? <a href="javascript:;" class="btn btn-link " wire:click="logout">Log out</a>) </p>

                @if (!is_admin())
                <p> From your account dashboard you can view your <a class="btn btn-link link-to-tab" href="#order">recent orders</a>, manage your <a class="btn btn-link link-to-tab" href="#address">shipping and billing addresses</a>, and <a class="btn btn-link link-to-tab" href="#edit">edit your password and account details.</a>   
                @endif
               
                </p>
                <div class="mb-4"></div>
                <div class="row row-lg">
                  <div class="col-6 col-md-4">
                    <div class="feature-box text-center pb-4">
                      <a href="#order" class="link-to-tab">
                        <i class="sicon-social-dropbox"></i>
                      </a>
                      <div class="feature-box-content">
                        <h3>ORDERS</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4">
                    <div class="feature-box text-center pb-4">
                      <a href="#download" class="link-to-tab">
                        <i class="sicon-cloud-download"></i>
                      </a>
                      <div class=" feature-box-content">
                        <h3>DOWNLOADS</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4">
                    <div class="feature-box text-center pb-4">
                      <a href="#address" class="link-to-tab">
                        <i class="sicon-location-pin"></i>
                      </a>
                      <div class="feature-box-content">
                        <h3>ADDRESSES</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4">
                    <div class="feature-box text-center pb-4">
                      <a href="#edit" class="link-to-tab">
                        <i class="icon-user-2"></i>
                      </a>
                      <div class="feature-box-content p-0">
                        <h3>ACCOUNT DETAILS</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4">
                    <div class="feature-box text-center pb-4">
                      <a href="wishlist.html">
                        <i class="sicon-heart"></i>
                      </a>
                      <div class="feature-box-content">
                        <h3>WISHLIST</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4">
                    <div class="feature-box text-center pb-4">
                      <a href="login.html">
                        <i class="sicon-logout"></i>
                      </a>
                      <div class="feature-box-content">
                        <h3>LOGOUT</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End .row -->
              </div>
            </div>

          </div>
          <!-- End .tab-content -->
        </div>
        <!-- End .row -->
      </div>
      <!-- End .container -->

</div>