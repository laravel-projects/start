  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset(Auth::user()->img())}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->fullname() }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> {{ucfirst(trans('lib.online'))}}</a>
        </div>
      </div> 

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="header">&nbsp;</li>
        <li class="active"><a href="{{route('admin.dashboard')}}"><i class="fa fa-link"></i> <span>{{ucfirst(trans('lib.dasboard'))}}</span></a></li>
        <li class="header">{{ucfirst(trans('lib.config'))}}</li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <!--li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>