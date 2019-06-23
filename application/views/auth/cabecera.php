<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nomina</title>
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/Ionicons/css/ionicons.min.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/bootstrap-daterangepicker/daterangepicker.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/plugins/iCheck/all.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/plugins/timepicker/bootstrap-timepicker.min.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/select2/dist/css/select2.min.css'); ?>">	
        <link rel="stylesheet" href="<?= site_url('resources/dist/css/AdminLTE.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/dist/css/skins/_all-skins.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/morris.js/morris.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/jvectormap/jquery-jvectormap.css'); ?>">
        <link rel="stylesheet" href="<?= site_url('resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

        <link rel="stylesheet" href="<?= site_url('resources/bower_components/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css'); ?>">


        <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('apple-icon-57x57.png') ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('apple-icon-60x60.png') ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('apple-icon-72x72.png') ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('apple-icon-76x76.png') ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('apple-icon-114x114.png') ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('apple-icon-120x120.png') ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('apple-icon-144x144.png') ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('apple-icon-152x152.png') ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('apple-icon-180x180.png') ?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url('android-icon-192x192.png') ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('favicon-32x32.png') ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('favicon-96x96.png') ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('favicon-16x16.png') ?>">
        <link rel="manifest" href="<?= base_url('manifest.json') ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= base_url('ms-icon-144x144.png') ?>">
        <meta name="theme-color" content="#ffffff">

        <!--        <link href="../css/" rel="stylesheet" media="screen">-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <span class="logo-mini">Nomina</span>
                    <span class="logo-lg">Nomina</span>
                </a>
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown messages-menu">
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu">
                                            <li><!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">

                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">

                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">

                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">

                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">

                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <!-- Notifications: style can be found in dropdown.less -->

                            <!-- Tasks: style can be found in dropdown.less -->

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <!--                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                   <span class="hidden-xs">Alexander Pierce</span>
                                                                </a>-->
                                <a class="dropdown-toggle" href="<?= base_url('Auth/logout') ?>">
                                    <span class="hidden-xs">Cerrar Sesión</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
<!--                                       <p>
                                            Alexander Pierce - Programador
                                            <small>Member since Nov. 2018</small>
                                        </p>-->

                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= site_url('resources/dist/img/logo.png'); ?>"  alt="Logo">
                        </div>
                        <div class="pull-left info">
                            <p></p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->




                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?= site_url(); ?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li  class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i> <span>Diario</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?= site_url('diario/add'); ?>"><i class="fa fa-plus"></i>Añadir</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('diario/index'); ?>"><i class="fa fa-list-ul"></i>Lista</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('diario/ventana_cierre'); ?>"><i class="fa fa-clock-o"></i>Cierre</a>
                                </li>
                            </ul>
                        </li>
                        <!--                        <li class="treeview">
                                                    <a href="#">
                                                        <i class="fa fa-car"></i> <span>Dias Festivo</span>
                                                        <span class="pull-right-container">
                                                            <i class="fa fa-angle-left pull-right"></i>
                                                    </a>
                                                    <ul class="treeview-menu">
                                                        <li class="active">
                                                            <a href="<?= site_url('dias_festivo/add'); ?>"><i class="fa fa-plus"></i>Añadir</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= site_url('dias_festivo/index'); ?>"><i class="fa fa-list-ul"></i>Lista</a>
                                                        </li>
                                                    </ul>
                                                </li>-->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Orden Trabajo</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?= site_url('orden_trabajo/add'); ?>"><i class="fa fa-plus"></i>Añadir</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('orden_trabajo/index'); ?>"><i class="fa fa-list-ul"></i>Lista</a>
                                </li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Parametro</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?= site_url('tbparametro/add'); ?>"><i class="fa fa-plus"></i>Añadir</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('tbparametro/index'); ?>"><i class="fa fa-list-ul"></i>Lista</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Tb Usuario</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?= site_url('tb_usuario/add'); ?>"><i class="fa fa-plus"></i>Añadir</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('tb_usuario/index'); ?>"><i class="fa fa-list-ul"></i>Lista</a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user-times"></i> <span>Trabajadores</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?= site_url('trabajadore/add'); ?>"><i class="fa fa-plus"></i> Añadir</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('trabajadore/index'); ?>"><i class="fa fa-list-ul"></i> Listado</a>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user-times"></i> <span>Reportes</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                    <a href="<?= site_url('reportes/nomina'); ?>"><i class="fa fa-plus"></i> Nomina</a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    
                    