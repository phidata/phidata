
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
            <li class="nav-item start active open">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <!--                                 <span class="selected"></span>
                     -->                            </a>
            </li>


            @if(!\Auth::commonuser()->guest())
                <li class="nav-item {{ (Request::segment(1) === 'commonuser') ? 'active' : null }}">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-user"></i>
                        <span class="title">账户管理</span>
                        <span class="arrow "></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item {{ (Request::segment(1) === 'commonuser' && Request::segment(3) != 'edit') ? 'active' : null }}">
                            <a href="{{url('commonuser/'.\Auth::commonuser()->get()->id)}}" class="nav-link">
                                <i class="icon-eye"></i> 查看个人信息</a>
                        </li>
                        <li class="nav-item {{ (Request::segment(1) === 'commonuser' && Request::segment(3) === 'edit') ? 'active' : null }}">
                            <a href="{{url('commonuser/'.\Auth::commonuser()->get()->id.'/edit')}}" class="nav-link">
                                <i class="icon-settings"></i> 修改个人信息</a>
                        </li>

                    </ul>
                </li>
            @endif



        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>


