@extends('layouts.blank')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Phidata</span>
                        <span class="caption-helper">
                            数据标定任务
                        </span>
                    </div>
                    <div class="actions">

                    </div>

                    <div class="portlet-body flip-scroll">
                        <div class="row" style="margin:20px;">
                            <div class="pull-right">
                                <form action="{{ action('SearchController@rt_search') }}" method="POST"  enctype="multipart/form-data" class="form-horizontal">
                                    {!! csrf_field() !!}
                                    <div class="input-icon" style="display:inline-block">
                                        <i class="icon-magnifier" style="margin-top: 9px;"></i>
                                        <input name="key" type="text" class="form-control input-inline input-small input-sm" placeholder="关键词">
                                    </div>
                                    <button type="submit" style="margin-left: -4px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">搜索</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div>
                        @foreach($tasks as $task)

                            <div id="div" style="height: 100%;width: 100%;background-color: #9ae3e9" onclick="javasecipt:location.href='{{url('Rating/show_detail/'.$task->id)}}'" >
                                <h3>{{$task->question}}</h3>
                                <div style="float: left; height:100%;width: 25%">类别：{{$task->category_rating_task->name}}</div>
                                <div style="float: left; height:100%;width: 25%">价格：{{$task->price}}</div><br/>
                                <div style="float: left; height:100%;width: 25%">描述：{{$task->description}}</div><br/>

                            </div>
                            <div style="height: 20px;width: 100%; hidden:hidden"></div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop





