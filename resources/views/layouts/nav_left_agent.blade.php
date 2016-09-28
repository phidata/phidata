
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start {{ Request::segment(1) === 'agStatis' ? 'active' : null }}">
                            <a href="{{url('/agStatis')}}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>



                        <li class="nav-item {{ (Request::segment(1) === 'agent') ? 'active' : null }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">账户管理</span>
                                <span class="arrow {{ (Request::segment(1) === 'agent') ? 'open' : null }}"></span>
                            </a>
                            <ul class="sub-menu">
                                        <li class="nav-item {{ (Request::segment(1) === 'agent' && Request::segment(3) != 'edit') ? 'active' : null }}">
                                            <a href="{{url('agent/'.\Auth::agent()->get()->id)}}" class="nav-link">
                                                <i class="icon-eye"></i> 查看个人信息</a>
                                        </li>
                                        <li class="nav-item {{ (Request::segment(1) === 'agent' && Request::segment(3) === 'edit') ? 'active' : null }}">
                                            <a href="{{url('agent/'.\Auth::agent()->get()->id.'/edit')}}" class="nav-link">
                                                <i class="icon-pencil"></i> 修改个人信息</a>
                                        </li>

                            </ul>
                        </li>

                        <li class="nav-item {{ (Request::segment(1) === 'appl') ? 'active' : null }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">区域申请</span>
                                <span class="arrow {{ (Request::segment(1) === 'appl') ? 'open' : null }}"></span>
                            </a>
                            <ul class="sub-menu">
                                        <li class="nav-item {{ (Request::segment(1) === 'appl' && Request::segment(2) === 'create') ? 'active' : null }}">
                                            <a href="/appl/create" class="nav-link">
                                                <i class="icon-pencil"></i> 添加申请</a>
                                        </li>
                                        <li class="nav-item {{ (Request::segment(1) === 'appl' && Request::segment(2) != 'create') ? 'active' : null }}">
                                            <a href="/appl" class="nav-link">
                                                <i class="icon-eye"></i> 查看申请</a>
                                        </li>
                            </ul>
                        </li>

                        @if(!is_null(\App\AgProfile::where('ag_account_id',\Auth::agent()->get()->id)->first()))
                        <li class="nav-item {{ (Request::segment(1) === 'appr') ? 'active' : null }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-camera"></i>
                                <span class="title">商户申请管理</span>
                                <span class="arrow {{ (Request::segment(1) === 'appr') ? 'open' : null }}"></span>
                            </a>
                            <ul class="sub-menu">
                                        <li class="nav-item {{ (Request::segment(1) === 'appr' && Request::segment(3) == 0) ? 'active' : null }}">
                                            <a href="/appr/listappl/0" class="nav-link">
                                                <i class="icon-eye"></i> 查看待审核列表</a>
                                        </li>

                                        <li class="nav-item {{ (Request::segment(1) === 'appr' && Request::segment(3) == 1) ? 'active' : null }}">
                                            <a href="/appr/listappl/1" class="nav-link">
                                                <i class="icon-eye"></i> 查看审核通过列表</a>
                                        </li>

                                        <li class="nav-item {{ (Request::segment(1) === 'appr' && Request::segment(3) == 2) ? 'active' : null }}">
                                            <a href="/appr/listappl/2" class="nav-link">
                                                <i class="icon-eye"></i> 查看审核驳回列表</a>
                                        </li>

                                        <li class="nav-item {{ (Request::segment(1) === 'appr' && Request::segment(3) == 3) ? 'active' : null }}">
                                            <a href="/appr/listappl/3" class="nav-link">
                                                <i class="icon-eye"></i> 查看全部申请列表</a>
                                        </li>
                            </ul>
                        </li>

                        <li class="nav-item {{ (Request::segment(1) === 'recycler') ? 'active' : null }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">商户信息管理</span>
                                <span class="arrow {{ (Request::segment(1) === 'recycler') ? 'open' : null }}"></span>
                            </a>
                            <ul class="sub-menu">

                                <li class="nav-item {{ Request::segment(1) === 'recycler' ? 'active' : null }}">
                                    <a href="{{ url('recycler') }}" class="nav-link">
                                        <i class="icon-eye"></i> 查看商户列表</a>
                                </li>

                            </ul>
                        </li>@endif



        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>


