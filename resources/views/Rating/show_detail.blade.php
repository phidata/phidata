@extends('layouts.system')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Phidata</span>

                    </div>
                    <div class="actions">

                    </div>
                    <div class="container">
                        <hr>
                        <h1>标定任务详情</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3>Thumbnail label</h3>
                                        <div class="portlet-body form">
                                            <table class="table table-bordered table-striped table-condensed flip-content">
                                                <thead class="flip-content">
                                                <tr>
                                                    <th width="20%"> 属性 </th>
                                                    <th> 信息 </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>标定任务问题</td>
                                                    <td>{{ $detail->question }}</td>
                                                </tr>
                                                <tr>
                                                    <td>标定任务描述</td>
                                                    <td>{{ $detail->description }}</td>
                                                </tr>
                                                <tr>
                                                    <td>发起者</td>
                                                    <td>{{ $detail->user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>可获取的积分</td>
                                                    <td>{{ $detail->price }}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div align="center">
                                                <a href="{{action('Rating_taskController@answer',$detail->id)}}"><button style="margin-left: -4px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">帮助他标定</button></a>
                                                <a href="{{action('Rating_taskController@favor',$detail->id)}}"><button type="button" style="margin-left: 20px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">收藏该任务</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.payPassword')
@endsection





