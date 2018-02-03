<!doctype html>
<html lang="{{ config('app.locale') }}">
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
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body>
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>404</h1>
                <h3 class="text-uppercase">{{__('Page Not Found !')}}</h3>
                <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <a href="{{ url('/') }}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">{{__('Back to home')}}</a> </div>
            <footer class="footer text-center">{{date('Y')}} © Elite Admin.</footer>
        </div>
    </section>
        <script src="{{ asset('plugins/bower/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/tether.min.js') }}"></script>
        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('plugins/bower/bootstrap-extension/js/bootstrap-extension.min.js') }}"></script>
        <script src="{{ asset('js/custom.min.js') }}"></script>
</body>
</html>
