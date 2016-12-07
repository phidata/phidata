<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Phidata</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
@yield('head')
<!-- BEGIN GLOBAL MANDATORY STYLES -->
    {{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />--}}

    <link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
{{--        <link href="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--<link href="{{ URL::asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />--}}
{{--        <link href="{{ URL::asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />--}}
{{--<link href="{{ URL::asset('assets/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />--}}
<!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ URL::asset('assets/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ URL::asset('assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ URL::asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/light.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ URL::asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }} " /> </head>
<!-- END HEAD -->
<script src="{{ URL::asset('assets/scripts/jquery.min.js') }}" type="text/javascript"></script>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="row clearfix" style="padding-left: 100px;padding-right: 100px;">
    <div class="col-md-12 column" style="padding-top:20px">
        <div class="navbar-header" style="padding-right: 20px">
            <img class="img-circle" src="../../img/logo1.png" width="50px" height="50px"/>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav" >
                <li class="active">
                    <a href="{{action('DataPackageController@index')}}" style="color: #000000;" >数据分享</a>
                </li>
                <li>
                    <a href="{{action('api_infoController@show_index')}}" style="color: #000000">数据API</a>
                </li>
                <li>
                    <a href="{{action('Rating_taskController@showIndex')}}" style="color: #000000">数据标定</a>
                </li>
            </ul>
            <ul>
                <form method="POST" class="navbar-form navbar-left" role="search" action="{{ action('SearchController@all_search') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input name="key" type="text" class="form-control input-inline input-small input-sm" placeholder="关键词">
                    </div> <button class="btn btn-default" type="submit">搜索</button>
                </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{action("UserController@index")}}"><img class="img-circle" src="../../img/user.png" width="22px" height="25px"/></a>
                </li>
                <li style="padding-left:20px ">
                    <a href="{{ url('/login') }}">登录</a>
                </li>
                <li>
                    <a href="{{ url('/register') }}">注册</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->


{{--@if($curDomain =='admin')--}}
{{--@include('layouts.nav_left_admin')--}}
{{--@elseif($curDomain =='agent')--}}
{{--@include('layouts.nav_left_agent')--}}
{{--@elseif($curDomain =='recycler')--}}
{{--@include('layouts.nav_left_recycler')--}}
{{--@elseif($curDomain =='commonuser')--}}
{{--@include('layouts.nav_left_commonuser')--}}
{{--@endif--}}
@include('layouts.nav_left_userCenter')
<!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
                <!-- END PAGE TOOLBAR -->
                @yield('pageHead')
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BREADCRUMB -->
        {{--<ul class="page-breadcrumb breadcrumb">--}}
        {{--@yield('breadcrumbs')--}}
        {{--<!-- <li>--}}
        {{--<a href="#">Home</a>--}}
        {{--<i class="fa fa-circle"></i>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<span class="active">Dashboard</span>--}}
        {{--</li> -->--}}
        {{--</ul>--}}
        <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE BASE CONTENT -->
            <!-- BEGIN DASHBOARD STATS 1-->

            @include('common.errors')
            @include('common.info')
            @yield('content')
            <div class="row">
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2016 &copy; LL Good Y.
        <a href="" title="Phidata" target="_blank">Phidata!</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<!--<script src="{{ URL::asset('assets/plugins/respond.min.js') }}"></script>-->
<!--<script src="{{ URL::asset('assets/plugins/excanvas.min.js') }}"></script>-->
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/scripts/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/scripts/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- <script src="{{ URL::asset('assets/plugins/moment.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/morris/morris.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/morris/raphael-min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script> -->
<!-- <script src="{{ URL::asset('assets/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script> -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->

<script src="{{ URL::asset('assets/scripts/app.min.js') }}" type="text/javascript"></script>

<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{--        <script src="{{ URL::asset('assets/scripts/dashboard.min.js') }}" type="text/javascript"></script>--}}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ URL::asset('assets/scripts/layout.min.js') }}" type="text/javascript"></script>


{{--<script src="{{ URL::asset('assets/layouts/layout4/scripts/demo.min.js') }}" type="text/javascript"></script>--}}
<!-- END THEME LAYOUT SCRIPTS -->
<script src="{{ URL::asset('assets/scripts/select2.min.js') }}" type="text/javascript"></script>

</body>
<script>
    $(document).ready(function() {
        if($(".select2")){
            $(".select2").select2();
        }

    });
</script>
</html>