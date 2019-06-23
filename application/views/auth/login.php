<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nomina</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?= site_url('resources/bower_components/Ionicons/css/ionicons.min.css'); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= site_url('resources/dist/css/AdminLTE.css'); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?= site_url('resources/plugins/iCheck/square/blue.css'); ?>">

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">

            <div class="login-box-body">
                <p class="login-box-msg">
                <h1><?= lang('login_heading'); ?></h1>
                <p><?= lang('login_subheading'); ?></p>

                <div id="infoMessage"><?= $message; ?></div>
                </p>
                <?= form_open("auth/login"); ?>

                <div class="form-group has-feedback">
                    <?= lang('login_identity_label', 'identity'); ?>
                    <?= form_input($identity); ?>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <?= lang('login_password_label', 'password'); ?>
                    <?= form_input($password); ?>
                </div>

                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <?= form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                            <?= lang('login_remember_label', 'remember'); ?>
                        </div>
                    </div>
                    <div class="col-xs-4"> 
                        <?= form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary btn-block btn-flat"'); ?>
                    </div>
                </div>




                <?= form_close(); ?>

                <p><a href="forgot_password"><?= lang('login_forgot_password'); ?></a></p>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="<?= site_url('resources/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?= site_url('resources/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <!-- iCheck -->
        <script src="<?= site_url('resources/plugins/iCheck/icheck.min.js'); ?>"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
    </body>
</html>


