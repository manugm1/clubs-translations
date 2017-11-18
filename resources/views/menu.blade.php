<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active">
          <a href="{{ URL::to('/') }}"><i class="fa fa-link"></i><span>Inicio</span></a>
        </li>
        <li>
          <a href="{{ URL::to('clubs') }}"><i class="fa fa-link"></i><span>Clubs</span></a>
        </li>
        <li class="treeview">
          <a href="{{ URL::to('languages') }}"><i class="fa fa-link"></i> <span>Idiomas</span></a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>