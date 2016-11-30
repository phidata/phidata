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
                            数据包审批
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
                   <div>
                       <p>ID：{{$data_package->id}}</p>
                       <p>名称：{{$data_package->name}}</p>
                       <p>描述：{{$data_package->description}}</p>
                       <p> <a href="{{ action('PackageController@adminDown',$data_package->id) }}" class="btn btn-xs blue">
                               <i class="fa fa-file-o"></i> 下载数据包
                           </a></p>
                       <p><a href="{{ action('ApplycationController@edit',$data_package->application_data_package->application_id) }}" class="btn btn-xs blue">
                              <i class="fa fa-file-o"></i> 同意
                       </a>
                           &nbsp;&nbsp;
                       <form  role="form" action="update" method="post" enctype="multipart/form-data" >
                           {{ csrf_field() }}
                           <div class="input-icon" style="display:inline-block">
                               <input name="reason" type="text" style="width: 300px; height: 30px">
                               <input name="id" type="hidden" value="{{$data_package->application_data_package->application_id}}">
                           </div>
                           <button type="submit" style="margin-left: -4px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">拒绝</button>

                       </form>
                       </p>
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection




