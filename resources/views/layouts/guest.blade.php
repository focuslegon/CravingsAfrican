<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    @include('layouts.includes.head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/assets/css/demo41.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/fontawesome-free/css/all.min.css">
  
   </head>
    <body >
        @persist('dialogs') 
        <x-toast /> 
        <x-dialog /> 
        @endpersist
      <div class="page-wrapper">
        @livewire('layout.header')
        <!-- End .header -->
        <main class="main">
       
                {{ $slot }}
     
        </main>
        @include('layouts.includes.footer')
    </div>
    <div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

    @include('layouts.includes.mobile-menu')
    @include('layouts.includes.sticky-navbar')

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
	<!-- Plugins JS File -->
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/js/optional/isotope.pkgd.min.js"></script>
	<script src="/assets/js/plugins.min.js"></script>
	<script src="/assets/js/jquery.appear.min.js"></script>
	<!-- Main JS File -->
	<script src="/assets/js/main.min.js"></script>

</body>
</html>
