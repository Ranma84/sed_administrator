<!DOCTYPE html>
<html>
    <head>
<!--        <meta charset="utf-8">-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>sed</title>
        <meta http-equiv="Content-Type" content="text/html" charset=utf-8"/> 
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

        <script src="<?= site_url('resources/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/raphael/raphael.min.js'); ?>"></script>
        <script src="<?= site_url('resources/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
        <script src="<?= site_url('resources/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
        <script src="<?= site_url('resources/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/raphael/raphael.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/morris.js/morris.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
        <script src="<?= site_url('resources/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
        <script src="<?= site_url('resources/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/moment/min/moment.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
        <script src="<?= site_url('resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
        <script src="<?= site_url('resources/dist/js/adminlte.min.js'); ?>"></script>
        <script src="<?= site_url('resources/dist/js/demo.js'); ?>"></script>
        <script src="<?= site_url('resources/dist/js/bootstrap-datetimepicker.es.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'); ?>"></script>
        <script src="<?= site_url('resources/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
        <script src="<?= site_url('resources/plugins/iCheck/icheck.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js'); ?>"></script>
        <script src="<?= site_url('resources/bower_components/bootstrap-datetimepicker-master/js/locales/bootstrap-datetimepicker.es.js'); ?>"></script>
<!--        <script src="<?= site_url('resources/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>-->

    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">sed</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">sed</span>
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
                                    <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
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
                            <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view('layouts/menu');
                    ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>GenieSolutions</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
    </body>
</html>
