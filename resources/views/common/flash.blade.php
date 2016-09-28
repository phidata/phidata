@extends('layouts.system')

{{--page that only display some messges--}}
{{--msgs is an array of messages--}}

@section('head')
<meta http-equiv="refresh" content="3; url={{ isset($redirect)?$redirect : '/' }}">
@endsection

@section('content')
@if (isset($msgs)&&count($msgs) > 0)
<div class="">
    <ul>
        @foreach ($msgs as $msg)
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <strong>Msg: </strong> {{$msg}}. </div>
        @endforeach
    </ul>
</div>
@endif
@endsection