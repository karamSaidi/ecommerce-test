<!DOCTYPE html>
<html class="loading" lang="{{app()->getLocale()}}" data-textdirection="{{get_direction()}}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="ecommerce for test from Karam Alsaidi. @yield('page_header_discription')">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @hasSection ('page_title') @yield('page_title') | @endif {{ config('app.name') }}</title>

    <link rel="apple-touch-icon" href="{{asset('assets/admin')}}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin')}}/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/{{get_style_derection()}}/vendors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/admin')}}/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/vendors/css/forms/selects/select2.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/{{get_style_derection()}}/app.css">
    @if(get_direction() == 'rtl')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/{{get_style_derection()}}/custom-rtl.css">
    @endif
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/admin')}}/{{get_style_derection()}}/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/admin')}}/{{get_style_derection()}}/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->

    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/admin')}}/vendors/css/forms/toggle/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css-rtl/plugins/forms/switch.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin')}}/css-rtl/core/colors/palette-switch.css">

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">
    <!-- END Custom CSS-->
    @stack('styles')
</head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">
    <!-- fixed-top-->
    @include('admin.partials.navbar')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('admin.partials.menu')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                @yield('content-header')
            </div>
            <div class="content-body">
                @include('layouts.partials.alerts')

                @yield('content')
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('admin.partials.footer')
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('assets/admin')}}/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script type="text/javascript" src="{{asset('assets/admin')}}/vendors/js/ui/prism.min.js"></script>
    <script src="{{asset('assets/admin')}}/vendors/js/tables/datatable/datatables.min.js" type="text/javascript">
    </script>
    <script src="{{asset('assets/admin')}}/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{asset('assets/admin')}}/js/core/app-menu.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/js/core/app.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <script src="{{asset('assets/admin')}}/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript">

    </script>
    <script src="{{asset('assets/admin')}}/vendors/js/forms/toggle/bootstrap-switch.min.js" type="text/javascript">
    </script>
    <script src="{{asset('assets/admin')}}/vendors/js/forms/toggle/bootstrap-checkbox.min.js" type="text/javascript">
    </script>
    <script src="{{asset('assets/admin')}}/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/js/scripts/forms/switch.js" type="text/javascript"></script>
    <script src="{{asset('assets/admin')}}/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>


    <script>
        $(document).ready(function() {
            $('.form-delete').on('submit', function(e){
                if(!confirm('{{__('general.confirm_delete')}}')){
                    e.preventDefault();
                }

            });
        });

    </script>
    @stack('scripts')
</body>

</html>
