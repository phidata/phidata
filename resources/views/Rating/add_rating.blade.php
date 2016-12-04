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
                            添加标定任务
                        </span>
                    </div>
                    <div class="actions">

                    </div>

                    <div class="portlet-body flip-scroll">
                        <div class="row" style="margin:20px;">
                            <div class="pull-right">
                                <form method="GET" action="#" >
                                    <div class="input-icon" style="display:inline-block">
                                        <i class="icon-magnifier" style="margin-top: 9px;"></i>
                                        <input name="search" type="text" class="form-control input-inline input-small input-sm" placeholder="关键词">
                                    </div>
                                    <button type="submit" style="margin-left: -4px;" class="table-group-action-input form-control input-inline input-sm btn btn-sm green">搜索</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <form role="form" action="add_task" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <p>
                            <label for="textfield">描述:</label>
                            <input type="text" name="description" id="textfield">
                        </p>
                        <p>
                            <label for="textfield2">问题:</label>
                            <input type="text" name="question" id="textfield2">
                        </p>
                        <p>
                            <label for="textfield2">种类:</label>
                            <input type="text" name="category_id" id="textfield2">
                        </p>
                        <p>
                            <label for="textfield4">价格:</label>
                            <input type="text" name="price" id="textfield4">
                        </p>
                        <p>
                            <label for="textfield4">DeadLine:</label>
                            <input type="text" name="deadline" id="textfield4">
                        </p>
                        <p>
                            <input type="file" name="file" id="fileField">
                        </p>
                        <button  type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
