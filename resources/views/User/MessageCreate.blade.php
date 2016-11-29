@extends('layouts.system')

@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-docs"></i>
                <span class="caption-subject font-sunglo bold uppercase">发送新的消息</span>
                <span class="caption-helper"></span>
            </div>
        </div>
        <div class="portlet-body form">
            <form action="{{ action('UserMessageController@store') }}" method="POST"  enctype="multipart/form-data" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">消息标题</label>
                        <div class="col-md-4">
                            <input type="text" name="topic" class="form-control" placeholder=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">发送对象</label>
                        <div class="col-md-4">
                            <select type="text" name="sender" class="form-control" placeholder=""/>
                                <option value ="all">所有用户</option>
                                @foreach($Users as $User)
                                <option value = {{ $User->id }}>{{ $User->id }} {{ $User->name }} {{ $User->email }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">消息内容</label>
                        <div class="col-md-4">
                            <textarea cols="50" rows="10" type="text" name="message" class="form-control" placeholder=""/>请输入要发送的消息内容</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">发送</button>
                            <button type="reset" class="btn default">重置</button>
                            <input type="hidden" name="method" value="add" />
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

@stop