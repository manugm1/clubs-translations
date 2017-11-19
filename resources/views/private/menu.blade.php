<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active">
          <a href="{{ URL::to('private/') }}"><i class="fa fa-link"></i><span>{{trans('private.welcome')}}</span></a>
        </li>
        <li>
          <a href="{{ URL::to('private/clubs') }}"><i class="fa fa-link"></i><span>{{trans('private.clubs')}}</span></a>
        </li>
        <li>
          <a href="{{ URL::to('private/languages') }}"><i class="fa fa-link"></i> <span>{{trans('private.languages')}}</span></a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>