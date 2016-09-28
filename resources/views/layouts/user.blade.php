<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="dashboard" name="description">
    <meta content="olife" name="author">

    <title>@yield('title','欢迎') | 中科院心理所</title>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }} " rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('assets/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ URL::asset('assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/themes/default.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ URL::asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" /> </head>

    <script src="{{ URL::asset('assets/scripts/jquery.min.js') }}" type="text/javascript"></script>

</head>
<body class="page-container-bg-solid page-header-menu-fixed">

<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href=" {{ url('') }}">
                    <img src="{{ URL::asset('assets/img/cas_logo.jpg') }}" alt="logo" class="logo-default" style="margin: 12px 0 0;">
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            @if(Auth::check() && Auth::user()->is('common'))
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-default"></span>
                            </a>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default"></span>
                            </a>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <li class="droddown dropdown-separator">
                            <span class="separator"></span>
                        </li>
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="circle">2</span>
                                <span class="corner"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>你有
                                        <strong>2 条新的</strong> 消息</h3>
                                    <a href="#">查看所有</a>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{ URL::asset('assets/img/avatar2.jpg') }}" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> 张三 </span>
                                                    <span class="time">刚刚 </span>
                                                </span>
                                                <span class="message"> 我刚做了一个测试... </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="{{ URL::asset('assets/img/avatar1.jpg') }}" class="img-circle" alt=""> </span>
                                                <span class="subject">
                                                    <span class="from"> 李四 </span>
                                                    <span class="time">2 小时 </span>
                                                </span>
                                                <span class="message"> 我是李四，很高兴认识你... </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="{{ URL::asset('assets/img/avatar9.jpg') }}">
                                <span class="username username-hide-mobile">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{{ url('info') }}">
                                        <i class="icon-user"></i> 我的资料 </a>
                                </li>
                                <li class="disabled">
                                    <a href="#">
                                        <i class="icon-envelope-open"></i> 我的消息
                                        <span class="badge badge-danger"> 2 </span>
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="{{ url('logout') }}">
                                        <i class="icon-key"></i> 退出 </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
            @else
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a href="{{ url('login') }}">登录/注册</a>
                        </li>
                    </ul>
                </div>
            @endif
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
            <div class="hor-menu  ">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href=" {{ url('') }}">首页
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="  ">
                        <a href="{{ url('/review') }}">心理测评
                            <span class="arrow"></span>
                        </a>
                    </li>

                    <li class="  ">
                        <a href="{{ url('diary_list') }}">心情日记
                            <span class="arrow"></span>
                        </a>
                    </li>

                    <li class="  ">
                        <a href="#">活动
                            <span class="arrow"></span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>

<div class="page-container">
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="container">
            @include('common.errors')
            @yield('content')
        </div>

    </div>
</div>

<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>About</h2>
                <p> 中国科学院心理研究所 </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                <h2>Subscribe Email</h2>
                <div class="subscribe-form">
                    <form action="javascript:;">
                        <div class="input-group">
                            <input type="text" placeholder="mail@email.com" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn" type="submit">Submit</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>Contacts</h2>
                <address class="margin-bottom-40"> Phone: (86-10)64879520
                    <br> Email:
                    <a href="mailto:webmaster@psych.ac.cn">webmaster@psych.ac.cn</a>
                </address>
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="container"> 2016 &copy; Olife.
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->

<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/scripts/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('assets/scripts/app.min.js') }}" type="text/javascript"></script>

{{--    <script src="{{ URL::asset('assets/scripts/dashboard.min.js') }}" type="text/javascript"></script>--}}

<script src="{{ URL::asset('assets/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>

</body>
</html>