<!-- /.modal -->
<div class="modal fade" id="model" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    积分支付
                </h4>
            </div>
            <div class="modal-body">
                请输入支付密码</br>
            </div>
                <form action="#" method="POST"  enctype="multipart/form-data" class="form-horizontal">
                    {!! csrf_field() !!}
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-md-4">
                                <input id="password" name="password" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"
                                            data-dismiss="modal">取消
                                    </button>
                                    <button id="pay" type="submit" class="btn btn-primary" >
                                        确认
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal -->
<script type="text/javascript">
    function showModel(goods_id){
        //调用modal框
        $(function () {
            $('#model').modal({
            keyboard: true
            });
            $('form').attr('action','order/generate/'+goods_id);
        });
    }
</script>