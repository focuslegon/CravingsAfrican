<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{isset($title) ? $title : settings('title')}}</title>
    <meta name="keywords" content="{{settings('keywords')}}" />
    <meta name="description" content="{{settings('description')}}">
    <meta name="author" content="{{settings('author')}}">

    <!-- Open Graph meta tags -->
    <meta property="og:title" content="{{isset($title) ? $title : settings('title')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image' content="{{isset($og_image) ? $og_image : asset(settings('og_image'))}}" />
    <meta property="og:description" content="{{isset($og_description) ? $og_description : settings('description')}}" />
    <meta property="og:site_name" content="{{isset($og_site_name) ? $og_site_name : settings('title')}}" />
    <meta property="og:locale" content="{{app()->getLocale()}}" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset(settings('favicon'))}}">
    <link rel="preload" href="/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/porto.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: {
            families: ['Open+Sans:400,700,800', 'Poppins:400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
            s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
        <!-- Scripts -->
    <tallstackui:script /> 
    @filepondScripts