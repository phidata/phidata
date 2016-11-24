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
                         API调用
                        </span>
                    </div>
                    <div class="actions">

                    </div>

                    <div class="portlet-body flip-scroll">
                        <div class="row" style="margin:20px;">
                            <div class="pull-right">

                            </div>
                        </div>
                    </div>
                    <div style="margin: inherit;padding-left: 400px">
                        <form method="post" action="info_select" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input name="search" type="text" class="form-control input-inline input-small input-sm" placeholder="快递单号">

                            <button type="submit" style="margin-left: -4px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">搜索</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
