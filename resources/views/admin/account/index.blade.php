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
                            用户列表
                        </span>
                    </div>
                    <div class="actions">
                        <a href="{{action('admin\AccountController@create')}}" class="btn btn-default btn-circle">
                            <i class="fa fa-plus"></i>
                            <span class="hidden-480">添加区域</span>
                        </a>
                    </div>

                    <div class="portlet-body flip-scroll">
                        <div class="row" style="margin:20px;">
                            <div class="pull-right">
                                <form method="GET" action="#" >
                                    <div class="input-icon" style="display:inline-block">
                                        <i class="icon-magnifier" style="margin-top: 9px;"></i>
                                        <input name="search" type="text" class="form-control input-inline input-small input-sm" placeholder="关键词">
                                    </div>
                                    <button type="submit" style="margin-left: -4px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">搜索</button>

                                </form>
                            </div>

                            {{--<div class="pull-left">--}}
                            {{--{!! $accounts->appends(Request::except('page'))->render() !!}--}}
                            {{--</div>--}}
                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th class="numeric"> ID </th>
                            <th class="numeric">用户名</th>
                            <th class="numeric">状态</th>
                            <th width="30%" class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($accounts as $account)
                            <tr>
                                <td>{{ $account->id }}</td>
                                <td>{{ $account->name }}</td>
                                <td>@if($account->status==1)正常
                                    @else冻结@endif
                                </td>
                                <td>
                                    <a href="#"class="btn btn-xs green">
                                        <i class="fa fa-file-o"></i> 详细信息
                                    </a>

                                    <a type='button' class="btn btn-xs red">
                                        <i class="fa fa-file-o"></i> 删除
                                    </a>

                                    <a href="#"   class="btn btn-xs blue">
                                        <i class="fa fa-trash"></i> 修改
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    {{--<!-- /.modal -->--}}
    {{--<div class="modal fade" id="ensure" tabindex="-1" role="dialog"--}}
         {{--aria-labelledby="myModalLabel" aria-hidden="true">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h4 class="modal-title" id="myModalLabel">--}}
                        {{--区域代理商审核--}}
                    {{--</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--确认通过该区域代理商申请?--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default"--}}
                            {{--data-dismiss="modal">取消--}}
                    {{--</button>--}}
                    {{--<a id="approve" type="button" href='#' class="btn btn-primary" >--}}
                        {{--确认--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div><!-- /.modal-content -->--}}
        {{--</div>--}}
    {{--</div><!-- /.modal -->--}}

    {{--<!-- /.modal -->--}}
    {{--<div class="modal fade" id="reject" tabindex="-1" role="dialog"--}}
         {{--aria-labelledby="myModalLabel" aria-hidden="false">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h4 class="modal-title" id="myModalLabel">--}}
                        {{--区域代理商审核--}}
                    {{--</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<form id="reason" action="#" >--}}
                        {{--<div class="row">--}}
                            {{--<h5 style="float:left;margin-left:20px;margin-top:5px;margin-right:5px">请填写驳回理由:</h5>--}}
                            {{--<div align="center"style="float:left"><input name="reason" type="text" class="col-md-12 form-control" style="width:400px;height:25px;"/></div>--}}
                        {{--</div>--}}

                        {{--<div class="modal-footer">--}}
                            {{--<button type="button" class="btn btn-default"--}}
                                    {{--data-dismiss="modal">取消--}}
                            {{--</button>--}}
                            {{--<button type="submit" class="btn btn-primary" >--}}
                                {{--确认--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div><!-- /.modal-content -->--}}
            {{--</div>--}}
        {{--</div><!-- /.modal -->--}}
@endsection




