@extends('layouts.userCenter')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">LL Good Y</span>
                        <span class="caption-helper">
                           查看已收藏任务列表
                        </span>
                        <a href="{{action("Rating_taskController@showIndex")}}"><button>我要收藏任务</button></a>
                    </div>
                    <div class="actions">

                    </div>



                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th class="numeric"> ID </th>
                            <th class="numeric"> 任务描述 </th>
                            <th class="numeric"> 问题 </th>
                            <th class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{ $result->id }}</td>
                                <td>{{ $result->rating_task->description}}</td>
                                <td>{{ $result->rating_task->question}}</td>
                                <td>
                                    <a href="{{action('Rating_taskController@detail',$result->rating_task_id)}}" class="btn btn-xs blue">
                                        <i class="fa fa-file-o"></i> 开始任务
                                    </a>
                                    <a href="{{action('Rating_taskController@favorDelete',$result->id)}}" class="btn btn-xs red">
                                        <i class="fa fa-file-o"></i> 删除该收藏任务
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




