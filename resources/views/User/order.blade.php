@extends('layouts.system')
@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <table width="800" class="table table-striped table-hover dataTable no-footer">
                            <thead class="flip-content">
                            <tr style="border-bottom: 1px solid #e7ecf1;">
                                <th width="200" class="font-blue-sharp" ><a href="{{url('user')}}">个人信息</a></th>
                                <th width="200" class="font-blue-sharp"><a href="{{url('user/myGoods')}}">已购买商品</a></th>
                                <th width="200" class="font-blue-sharp"><a href="{{url('user/upload')}}">上传数据包</a></th>
                                <th width="200" class="font-blue-sharp"><a href="{{url('user/message')}}">消息查看</a></th>
                            </tr></table>
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">LL Good Y</span>
                        <span class="caption-helper">
                            已购买商品
                        </span>
                    </div>
                    <div class="actions">
                    </div>
                    <br/>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">

                            <th width="15%" class="numeric">商品名称</th>
                            <th width="15%" class="numeric">商品类型</th>
                            <th width="15%" class="numeric">价格</th>
                            <th width="15%" class="numeric">商品描述</th>
                            <th width="30%" class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>


                            {{--<td>--}}
                                {{--<a href="http://localhost:81/user/logout" class="btn btn-xs blue">--}}
                                    {{--<i class="fa fa-file-o"></i>--}}
                                    {{--登出--}}
                                {{--</a>--}}
                                {{--<a href="http://localhost:81/user/userUpdate"   class="btn btn-xs green">--}}
                                    {{--<i class="fa fa-trash"></i>--}}
                                    {{--修改密码--}}
                                {{--</a>--}}

                        @foreach($Orders as $Order)
                        <tr>
                            @if($Order->goods->type=="package")
                            <td>{{ $Order->goods->name }}</td>
                            <td>{{ $Order->goods->type}}</td>
                            <td>{{ $Order->goods->price}}</td>
                            <td>{{ $Order->goods->data_package->data_package->description}}</td>
                            <td> <a href="{{ action('PackageController@userDown',$Order->goods->id) }}" class="btn btn-xs blue">
                                    <i class="fa fa-file-o"></i> 下载
                                </a>
                            </td>
                            @else<td>{{ $Order->goods->name }}</td>
                                <td>{{ $Order->goods->type}}</td>
                                <td>{{ $Order->goods->price}}</td>
                                <td>{{ $Order->goods->api_goods->api_info->description}}</td>
                                <td><a href="{{ action('api_infoController@detail',$Order->goods->api_goods->api_info->id) }}" class="btn btn-xs blue">
                                    <i class="fa fa-file-o"></i> 使用API</a>
                                </td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection