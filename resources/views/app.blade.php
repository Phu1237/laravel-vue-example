<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta http-equiv="content-language" content="{{ App::getLocale() }}"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="author" content=""/>
        <meta name="theme-color" content="#ffffff"/>
        <title>Loading...</title>
        <!-- Helps prevent duplicate content issues -->
        <link rel="canonical" href="{{ url()->current() }}"/>
        <link rel="preload" as="style" href="{{ mix('/assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('/assets/css/app.css') }}">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"
            href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/icon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon/icon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/icon-16x16.png') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">
        {{-- <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/ms-icon-144x144.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}"> --}}
        <meta name="theme-color" content="blue">
        <!-- Microsoft Tiles -->
        <meta name="msapplication-config" content="browserconfig.xml"/>
        <!-- Apple Web App Meta -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="">
        <!-- Facebook Open Graph -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="">
        <meta property="og:image" content="{{ asset('assets/images/favicon/logo.png') }}">
        <meta property="og:description" content="">
        <meta property="og:site_name" content="">
        <meta property="og:locale" content="vi_VN">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@site_account">
        <meta name="twitter:creator" content="@individual_account">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">
    </head>
    <body class="home-template">
        <div id="app"></div>
        <link rel="stylesheet" href="{{ mix('assets/css/plugins.css') }}">
        <script src="{{ mix('/assets/js/app.js') }}"></script>
    </body>
</html>
