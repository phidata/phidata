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
                            消息查看
                        </span>
                    </div>
                    <div class="actions">
                    </div>
                    <br/>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th width="15%" class="numeric">主题</th>
                            <th width="55%" class="numeric">内容</th>
                            <th width="55%" class="numeric">发布时间</th>
                            <th width="15%" class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($UserMessages as $UserMessage)
                            <tr>
                                <td>{{ $UserMessage->message->topic}}</td>
                                <td>{{ $UserMessage->message->message}}</td>
                                <td>{{ $UserMessage->message->created_at}}</td>
                                <td>
                                    <a href="{{ action('UserMessageController@deleteMessage',$UserMessage->id) }}" class="btn btn-xs blue">
                                    <i class="fa fa-file-o"></i> 删除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection