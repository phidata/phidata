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
                            数据包查询
                        </span>
                    </div>
                    <div class="actions">

                    </div>

                    <div class="portlet-body flip-scroll">
                        <div class="row" style="margin:20px;">
                            <div class="pull-right">
                                <form action="{{ action('SearchController@dp_search') }}" method="POST"  enctype="multipart/form-data" class="form-horizontal">
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

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
                                    <h3 class="navbar-text">您未找到任何数据</h3>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-4">
                                    <h5 class="navbar-text">是否提交请求</h5>
                                </div>
                                <div align="center">
                                    <form method="post" action="{{ action('DataPackageController@dp_request',$key)}}">
                                        {!! csrf_field() !!}
                                        <input type="text" value="{{$user->id}}" style="visibility: hidden"  class="form-control"  />
                                    <a ><button type="submit" style="margin-left: -4px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">是，我需要</button></a>
                                    <a href="{{url('/dataPackage/index')}}"><button type="button" style="margin-left: 20px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">不，下次吧</button></a>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop





