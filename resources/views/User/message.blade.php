@extends('layouts.system')
@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                            <i class="fa icon-docs font-green-sharp"></i>
                            <span class="caption-subject font-green-sharp bold uppercase">LL Good Y</span>
                        <span class="caption-helper">
                            接收消息查看
                        </span>
                    </div>
                    <div class="actions">
                    </div>
                    <br/>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th width="15%" class="numeric">发件人</th>
                            <th width="55%" class="numeric">内容</th>
                            <th width="15%" class="numeric">消息时间</th>
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
                        @foreach($userMessages as $userMessage)
                            <tr>
                                <td>{{ $userMessage->user->name }}</td>
                                <td>{{ $userMessage->message}}</td>
                                <td>{{ $userMessage->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection