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
                           查看任务得分纪录
                        </span>
                    </div>
                    <div class="actions">

                    </div>



                    <table class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead class="flip-content">
                        <tr style="border-bottom: 1px solid #e7ecf1;">
                            <th class="numeric"> ID </th>
                            <th class="numeric">分数</th>
                            {{--<th class="numeric"></th>--}}
                            {{--<th class="numeric">住址</th>--}}
                            {{--<th width="30%" class="numeric">操作</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)


                            <tr>
                                <td>{{ $result->id }}</td>
                                {{--// <td>{{ $application-> }}</td>--}}
                                <td>{{ $result->point}}</td>
                                {{--<td>{{ $category->address }}</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection




