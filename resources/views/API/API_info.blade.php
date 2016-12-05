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
                            商品分类管理
                        </span>
          </div>
          <div class="actions">

          </div>

          <div class="portlet-body flip-scroll">
            <div class="row" style="margin:20px;">
            </div>
          </div>
<form role="form" action="test" method="post" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <p>
  <label for="textfield">名称:</label>
  <input type="text" name="name" id="textfield">
  </p>
  <p>
    <label for="textfield2">描述:</label>
    <input type="text" name="description" id="textfield2">
  </p>
  {{--<p>--}}
    {{--<label for="textfield3">Update_type</label>--}}
    {{--: --}}
    {{--<input type="text" name="update_type" id="textfield3">--}}
  {{--</p>--}}
  <p>
    <label for="textfield4">类型:</label>
    <input type="text" name="API_categrory" id="textfield4">
  </p>
  <p>
    <input type="file" name="photo" id="fileField">
  </p>
  <button  type="submit">提交</button>
</form>

        </div>
      </div>
    </div>
  </div>

@endsection
