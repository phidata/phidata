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
                                <th width="180" class="font-blue-sharp" ><a href="{{url('user')}}">个人信息</a></th>
                                <th width="180" class="font-blue-sharp"><a href="{{url('user/myGoods')}}">已购买商品</a></th>
                                <th width="180" class="font-blue-sharp"><a href="{{url('user/upload')}}">上传数据包</a></th>
                                <th width="250" class="font-blue-sharp"><a href="{{url('Rating/index')}}">已收藏标定任务</a></th>
                                <th width="250" class="font-blue-sharp"><a href="{{url('Rating/point')}}">标定任务所得积分</a></th>
                                <th width="250" class="font-blue-sharp"><a href="{{action('Rating_taskController@result',$User->id)}}">标定任务结果下载</a></th>
                                <th width="180" class="font-blue-sharp"><a href="{{url('user/message')}}">消息查看</a></th>
                            </tr></table>
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">LL Good Y</span>
                        <span class="caption-helper">
                            账户中心
                        </span>

                    <div class="actions">
                    </div>
                            <br/>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th width="10%" class="numeric">用户名</th>
                            {{--<th class="numeric">密码</th>--}}
                            <th width="40%" class="numeric">电子邮箱</th>
                            <th width="10%" class="numeric">积分</th>
                            <th width="40%" class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $User->name }}</td>
                                {{--<td>{{$User->password}}</td>--}}

                                {{--<td>--}}
                                    {{--@if($User->password==bcrypt('1234'))1234--}}
                                        {{--@endif--}}

                                {{--</td>--}}
                                <td>{{ $User->email}}</td>
                                <td>{{ $User->user_point->amount}}</td>
                                <td>
                                    <a href="{{url('user/userUpdate')}}"   class="btn btn-xs blue">
                                        修改登录密码
                                    </a>
                                    <a href="{{url('point/changePassword')}}"   class="btn btn-xs yellow">
                                        修改支付密码
                                    </a>
                                    <a href="{{url('point/record')}}"   class="btn btn-xs green">
                                        查看消费记录
                                    </a>
                                    <a href="#"   class="btn btn-xs red">
                                        充值
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


