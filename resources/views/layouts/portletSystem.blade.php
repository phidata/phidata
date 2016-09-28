@extends('layouts.system')

@section('content')
    <div class="row">

            <div class="portlet light">
                <div class="portlet-title">

                        @yield('portlet-title')

                </div>

                <div class="portlet-body">

                    @yield('portlet-body')
                </div>
            </div>

    </div>
@endsection