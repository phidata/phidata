@extends('layouts.blank')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Phidata</span>

                    </div>
                    <div class="actions">

                    </div>
                    <div class="container">
                        <hr>
                        <h1>API详情</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="thumbnail">
                                    <div class="caption">

                                        <div class="portlet-body form">
                                            <table class="table table-bordered table-striped table-condensed flip-content">
                                                <thead class="flip-content">
                                                <tr>
                                                    <th width="20%"> 属性 </th>
                                                    <th> 信息 </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>API名称</td>
                                                    <td>{{ $detail->goods->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>API描述</td>
                                                    <td>{{ $detail->api_info->description }}</td>
                                                </tr>
                                                <tr>
                                                    <td>API价格</td>
                                                    <td>{{ $detail->goods->price }}</td>
                                                </tr>
                                                <tr>
                                                    <a href="{{url("API/info")}}"><button>使用API查询</button></a>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <form  enctype="multipart/form-data">

                                                <fieldset>
                                                    <legend>API详细描述</legend>
                                                    详述:{{$api_des->description}}
                                                </fieldset>
                                                <fieldset>
                                                    <legend>接口信息</legend>
                                                    请求方式：{{$interfaces->request_way}}
                                                    <br>
                                                    接口地址：{{$interfaces->interface_add}}
                                                    样例地址：{{$interfaces->exam_add}}
                                                    返回格式：{{$interfaces->return_format}}
                                                </fieldset>
                                                <fieldset>
                                                    <legend>参数信息</legend>
                                                    参数项目：{{$interface_info->parameter_item}}<br>
                                                    参数说明：{{$interface_info->parameter_name}}<br>
                                                    参数类型：{{$interface_info->parameter_type}}<br>
                                                    参数样例：{{$interface_info->parameter_type}}<br>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>返回项目信息</legend>
                                                    返回项目：{{$data_info->item_return}}<br>
                                                    项目说明：{{$data_info->item_name}}<br>
                                                    项目样例：{{$data_info->item_exam}}<br>
                                                </fieldset>
                                            </form>
                                        </div>
                                        @if($verifycode=='no')
                                        <p align="center"><a onclick="showModel({{ $goodsId }})" class="btn btn-primary" role="button">购买</a> </p>
                                            @else
                                        <h2>您的API验证码：{{$verifycode}}</h2>
                                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.payPassword')
@endsection





