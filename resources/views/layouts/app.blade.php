<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
    @include('layouts.includes.head')

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <link rel="stylesheet" href="/assets/css/demo41.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
   </head>
    <body >
        <style>
               .card {
                    font-size: initial;
                }
                .row {
                    margin-left: 0px;
                    margin-right: 0px;
                }
                select.form-control {
                height: 4.5rem !important;
                }
                .btn {
                text-transform: uppercase;
                padding: 6px;
                }
                label.block.text-sm.font-semibold.text-gray-600 {
                 font-size: initial;
                }
                input.w-full.rounded-md.border-0.bg-transparent {
                 font-size: initial;
                 line-height: inherit;
                }
                textarea.w-full.rounded-md.border-0.bg-transparent {
                 font-size: initial;
                 line-height: inherit;
                }
                input.w-full.rounded-md.border-0.bg-transparent {
                 font-size: initial;
                 line-height: inherit;
                }
                .relative.inset-y-0.left-0.flex.w-full.items-center.space-x-2.overflow-hidden.rounded-lg.pl-2.transition{
                 font-size: initial;
                }
                .dark\:text-dark-300.dark\:bg-dark-800.dark\:focus\:ring-primary-600.dark\:disabled\:bg-dark-600.dark\:ring-dark-600.mt-1.flex.w-full.cursor-pointer.items-center.gap-x-2.rounded-md.border-0.bg-white.py-1\.5.text-sm.ring-1.ring-gray-300.transition.disabled\:bg-gray-100.disabled\:text-gray-500.disabled\:ring-gray-300.focus\:ring-primary-600.text-gray-600.focus\:outline-none.focus\:ring-2{
                    height: 30px;
                }
                li .flex.items-center.justify-between {
                font-size: 15px;
                }
                .filepond--credits {
                    display: none !important;
                }
        </style>
        @persist('dialogs') 
        <x-toast /> 
        <x-dialog /> 
        @endpersist
      <div class="page-wrapper">
        @livewire('layout.header')
        <!-- End .header -->
        <main class="main">
            <div class="page-header">
                <div class="container d-flex flex-column align-items-center">
                    <nav aria-label="breadcrumb" class="breadcrumb-nav">
                        <div class="container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                   @yield('title')
                                </li>
                            </ol>
                        </div>
                    </nav>
        
                    <h1>@yield('title')</h1>
                </div>
             </div>
       
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
