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
                            积分账单
                            积分账户
                        </span>
                    </div>
                    <div class="actions">

                    </div>

                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th class="numeric">时间</th>
                            <th class="numeric">金额</th>
                            <th class="numeric">项目</th>
                            <th class="numeric">账户余额</th>
                            <th width="30%" class="numeric">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record)
                            <tr>
                                <td>{{ $record->created_at }}</td>
                                <td>{{ $record->amount }}</td>
                                <td>{{ $record->consumption }}</td>
                                <td>
                                    <a href='' class="btn btn-xs blue">
                                        <i class="fa fa-file-o"></i> 充值
                                    </a>

                        @foreach($points as $point)
                            <tr>
                                <td>{{ $point->amount }}</td>

                                    <a href=""   class="btn btn-xs green">
                                        <i class="fa fa-file-o"></i> 查看账单
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


    <!-- /.modal -->
    <div class="modal fade" id="ensure" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                        区域代理商审核
                    </h4>
                </div>
                <div class="modal-body">
                    确认通过该区域代理商申请?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">取消
                    </button>
                    <a id="approve" type="button" href='#' class="btn btn-primary" >
                        确认
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </div><!-- /.modal -->

    <!-- /.modal -->
    <div class="modal fade" id="reject" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">
                        区域代理商审核
                    </h4>
                </div>
                <div class="modal-body">
                    <form id="reason" action="#" >
                        <div class="row">
                            <h5 style="float:left;margin-left:20px;margin-top:5px;margin-right:5px">请填写驳回理由:</h5>
                            <div align="center"style="float:left"><input name="reason" type="text" class="col-md-12 form-control" style="width:400px;height:25px;"/></div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">取消
                            </button>
                            <button type="submit" class="btn btn-primary" >
                                确认
                            </button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div>
        </div><!-- /.modal -->
@endsection




