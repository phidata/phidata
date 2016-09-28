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