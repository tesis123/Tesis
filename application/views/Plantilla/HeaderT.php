<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $titulo ?> | Salud Publica</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()."assests/";?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()."assests/";?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url()."assests/";?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url()."assests/";?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()."assests/";?>/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()."assests/";?>/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assests/";?>/css/tabla.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-red sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="../Home" class="logo">
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Salud</b> Publica</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url()."assests/";?>dist/img/admin.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url()."assests/";?>dist/img/admin.png" class="img-circle" alt="User Image">

                  <p>
                    Admin - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
              
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Cerrar Sesion</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url()."assests/";?>dist/img/admin.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Admin</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
    
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Menu</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-heartbeat"></i> <span>Pacientes</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../Paciente/Index"><i class="fa fa-circle-o"></i> Mostrar</a></li>
              <li><a href="../Paciente/Agregar"><i class="fa fa-circle-o"></i> Agregar</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-github-alt"></i> <span>Perfiles</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../Perfil/Index"><i class="fa fa-circle-o"></i> Mostrar</a></li>
              <li><a href="../Perfil/Agregar"><i class="fa fa-circle-o"></i> Agregar</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Usuario</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../Usuario/Index"><i class="fa fa-circle-o"></i> Mostrar</a></li>
              <li><a href="../Usuario/Agregar"><i class="fa fa-circle-o"></i> Agregar</a></li>
            </ul>
          </li>
        
          <li class="header">REPORTES</li>
          <li><a href="../Reportes/Droguerias"><i class="fa fa-circle-o text-red"></i> <span>Zonas Afectadas</span></a></li>
          <li><a href="../Reportes/Enfermedades"><i class="fa fa-circle-o text-yellow"></i> <span>Enfermedades Frecuentes</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>