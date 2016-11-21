@extends('layouts.system')
@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-docs"></i>
                <span class="caption-subject font-sunglo bold uppercase">请修改您的支付密码</span>
                <span class="caption-helper"></span>
            </div>
        </div>
        <div class="portlet-body form">
            <form action="{{ action('PointController@modify') }}" method="POST"  enctype="multipart/form-data" class="form-horizontal">
                {!! csrf_field() !!}
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">您的旧密码为</label>
                        <div class="col-md-4">
                            <input type="password" name="oldPassword" id="oldPassword" class="form-control" placeholder="" required="required" maxlength="15"  />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">您的新密码为</label>
                        <div class="col-md-4">
                            <input type="password" name="password" id="password" class="form-control" placeholder="" required="required" maxlength="15"  />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">确认您的密码</label>
                        <div class="col-md-4">
                            <input type="password" name="passwordconfirm" id="passwordconfirm" class="form-control" placeholder="" required="required" maxlength="15" />
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button  onclick="check()" type="submit" class="btn green" >保存</button>
                            <button type="reset" class="btn default">重置</button>
                            <input type="hidden" name="method" value="add" />
                            <script>
                                function check()
                                {
                                    with(document.all){
                                        if(password.value!=passwordconfirm.value)
                                        {
                                            alert("两次输入的密码不同请重新输入");
                                            password.value = "";
                                            passwordconfirm.value = "";
                                        }
                                        else
                                        {
                                            document.forms[0].submit();
                                        }
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>

@endsection

