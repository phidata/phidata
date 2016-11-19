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
                            商品分类管理
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
                            <th class="numeric"> 父级ID </th>
                            <th class="numeric">名称</th>
                            {{--<th class="numeric"></th>--}}
                            {{--<th class="numeric">住址</th>--}}
                            <th width="30%" class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($categorys as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->parent_id }}</td>
                                <td>{{ $category->name }}</td>
                                {{--<td>{{ $category->email }}</td>--}}
                                {{--<td>{{ $category->address }}</td>--}}
                                <td>
                                    {{--<a href="#"class="btn btn-xs blue">--}}
                                    {{--<i class="fa fa-file-o"></i> 查看详情--}}
                                    {{--</a>--}}
                                    <a href="{{ action('CategoryController@delete',$category->id) }}" class="btn btn-xs blue">
                                        <i class="fa fa-file-o"></i> 删除
                                    </a>
                                    {{--<a type="button" class="btn default btn-xs red">--}}
                                    {{--<i class="fa fa-eraser">审批驳回</i> </a>--}}


                                    <a href="{{ action('CategoryController@change',$category->id) }}"   class="btn btn-xs green">
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
@endsection




