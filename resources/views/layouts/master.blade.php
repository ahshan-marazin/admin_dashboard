<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield ('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')
        <div id="layoutSidenav_content">
                  @yield('content')
       @include('layouts.inc.admin-footer')
        </div>

    </div>




            <link href="{{ asset('assets/js/bootstrap.bundle.min.js') }}" rel="stylesheet">
            <link href="{{ asset('assets/js/scripts.js') }}" rel="stylesheet">
            <link href="{{ asset('assets/js/datatables-simple-demo.js') }}" rel="stylesheet">

</body>

</html>