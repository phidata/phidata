@extends('layouts.userCenter')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">

                        <i class="fa icon-docs font-green-sharp"></i>
                        <span class="caption-subject font-green-sharp bold uppercase">LL Good Y</span>
                        <span class="caption-helper">
                            个人消费记录
                        </span>

                        <div class="actions">
                        </div>
                        <br/>
                        <table class="table table-striped table-bordered table-hover dataTable no-footer">
                            <thead class="flip-content">
                            <tr style="border-bottom: 1px solid #e7ecf1;">
                                <th width="25%" class="numeric">购买项目</th>
                                <th width="25%" class="numeric">消费金额</th>
                                <th width="25%" class="numeric">消费时间</th>
                                <th width="25%" class="numeric">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                            <tr>

                                <td>{{ $record->consumption }}</td>
                                {{--<td>{{$User->password}}</td>--}}

                                {{--<td>--}}
                                {{--@if($User->password==bcrypt('1234'))1234--}}
                                {{--@endif--}}

                                {{--</td>--}}
                                <td>{{ $record->amount}}</td>
                                <td>{{ $record->created_at}}</td>
                                <td>
                                    <a href="{{ action('PointController@deleteRecord',$record->id) }}" class="btn btn-xs red">
                                        <i class="fa fa-file-o"></i> 删除该消费记录</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection