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
                            添加API信息
                        </span>

                    </div>

                    <div class="actions">
                    </div>
                    <br><br>
                        <form role="form" action="../add" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <legend>API详细描述</legend>
                                详述: <textarea rows="10" cols="30" name="api_des"></textarea>
                            </fieldset>
                            <fieldset>
                                <legend>接口信息</legend>
                                请求方式：<input type="text" name="request_way"><br>
                                <br>
                                接口地址：<input type="text" name="interface_add"><br><br>
                                样例地址：<input type="text" name="exam_add"><br><br>
                                返回格式：<input type="text" name="return_format"><br><br>
                            </fieldset>
                            <fieldset>
                                <legend>参数信息</legend>
                                参数项目：<input type="text" name="parameter_item"><br><br>
                                参数说明：<input type="text" name="parameter_name"><br><br>
                                参数类型：<input type="text" name="parameter_type"><br><br>
                                参数样例：<input type="text" name="parameter_exam"><br><br>
                            </fieldset>
                            <fieldset>
                                <legend>返回项目信息</legend>
                                返回项目：<input type="text" name="item_return"><br><br>
                                项目说明：<input type="text" name="item_name"><br><br>
                                项目样例：<input type="text" name="item_exam"><br><br>

                                <input type="hidden" name="info_id" value="{{$id}}">
                            </fieldset>
                            <button  type="submit">Submit</button>
                        </form>

                </div>
            </div>
        </div>
    </div>

@endsection




