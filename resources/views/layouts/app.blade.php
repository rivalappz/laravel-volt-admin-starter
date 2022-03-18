<!DOCTYPE html>
<html lang="en">
<head>
    {{-- meta tags --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="theme-color" content="#ffffff"/>
    {{-- title --}}
    <title>{{config('app.name')}}</title>
    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/favicon/apple-touch-icon.png')}}"/>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}"/>
    <link rel="manifest" href="{{asset('img/favicon/site.webmanifest')}}"/>
    <link rel="mask-icon" href="{{asset('img/favicon/safari-pinned-tab.svg')}}" color="#ffffff"/>
    {{-- vendor stylesheets --}}
    <link type="text/css" href="{{asset('vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet"/>
    <link type="text/css" href="{{asset('vendor/notyf/notyf.min.css')}}" rel="stylesheet"/>
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet"/>
    {{-- custom stylesheets --}}
    @yield('stylesheets')
</head>
<body>

@include('_partials.navbar')

@include('_partials.sidebar')

{{-- vendor scripts --}}
<script src="{{asset('vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
<script src="{{asset('vendor/nouislider/dist/nouislider.min.js')}}"></script>
<script src="{{asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('vendor/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" async defer="defer"></script>
<script src="{{asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('vendor/notyf/notyf.min.js')}}"></script>
<script src="{{asset('vendor/simplebar/dist/simplebar.min.js')}}"></script>
<script src="https://buttons.github.io/buttons.js" async defer="defer"></script>
<script src="{{asset('js/app.js')}}"></script>
{{-- custom stylesheets --}}
@yield('scripts')

</body>
<!--
=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================
* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)
* Designed and coded by https://themesberg.com
=========================================================
-->
</html>
