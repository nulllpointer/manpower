<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/pace/pace-flash.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/revolution-slider/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins//cube-portfolio/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body  id="body" data-spy="scroll" >
    <div id="app">
       @include('partials.navbar')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

<script>
    $(function() {
        $('#toggle-sidebar').on('click','nav.navbar', function () {
            $('body').hasClass('sidebar-collapse') ? $('body').removeClass('sidebar-collapse') : $('body').addClass('sidebar-collapse');
        })
    });

    $( document ).ready(function() {
        // Handler for .ready() called.
        $('#toggle-sidebar').click( function () {
            $('body').hasClass('sidebar-collapse') ? $('body').removeClass('sidebar-collapse') : $('body').addClass('sidebar-collapse');
        })

    })
</script>
</body>
</html>
