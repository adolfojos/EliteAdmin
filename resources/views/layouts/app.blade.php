<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="EliteAdmin">
        <meta name="author" content="Adolfo Suarez">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('plugins/images/favicon.png')}}" />
        <title>@yield('title', 'Principal') » {{ config('app.name', 'Elite Admin') }}</title>
        <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/bower/bootstrap-extension/css/bootstrap-extension.css') }}" rel="stylesheet">
        @yield('style')
        <link href="{{ asset('plugins/bower/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/colors/default.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="fix-sidebar">
        <!-- Preloader-->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
        <div id="wrapper">
        @include('partials.header')
        @include('partials.sidebar')
        <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    @yield('breadcrumb')

                    @yield('content')

                    @include('partials.sidebar_right')
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> {{date('Y')}} &copy; {{ config('app.name', 'App') }} {{__('brought to you by')}} {{ config('app.author', 'Author') }} </footer>
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- Scripts -->
        <script src="{{ asset('plugins/bower/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/bower/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
        <script src="{{ asset('plugins/bower/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/custom.min.js') }}"></script>
    @yield('script')
        <!--Style Switcher -->
        <script src="{{asset('plugins/bower/styleswitcher/jQuery.style.switcher.js')}}"></script>
    </body>
</html>