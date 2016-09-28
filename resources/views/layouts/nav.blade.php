<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">O-chat</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class=""><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        @permission('manage-admins')
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/admin/user">用户</a></li>
            <li><a href="/admin/role">角色</a></li>
            <li><a href="/admin/permission">权限</a></li>
          </ul>
        </li>
        @endpermission
      </ul>

      <!-- <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->

      @if(Auth::check())
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">hello {{Auth::user()->name}}</a></li>
        <li><a href="/auth/logout">注销</a></li>
      </ul>
      
      @else 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/auth/login">登录</a></li>
        <li><a href="/auth/register">注册</a></li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>