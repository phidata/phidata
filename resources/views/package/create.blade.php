@extends('layouts.system')

@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-docs"></i>
                <span class="caption-subject font-sunglo bold uppercase">上传数据包</span>
                <span class="caption-helper"></span>
            </div>
        </div>
        <div class="portlet-body form">
            <form action="{{ action('PackageController@store') }}" method="POST"  class="form-horizontal" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">名称</label>
                        <div class="col-md-4">
                            <input type="text" name="name" class="form-control" placeholder=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">描述</label>
                        <div class="col-md-4">
                            <input type="text" name="description" class="form-control" placeholder=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">价格</label>
                        <div class="col-md-4">
                            <input type="text" name="price" class="form-control" placeholder=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">选择文件</label>
                        <div class="col-md-4">
                            <input type="file" name="package" class="form-control" placeholder=""/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">保存</button>
                            <button type="reset" class="btn default">重置</button>
                            <input type="hidden" name="method" value="add" />
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
@stop