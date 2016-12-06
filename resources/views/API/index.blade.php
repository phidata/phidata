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
                            API制作
                        </span>
                    </div>
                    <div class="actions">

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
                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th class="numeric"> ID </th>
                            <th class="numeric"> 名称 </th>
                            <th class="numeric"> 类型 </th>
                            <th class="numeric">操作</th>
                            {{--<th class="numeric"></th>--}}
                            {{--<th class="numeric">住址</th>--}}
                            {{--<th width="30%" class="numeric">操作</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($flights as $flight)
                            <tr>
                                <td>{{ $flight->id }}</td>

                                {{--// <td>{{ $application-> }}</td>--}}
                                <td>{{ $flight->name}}</td>
                                <td>{{ $flight->categrory_id}}</td>
                                {{--<td>{{ $category->address }}</td>--}}
                                <td>
                                    <a href="add_info/{{ $flight->id }}"class="btn btn-xs blue">
                                    <i class="fa fa-file-o"></i> 制作
                                    </a>
                                    {{--<a href="{{ action('ApplycationController@show',$application->id) }}" class="btn btn-xs blue">--}}
                                        {{--<i class="fa fa-file-o"></i> 制作--}}
                                    {{--</a>--}}
                                    {{--<a type="button" class="btn default btn-xs red">--}}
                                    {{--<i class="fa fa-eraser">审批驳回</i> </a>--}}
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




