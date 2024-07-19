<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: false);
    }
}; ?>

<div>
<header class="header">
    <div class="header-top">
            <div class="container">
                <div class="header-left d-none d-sm-flex">
                    <i class="icon-shipping"></i>
                    <p class="top-message">{{settings('top_message')}}</p>
                </div><!-- End .header-left -->
    
                <div class="header-right header-dropdowns ml-0 ml-sm-5 w-sm-100">
    
                    <div class="header-dropdown">
                        <a href="#">GBP</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">USD</a></li>
                                <s><li><a href="#">EUR</a></li></s>
                                <s><li><a href="#">GHC</a></li></s>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropown -->
    
                    <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                        <a href="#"><i class="flag-gb flag"></i>ENG</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#"><i class="flag-gb flag mr-2"></i>Eng</a>
                                </li>
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropown -->
    
                    <div class="header-dropdown">
                        <a href="#">OUR STORES</a>
                        <div class="header-menu">
                            <ul>
                                @forelse (get_stores() as $store)
                                    @if($store->status=='active')
                                    <li><a href="{{ $store->map_link }}">{{ $store->name }}</a></li>
                                    @else
                                    <s><li><a href="{{ $store->map_link }}">{{ $store->name }}</a></li></s>
                                    @endif
                                @empty
                                    
                                @endforelse
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropown -->
    
                    <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                        <a href="#">Links</a>
                        <div class="header-menu">
                            <ul>
                                <li><a href="#">OPEN DAILY</a></li>
                                <li><a href="#">{{settings('opening_hours')}}</a></li>
                                @guest
                                    <li><a href="{{ route('login') }}" class="btn btn-gray">LOGIN</a></li>
                                @else
                                    <li><a wire:click="logout" href="javascript:void(0)">LOGOUT</a></li>
                                @endguest
                            </ul>
                        </div><!-- End .header-menu -->
                    </div><!-- End .header-dropown -->
    
                    <div class="social-icons">
                        <a href="{{settings('facebook')}}}" class="social-icon social-facebook icon-facebook" title="social-icon" target="_blank"></a>
                        <a href="{{settings('twitter')}}" class="social-icon social-twitter icon-twitter" title="social-icon" target="_blank"></a>
                        <a href="{{settings('instagram')}}" class="social-icon social-instagram icon-instagram" title="social-icon" target="_blank"></a>
                    </div><!-- End .social-icons -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div>
    
        <div class="header-middle">
            <div class="container">
                <div class="header-left col-lg-2 w-auto pl-0">
                    <button class="mobile-menu-toggler text-primary mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a href="/" class="logo">
                        <img src="{{asset(settings('logo'))}}" width="140" alt="{{settings('app_name')}}">
                    </a>
                </div><!-- End .header-left -->
    
                <div class="header-right w-lg-max">
                    <div class="header-search header-search-inline header-search-category d-lg-block d-none text-right mt-0">
                        <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required="">
                                <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div>
    
                    <a class="header-login d-lg-flex pr-4" href="tel:+{{settings('phone_number')}}" title="Call Us">
                        <div class="login-icon mob">
                            <i class="icon-phone-2"></i>
                        </div>
                        <div class=" d-xl-block">
                            <h3 class="font1 mt-1" style="color: #183f72;">+{{settings('phone_number')}}</h3>
                        </div>
                    </a>
    
                    <div class="dropdown cart-dropdown" style="float: right;">
                        <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-cart-thick"></i>
                            <span class="cart-count badge-circle"></span>
                        </a>
                    </div><!-- End .dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    
        <div class="header-bottom d-none d-lg-block">
            <div class="container">
                <ul class="category-menu">
                    <li><a href="#.">DAILY 5✯ MEALS</a></li>
                    <li><a href="#.">ADD-ON MEALS</a></li>
                    <li><a href="#.">CHAIRMAN’S SATURDAY</a></li>
                    <li><a href="#.">EXCELLENCY SUNDAY</a></li>
                    <li><a href="#.">MAMA’S BOWL</a></li>
                    <li><a href="#.">UPCOMING</a></li>
                </ul>
            </div><!-- End .container -->
        </div><!-- End .header-bottom -->
    </header>
    </div>