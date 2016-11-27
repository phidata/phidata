
@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
    <style>
        #polaroid {
            width: 100%;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 25px;
            margin-left:auto;
            margin-right:auto;

        }

        #container1 {
            text-align: center;
            padding: 10px 20px;
        }
    </style>
    <div class="container" style="font-family: 微软雅黑 Light">
        <div class="row clearfix">
            <div class="col-md-12 column" style="padding-top:20px">
                <div class="navbar-header" style="padding-right: 20px">
                    <img class="img-circle" src="img/logo1.png" width="50px" height="50px"/>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                    <ul class="nav navbar-nav" >
                        <li class="active">
                            <a href="{{action('DataPackageController@index')}}" style="color: #000000;" >数据分享</a>
                        </li>
                        <li>
                            <a href="#" style="color: #000000">数据API</a>
                        </li>
                        <li>
                            <a href="#"style="color: #000000">数据标定</a>
                        </li>
                    </ul>
                    <ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input class="form-control" type="text" />
                            </div> <button class="btn btn-default" type="submit">Submit</button>
                        </form>
                    </ul>
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
            </div>
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
                    <div class="carousel-inner" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="item active">
                            <img alt="sb" src="img/01.jpg"/>
                            <div class="carousel-caption">
                                <h4>
                                    First Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="1600x500" src="img/02.jpg" />
                            <div class="carousel-caption">
                                <h4>
                                    Second Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="1600x500" src="img/03.jpg"   />
                            <div class="carousel-caption">
                                <h4>
                                    Third Thumbnail label
                                </h4>
                                <p>
                                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                </p>
                            </div>
                        </div>
                    </div> <a class="left carousel-control" href="#carousel-614261" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-614261" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
        <div class="row clearfix" style="padding-top: 20px">
            <div class="col-md-12 column">
                <div class="col-md-4 column">
                    {{--<div id="polaroid">--}}
                        {{--<img src="img/stu.jpg" alt="Norway" width="100% height="100%>--}}
                        {{--<div id="container1">--}}
                            {{--<p>The Troll's tongue in Hardanger, Norway</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="ih-item circle colored effect3 top_to_bottom" style="  margin-left:auto;margin-right:auto;"><a href="#">
                            <div class="img"><img src="img/stu.jpg" alt="img"></div>
                            <div class="info" style="padding-top: 20px; font-family: '微软雅黑 Light';background-color: #0d638f;">
                                <h3>数据分享</h3>
                                <p>Share of Data</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 column">
                    {{--<div id="polaroid">--}}
                        {{--<img src="img/xz.jpg" alt="Norway" width="100% height="100%>--}}
                        {{--<div id="container1">--}}
                            {{--<p>The Troll's tongue in Hardanger, Norway</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="ih-item circle colored effect3 top_to_bottom" style="  margin-left:auto;margin-right:auto;"><a href="#">
                            <div class="img"><img src="img/xz.jpg" alt="img"></div>
                            <div class="info" style="padding-top: 20px; font-family: '微软雅黑 Light';background-color: #0d638f;">
                                <h3>数据标定</h3>
                                <p>Data Calibration</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 column">
                    {{--<div id="polaroid">--}}
                        {{--<img src="img/js.jpg" alt="Norway" width="100% height="100%>--}}
                        {{--<div id="container1">--}}
                            {{--<p>The Troll's tongue in Hardanger, Norway</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="ih-item circle colored effect3 top_to_bottom" style="  margin-left:auto;margin-right:auto;"><a href="#">
                            <div class="img"><img src="img/js.jpg" alt="img"></div>
                            <div class="info" style="padding-top: 20px; font-family: '微软雅黑 Light';background-color: #0d638f;">
                                <h3>数据API</h3>
                               <p>API of Data</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix" >
            <div class="col-md-12 column" >
                        <div class="row clearfix" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="col-md-8 column" style="font-size: large;padding-top: 20px;padding-bottom: 20px;">
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
                                <img class="img-circle" alt="140x140" src="img/share.png" />
                            </div>
                        </div>
            </div>
        </div>
        <div class="row clearfix" >
            <div class="col-md-12 column" >
                <div class="row clearfix" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="col-md-4 column" align="center" style="padding-top: 20px">
                        <img class="img-circle" alt="140x140" src="img/API.png" />
                    </div>
                    <div class="col-md-8 column"  style="font-size: large;padding-top: 20px;padding-bottom: 20px;">
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
            <div class="col-md-12 column" >
                <div class="row clearfix" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="col-md-8 column"  style="font-size: large;padding-top: 20px;padding-bottom: 20px;">
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
                    <div class="col-md-4 column"  align="center" style="padding-top: 20px">
                        <img  alt="140x140" src="img/biaoding.png" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix" style="background-color: #0d638f; color:#FFF">

            <div class="col-md-12 column"  style="padding-top: 20px">
                <div class="row clearfix" >
                    <div style="padding-right: 20px" align="right">
                        <p>
                            北京市海淀区中关村南大街5号
                        </p> <small>北京理工大学</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
