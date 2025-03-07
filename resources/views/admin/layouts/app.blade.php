<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>AIHUT-ADMIN</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/style.css')}}">



    <!-- Font -->
    <link rel="stylesheet" href="{{asset('admin/font/fonts.css')}}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('admin/icon/style.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('admin/images/favicon.png')}}">

</head>
<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
           <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                @include('admin.layouts.sidebar')
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                @yield('content')
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('admin/js/zoom.js')}}"></script>
    <script src="{{asset('admin/js/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('admin/js/apexcharts/line-chart-1.js')}}"></script>
    <script src="{{asset('admin/js/apexcharts/line-chart-2.js')}}"></script>
    <script src="{{asset('admin/js/apexcharts/line-chart-3.js')}}"></script>
    <script src="{{asset('admin/js/apexcharts/line-chart-4.js')}}"></script>
    <script src="{{asset('admin/js/apexcharts/line-chart-5.js')}}"></script>
    <script src="{{asset('admin/js/apexcharts/line-chart-6.js')}}"></script>
    <!-- <script src="js/switcher.js"></script> -->
    <script src="{{asset('admin/js/theme-settings.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>

</body>
</html>