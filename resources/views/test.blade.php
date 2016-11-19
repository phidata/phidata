@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <div class="container" style="font-family: 微软雅黑 Light">
        <div class="row clearfix">
            <div class="col-md-12 column" style="padding-top:20px">
                <div class="navbar-header" style="padding-right: 20px">
                    <img class="img-circle" src="img/logo1.png" width="50px" height="50px"/>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{ action('DataPackageController@index')}}" style="color: #000000">数据分享</a>
                        </li>
                        <li>
                            <a href="#" style="color: #000000">数据API</a>
                        </li>
                        <li>
                            <a href="#" style="color: #000000">数据标定</a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input class="form-control" type="text"/>
                        </div>
                        <button class="btn btn-default" type="submit">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">、
                        <li style="padding-top:10px">
                            <img class="img-circle" src="img/user.png" width="22px" height="31px"/>
                        </li>
                        <li style="padding-left:20px ">
                            <a href="#">登录</a>
                        </li>
                        <li>
                            <a href="#">注册</a>
                        </li>
                    </ul>
                </div>
                <div class="row clearfix" style="padding-top: 20px">
                    <div class="col-md-12 column">
                        <div class="carousel slide" id="carousel-614261">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#carousel-614261" data-slide-to="0">
                                </li>
                                <li data-target="#carousel-614261" data-slide-to="1">
                                </li>
                                <li data-target="#carousel-614261" data-slide-to="2">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="sb" src="img/01.jpg" width="1600px" height="500px"/>
                                    <div class="carousel-caption">
                                        <h4>
                                            First Thumbnail label
                                        </h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="1600x500" src="img/02.jpg" width="1600px" height="500px"/>
                                    <div class="carousel-caption">
                                        <h4>
                                            Second Thumbnail label
                                        </h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="1600x500" src="img/03.jpg" width="1600px" height="500px"/>
                                    <div class="carousel-caption">
                                        <h4>
                                            Third Thumbnail label
                                        </h4>
                                        <p>
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit
                                            non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies
                                            vehicula ut id elit.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-614261" data-slide="prev"><span
                                        class="glyphicon glyphicon-chevron-left"></span></a> <a
                                    class="right carousel-control" href="#carousel-614261" data-slide="next"><span
                                        class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>


                        </nav>
                    </div>
                </div>

                <div class="row clearfix" style="padding-top: 20px">
                    <div class="col-md-12 column"
                         style="border-top-style:solid; border-bottom-style:solid; border-width:1">
                        <div class="row clearfix">
                            <div class="col-md-8 column" style="font-size: large">
                                <dl>
                                    <dt style="color: #0d638f">
                                        数据分享
                                    </dt>
                                    <dd style="text-indent: 1cm">
                                        数据分享平台是新一代数据共享服务平台，平台提供的主要服务是提供各种数据的下载和分享服务，并且可以对平台不存在的数据进行“悬赏”。
                                        平台的服务对象为需要用数据进行相关研究工作的研究人员，以及持有数据的相关人员。交易方式为积分交易，用户下载分享的数据是需要支付一定的积分给数据持有者
                                        数据持有者可以通过提交数据来赚取积分。
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-md-4 column" align="center" style="padding-top: 20px">
                                <img class="img-circle" alt="140x140" src="img/share.png"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column"
                         style="border-top-style:solid; border-bottom-style:solid; border-width:1px;">
                        <div class="row clearfix">
                            <div class="col-md-4 column" align="center" style="padding-top: 20px">
                                <img class="img-circle" alt="140x140" src="img/API.png"/>
                            </div>
                            <div class="col-md-8 column" style="font-size: large">
                                <dl>
                                    <dt style="color: #0d638f">
                                        数据API
                                    </dt>
                                    <dd style="text-indent: 1cm">
                                        数据分享平台是新一代数据共享服务平台，平台提供的主要服务是提供各种数据的下载和分享服务，并且可以对平台不存在的数据进行“悬赏”。
                                        平台的服务对象为需要用数据进行相关研究工作的研究人员，以及持有数据的相关人员。交易方式为积分交易，用户下载分享的数据是需要支付一定的积分给数据持有者
                                        数据持有者可以通过提交数据来赚取积分。
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix" style="padding-bottom: 10px">
                    <div class="col-md-12 column"
                         style="border-top-style:solid; border-bottom-style:solid; border-width:1px;" `>
                        <div class="row clearfix">
                            <div class="col-md-8 column" style="font-size: large">
                                <dl>
                                    <dt style="color: #0d638f">
                                        数据标定
                                    </dt>
                                    <dd style="text-indent: 1cm">
                                        数据分享平台是新一代数据共享服务平台，平台提供的主要服务是提供各种数据的下载和分享服务，并且可以对平台不存在的数据进行“悬赏”。
                                        平台的服务对象为需要用数据进行相关研究工作的研究人员，以及持有数据的相关人员。交易方式为积分交易，用户下载分享的数据是需要支付一定的积分给数据持有者
                                        数据持有者可以通过提交数据来赚取积分。
                                    </dd>
                                </dl>
                            </div>
                            <div class="col-md-4 column" align="center" style="padding-top: 20px">
                                <img alt="140x140" src="img/biaoding.png"/>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="container" style="background-color:#666; color:#FFF; padding-top: 10px">--}}
                {{--<div class="row clearfix">--}}
                {{--<div class="col-md-12 column">--}}
                {{--<div class="row clearfix">--}}
                {{--<div class="col-md-2 column">--}}
                {{--</div>--}}
                {{--<div class="col-md-2 column">--}}
                {{--<ul>--}}
                {{--<li>--}}
                {{--Lorem ipsum dolor sit amet--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--Consectetur adipiscing elit--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--Integer molestie lorem at massa--}}
                {{--</li>--}}

                {{--</ul>--}}

                {{--</div>--}}
                {{--<div class="col-md-2 column">--}}
                {{--</div>--}}
                {{--<div class="col-md-2 column">--}}
                {{--</div>--}}
                {{--<div class="col-md-2 column">--}}
                {{--</div>--}}
                {{--<div class="col-md-2 column">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row clearfix">--}}
                {{--<div class="col-md-12 column">--}}
                {{--<blockquote class="pull-right">--}}
                {{--<p>--}}
                {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.--}}
                {{--</p> <small>Someone famous <cite>Source Title</cite></small>--}}
                {{--</blockquote>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="row clearfix" style="background-color: #0d638f; color:#FFF">
                    <div class="row clearfix" style="padding-top: 20px">
                        <div class="col-md-2 column">
                        </div>
                        <div class="col-md-2 column">
                            {{--<dl  style="font-size: large; font-family: 幼圆">--}}
                            {{--<dd>--}}
                            {{--<a href="#" style="color: #ffffff"> 数据包分类查询</a>--}}
                            {{--</dd>--}}
                            {{--<dd>--}}
                            {{--<a href="#" style="color: #ffffff"> 需求发布</a>--}}
                            {{--</dd>--}}
                            {{--</dl>--}}

                        </div>
                        <div class="col-md-2 column">
                            {{--<dl  style="font-size: large">--}}
                            {{--<dd>--}}
                            {{--<a href="#" style="color: #ffffff"> 数据API分类查询</a>--}}
                            {{--</dd>--}}
                            {{--</dl>--}}
                        </div>
                        <div class="col-md-2 column">
                            {{--<dl  style="font-size: large">--}}
                            {{--<dd>--}}
                            {{--<a href="#" style="color: #ffffff"> 标定任务分类查询</a>--}}
                            {{--</dd>--}}
                            {{--<dd>--}}
                            {{--<a href="#"style="color: #ffffff"> 标定任务发布</a>--}}
                            {{--</dd>--}}
                            {{--</dl>--}}

                        </div>
                        <div class="col-md-2 column">
                        </div>
                        <div class="col-md-2 column">
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column" style="padding-bottom: 20px">
                            <div style="padding-right: 20px" align="right">
                                <p>
                                    北京市海淀区中关村南大街5号
                                </p>
                                <small>北京理工大学</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
