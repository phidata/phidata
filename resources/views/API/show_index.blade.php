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
                            API列表
                        </span>
                    </div>
                    <div class="actions">

                    </div>

                    <div class="portlet-body flip-scroll">
                        <div class="row" style="margin:20px;">
                            <div class="pull-right">
                                <form action="{{ action('SearchController@api_search') }}" method="POST"  enctype="multipart/form-data" class="form-horizontal">
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
                        @foreach($goods as $good)

                            <div id="div" style="height: 100%;width: 100%;background-color: #9ae3e9" onclick="javasecipt:location.href='{{url('API/show_detail/'.$good->api_info->id)}}'">
                                <h3>{{$good->api_info->name}}</h3>
                                <div style="float: left; height:100%;width: 25%">类别：{{$good->goods->type}}</div>
                                <div style="float: left; height:100%;width: 25%">价格：{{$good->price}}</div><br/>
                                <div style="float: left; height:100%;width: 25%">描述：{{$good->api_info->description}}</div><br/>

                            </div>
                            <div style="height: 20px;width: 100%; hidden:hidden"></div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop





