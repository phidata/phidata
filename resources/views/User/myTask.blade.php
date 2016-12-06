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
                            已收藏标定任务
                        </span>
                    </div>
                    <div class="actions">
                    </div>
                    <br/>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th width="15%" class="numeric">名称</th>
                            <th width="15%" class="numeric">价格</th>
                            <th width="15%" class="numeric">价格</th>
                            <th width="15%" class="numeric">商品描述</th>
                            <th width="30%" class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Orders as $Order)
                            <tr>
                                @if($Order->goods->type=="数据包")
                                    <td>{{ $Order->goods->name }}</td>
                                    <td>{{ $Order->goods->type}}</td>
                                    <td>{{ $Order->goods->price}}</td>
                                    <td>{{ $Order->goods->data_package->data_package->description}}</td>
                                    <td> <a href="{{ action('PackageController@userDown',$Order->goods->id) }}" class="btn btn-xs blue">
                                            <i class="fa fa-file-o"></i> 下载
                                        </a>
                                    </td>
                                @else<td>{{ $Order->goods->name }}</td>
                                <td>{{ $Order->goods->type}}</td>
                                <td>{{ $Order->goods->price}}</td>
                                <td>{{ $Order->goods->api_goods->api_info->description}}</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection