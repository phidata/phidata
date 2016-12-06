@extends('layouts.system')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">Phidata</span>

                    </div>
                    <div class="actions">

                    </div>

                    <div class="container">


                        <hr>

                        <h1>数据详情</h1>

                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="thumbnail">

                                    <div class="caption">
                                        <h3>商品详情</h3>
                                        <div class="portlet-body form">
                                            <table class="table table-bordered table-striped table-condensed flip-content">
                                                <thead class="flip-content">
                                                <tr>
                                                    <th width="20%"> 属性 </th>
                                                    <th> 信息 </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>名称</td>
                                                    <td>{{ $detail->goods->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>大小</td>
                                                    <td>{{ $detail->data_package->size }}</td>
                                                </tr>
                                                <tr>
                                                    <td>价格</td>
                                                    <td>{{ $detail->goods->price }}</td>
                                                </tr>
                                                <tr>
                                                    <td>作者</td>
                                                    <td>{{ $detail->data_package->user->name }}</td>
                                                </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                        <p align="center"><a onclick="showModel({{ $goodsId }})" class="btn btn-primary" role="button">购买</a> </p>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.payPassword')
@endsection





