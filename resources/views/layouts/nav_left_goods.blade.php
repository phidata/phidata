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
            <li class="nav-item start {{ Request::segment(1) === 'statis' ? 'active' : null }}">
                <a href="/homePage" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">主页</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item  {{ (Request::segment(2) === 'create') ? 'active' : null }}">
                <a href="{{url('dataPackage/index')}}" >
                    <span class="title">数据包</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li class="nav-item  {{ (Request::segment(2) === 'create') ? 'active' : null }}">
                <a href="{{url('API/show_index')}}" >
                    API
                </a>
            </li>
            <li class="nav-item  {{ (Request::segment(2) === 'create') ? 'active' : null }}">
                <a href="{{action('Rating_taskController@showIndex')}}" class="nav-link ">
                    数据标定
                </a>
            </li>
            <li class="nav-item  {{ (Request::segment(2) === 'create') ? 'active' : null }}">
                <a href="{{url('user')}}" class="nav-link ">
                    个人中心
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>