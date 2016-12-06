@extends('layouts.system')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Phidata</span>
                        <span class="caption-helper">
                            标定任务结果
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
                    <div class="bs-example">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">

<<<<<<< HEAD
=======
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
                                    <h3 class="navbar-text">您发布的标定任务已生成结果文件</h3>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
                                    <h5 class="navbar-text">请您点击下方按钮查看</h5>
                                </div>
                                <div align="center">
                                    <a href="{{action('Rating_taskController@result_down',$filename)}}"><button type="submit" style="margin-left: -4px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">查看结果</button></a>
                                </div>
                            </div>
                        </nav>
                    </div>
>>>>>>> ff8e5a903d76c304430e9bb54ce1ea0aedfe1071

                </div>
            </div>
        </div>
    </div>

@stop





