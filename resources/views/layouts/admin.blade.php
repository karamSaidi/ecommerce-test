<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="ecommerce for test from Karam Alsaidi. @yield('page_header_discription')">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard, @yield('page_header_keywords')">
    <meta name="author" content="Karam Alsaidi">





    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}



    <title>{{ config('app.name') }} @yield('page_title')</title>
    <link rel="apple-touch-icon" href="{{asset('assets/admin')}}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin')}}/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/admin')}}/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->

    @stack('style')

</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">

    <div id="app">

        <!-- fixed-top-->
        @include('admin.partials.navbar')

        <!-- menu-->
        @include('admin.partials.menu')



        <div class="app-content content">

            <div class="content-wrapper">

                <div class="content-header row">
                </div><!-- ./content-header -->

                <div class="content-body row">
                    @yield('content')
                </div><!-- ./content-body -->

            </div><!-- /.content-wrapper -->

        </div><!-- /.app-content -->


    </div>
    <!-- ./app -->




    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('assets/admin')}}/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('assets/admin')}}/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript">
    </script>
    <script src="{{asset('assets/admin')}}/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/vendors/js/charts/morris.min.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{asset('assets/admin')}}/js/core/app-menu.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/js/core/app.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('assets/admin')}}/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    @stack('scripts')
</body>

</html>
