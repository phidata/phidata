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
                            已购买数据
                        </span>
                    </div>
                    <div class="actions">
                    </div>
                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th class="numeric">购买商品名称</th>
                            <th width="30%" class="numeric">价格</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Orders as $Order)
                        <tr>
                            <td>{{ $Order->goods->name }}</td>
                            <td>{{ $Order->goods->price}}</td>
                            {{--<td>--}}
                                {{--<a href="http://localhost:81/user/logout" class="btn btn-xs blue">--}}
                                    {{--<i class="fa fa-file-o"></i>--}}
                                    {{--登出--}}
                                {{--</a>--}}
                                {{--<a href="http://localhost:81/user/userUpdate"   class="btn btn-xs green">--}}
                                    {{--<i class="fa fa-trash"></i>--}}
                                    {{--修改密码--}}
                                {{--</a>--}}
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection