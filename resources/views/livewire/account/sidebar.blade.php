<div class="sidebar widget widget-dashboard mb-lg-0 mb-3 col-lg-3 order-0">
    <h2 class="text-uppercase">My Account</h2>
    <ul class="nav nav-tabs list flex-column mb-0" role="tablist">
      <li class="nav-item">
        <a href="{{ route('dashboard') }}" class="nav-link {{ $activeTab == 'dashboard' ? 'active' : ''}}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $activeTab == 'orders' ? 'active' : ''}}" >Orders</a>
      </li>
      @if(is_admin())

      <li class="nav-item">
        <a href="{{ route('admin.settings') }}" class="nav-link {{ $activeTab == 'settings' ? 'active' : ''}}" >Settings</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.stores') }}" class="nav-link {{ $activeTab == 'stores' ? 'active' : ''}}" >Stores</a>
      </li >
      <li class="nav-item">
        <a href="{{ route('admin.food-items') }}" class="nav-link {{ $activeTab == 'food-items' ? 'active' : ''}}" >Food Items</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.sliders') }}" class="nav-link {{ $activeTab == 'sliders' ? 'active' : ''}}" >Sliders</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.banners') }}" class="nav-link {{ $activeTab == 'banners' ? 'active' : ''}}" >Banners</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.roles') }}" class="nav-link {{ $activeTab == 'roles' ? 'active' : ''}}" >Roles</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.users') }}" class="nav-link {{ $activeTab == 'users' ? 'active' : ''}}" >Users</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.categories') }}" class="nav-link {{ $activeTab == 'categories' ? 'active' : ''}}" >Categories</a>
      </li>

      @endif



      <li class="nav-item">
        <a class="nav-link" id="address-tab" data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">Addresses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit" aria-selected="false">Account details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="shop-address-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="edit" aria-selected="false">Shopping Addres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wishlist.html">Wishlist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('password') }}">Reset Password</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" wire:click="logout" href="javascript:;">Logout</a>
      </li>
    </ul>
  </div>