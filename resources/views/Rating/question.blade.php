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
                            数据标定
                        </span>
                    </div>
                    <div class=container">
                       <div > <img src="../../{{$question->url}}" alt="{{$question->url}}"></div>
                            <form action="{{ action("Rating_taskController@answer_question") }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value={{$question->id}}>
                                <p>
                                    <label for="textfield">answer:</label>
                                    <input type="text" name="answer" id="textfield">
                                </p>
                                <button  type="submit">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
