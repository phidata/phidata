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
                        <h1>API详情</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3>Thumbnail label</h3>
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
                                                    <td>API名称</td>
                                                    <td>{{ $detail->goods->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>API描述</td>
                                                    <td>{{ $detail->api_info->description }}</td>
                                                </tr>
                                                <tr>
                                                    <td>API价格</td>
                                                    <td>{{ $detail->goods->price }}</td>
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





