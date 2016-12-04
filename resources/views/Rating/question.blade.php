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
                    <div class=container">

                    @foreach($results as $result)
                        {{$question}}
                       <div > <img src="../../{{$result->url}}" alt="123"></div>
                            <form role="form" action="add_answer" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="url" id="test" value="">
                                <p>
                                    <label for="textfield">answer:</label>
                                    <input type="text" name="description" id="textfield">
                                </p>
                                <button  type="submit">Submit</button>
                            </form>

                        @endforeach
                    </div>


                </div>
                <h3>{{ $results->links()}}</h3>
            </div>
        </div>
    </div>
<script>

    document.getElementById("test").value=window.location;
</script>
@endsection
