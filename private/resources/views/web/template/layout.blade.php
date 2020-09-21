<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">

    {{-- SEO Meta --}}
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}

    {{-- Meta --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="http://euktest.com/demirokulu/public_html/favicon.png">

    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Google Fonts --}}
 

   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">

 

  
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset(mix('assets/dist/css/style.min.css')) }}">


    {{-- Variables --}}
    <script>
        var App = {
            url: "{{ env('APP_URL') }}",
            currentUrl: "{{ url()->current() }}",
            locale: "{{ app()->getLocale() }}",
        };
    </script>

    {{-- Breadcrumbs --}}
    @if(!isset($noBreadcrumbs))
        @if(!(isset($unsetBreadcrumbs) && $unsetBreadcrumbs == true))
            {{ Breadcrumbs::view('breadcrumbs::json-ld') }}
        @endif
    @endif

    {{-- Global site tag (gtag.js) - Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161200658-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-161200658-1');
    </script>
</head>
<body class="locale-{{ app()->getLocale() }}">
    {{-- Header --}}
    @yield('headerBefore')
    @include('web.template.partials.header', [
        'headerClass' => $headerClass ?? ''
    ])
    @include('web.template.partials.hamburger-menu')
    @yield('headerAfter')

    {{-- Content --}}
    @yield('contentBefore')
    @yield('content') 
    @yield('contentAfter')

    {{-- Footer --}}
    @yield('footerBefore')
    @include('web.template.partials.footer')
    @yield('footerAfter')

    {{-- Script --}}
    @yield('scriptBefore')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="{{ asset(mix('assets/dist/js/scripts.min.js')) }}"></script>
    @yield('scriptAfter')
</body>
</html>
