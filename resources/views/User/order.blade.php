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
                                {{--<th class="numeric">密码</th>--}}
                                <th width="200" class="font-blue-sharp"><a href="{{url('user/myGoods')}}">已购买数据包</a></th>
                                <th width="200" class="font-blue-sharp"><a href="{{url('user/upload')}}">上传数据包</a></th>
                                <th width="200" class="font-blue-sharp"><a href="{{url('user/myApi')}}">拥有API</a></th>
                            </tr>
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">LL Good Y</span>
                        <span class="caption-helper">
                            已购买数据
                        </span>
                    </div>
                    <div class="actions">
                    </div>
                    <br/>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th width="15%" class="numeric">名称</th>
                            <th width="55%" class="numeric">描述</th>
                            <th width="15%" class="numeric">大小</th>
                            <th width="15%" class="numeric">价格</th>
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
                            <td>{{ $Order->goods->name }}</td>
                            <td>{{ $Order->goods->datapackage->description}}</td>
                            <td>{{ $Order->goods->size}}</td>
                            <td>{{ $Order->goods->price}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection