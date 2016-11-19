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
                            上传商品列表
                        </span>
                </div>
                <div class="actions">
                </div>
                <table class="table table-striped table-bordered table-hover dataTable no-footer">
                    <thead class="flip-content">
                    <tr style="border-bottom: 1px solid #e7ecf1;">
                        <th class="numeric">名称</th>
                        <th class="numeric">描述</th>
                        <th class="numeric">大小</th>
                        <th class="numeric">价格</th>
                        <th width="30%" class="numeric">审核状态</th>
                        <th width="30%" class="numeric">备注</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataPackages as $dataPackage)
                    <tr>
                        <td>{{ $dataPackage->name }}</td>
                        <td>{{ $dataPackage->description }}</td>
                        <td>{{ $dataPackage->size }}</td>
                        <td>{{ $dataPackage->price }}</td>
                        <td>{{ $dataPackage->application->type}}</td>
                        @if($dataPackage->application->status==2)<td>未审核</td>
                        @elseif($dataPackage->application->status==1)<td>审核通过</td>
                        @elseif($dataPackage->application->status==3)<td>审核驳回</td>
                        <td>驳回理由</td>
                        @else<td>状态错误</td>@endif
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection