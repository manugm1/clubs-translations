<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Prueba @section('pagetitle') Portada @show</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  {!! Html::style('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  {!! Html::style('assets/bower_components/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('assets/bower_components/Ionicons/css/ionicons.min.css') !!}
  {!! Html::style('assets/dist/css/AdminLTE.min.css') !!}
  {!! Html::style('assets/dist/css/skins/skin-green.min.css') !!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

@yield('extracode')
</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>RB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Prueba</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              {!! Html::image('assets/dist/img/user2-160x160.jpg', 'User Image', ['class' => 'user-image']) !!}
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                {!! Html::image('assets/dist/img/user2-160x160.jpg', 'User Image', ['class' => 'user-image']) !!}
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  @include('menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @section('headercontent')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Portada
        <small>Página principal</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Portada</a></li>
        <li class="active">aquí</li>
      </ol>
    </section>
    @show
    @section('content')
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Aquí todo el contenido |
        -------------------------->

    </section>
    @show
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Prueba Laravel 5.5 (PHP7) + Bootstrap
    </div>
    <!-- Default to the left -->
    <strong>Prueba - <?=date('Y')?></strong>
  </footer> 
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
{!! Html::script('assets/bower_components/jquery/dist/jquery.min.js') !!}
{!! Html::script('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('assets/dist/js/adminlte.min.js') !!}
</body>
</html>
</html>