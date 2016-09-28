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
                <a href="{{url('/statis')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>

            <li class="nav-item  {{ (Request::segment(1) === 'user' || Request::segment(1) === 'permission' || Request::segment(1) === 'role') ? 'active' : null }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">系统管理</span>
                    <span class="arrow {{ (Request::segment(1) === 'user' || Request::segment(1) === 'permission' || Request::segment(1) === 'role') ? 'open' : null }}"></span>
                </a>

                <ul class="sub-menu">

                    <li class="nav-item  {{ (Request::segment(1) === 'user') ? 'active' : null }}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">用户管理</span>
                            <span class="arrow {{ (Request::segment(1) === 'user') ? 'open' : null }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  {{ (Request::segment(2) === 'create') ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-pencil"></i> 添加用户
                                </a>
                            </li>
                            <li class="nav-item {{ (Request::segment(1) === 'user' && Request::segment(2) != 'create') ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-eye"></i> 用户列表
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item  {{ (Request::segment(1) === 'role') ? 'active' : null }}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-layers"></i>
                            <span class="title">角色管理</span>
                            <span class="arrow {{ (Request::segment(1) === 'role') ? 'open' : null }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  {{ (Request::segment(2) === 'create') ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-pencil"></i> 添加角色
                                </a>
                            </li>
                            <li class="nav-item  {{ (Request::segment(1) === 'role' && Request::segment(2) != 'create') ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-eye"></i> 角色列表
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item  {{ (Request::segment(1) === 'permission') ? 'active' : null }}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-rocket"></i>权限管理
                            <span class="arrow {{ (Request::segment(1) === 'permission') ? 'open' : null }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item   {{ (Request::segment(2) === 'create') ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-pencil"></i> 添加权限</a>
                            </li>
                            <li class="nav-item  {{ (Request::segment(1) === 'permission' && Request::segment(2) != 'create') ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-eye"></i> 权限列表</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>



            <li class="nav-item {{ (Request::segment(1) === 'product' || Request::segment(1) === 'setting' ) ? 'active' : null }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-folder"></i>
                    <span class="title">系统配置</span>
                    <span class="arrow {{ (Request::segment(1) === 'product' || Request::segment(1) === 'setting' ) ? 'open' : null }}"></span>
                </a>

                <ul class="sub-menu">
                    <li class="nav-item {{(Request::segment(2) === 'area') ? 'active' : null }}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-layers"></i> 区域管理
                            <span class="arrow {{(Request::segment(2) === 'area') ? 'open' : null }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item {{(Request::segment(2) === 'area' && Request::segment(3) === 'create' ) ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-pencil"></i> 添加区域</a>
                            </li>
                            <li class="nav-item {{ (Request::segment(2) === 'area' && Request::segment(3) != 'create' ) ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-eye"></i> 查看区域列表</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item {{ (Request::segment(2) === 'category' ) ? 'active' : null }}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-docs"></i> 商品分类管理
                            <span class="arrow {{ (Request::segment(2) === 'category' ) ? 'open' : null }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item {{(Request::segment(2) === 'category' && Request::segment(3) === 'create' ) ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-pencil"></i> 添加商品分类</a>
                            </li>
                            <li class="nav-item {{ (Request::segment(2) === 'category' && Request::segment(3) != 'create' ) ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-eye"></i> 查看商品分类列表</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ (Request::segment(2) === 'product' ) ? 'active' : null }}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-camera"></i> 商品信息配置
                            <span class="arrow {{ (Request::segment(2) === 'product' ) ? 'open' : null }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item {{ (Request::segment(2) === 'product'  && Request::segment(3) === 'create' ) ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-pencil"></i> 添加分类商品价格</a>
                            </li>
                            <li class="nav-item {{ (Request::segment(2) === 'product'  && Request::segment(3) === null ) ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-eye"></i> 查看分类商品价格</a>
                            </li>
                        </ul>
                    </li>



                    <li class="nav-item {{ (Request::segment(2) === 'verifycode' ) ? 'active' : null }}">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-rocket"></i> 验证码管理
                            <span class="arrow {{ (Request::segment(2) === 'verifycode' ) ? 'open' : null }}"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item {{ (Request::segment(2) === 'verifycode'  && Request::segment(3) === 'create' ) ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-pencil"></i> 修改验证码</a>
                            </li>
                            <li class="nav-item {{ (Request::segment(2) === 'verifycode'  && Request::segment(3) != 'create' ) ? 'active' : null }}">
                                <a href="#" class="nav-link ">
                                    <i class="icon-eye"></i> 查看验证码记录</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>


        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>


