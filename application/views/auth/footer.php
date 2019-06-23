   </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Creado por GenieSolutions</strong>
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

        <script>
            $(function () {
                $('.select2').select2();

                $('#fecha_inicio').datetimepicker({
                    format: "yyyy-mm-dd hh:ii:ss",
                });

                $('#fecha_final').datetimepicker({
                    format: "yyyy-mm-dd hh:ii:ss",
                });


                if ($('.has-datepicker').length)
                {
                    $('.has-datepicker').datepicker({
                        format: "yyyy-mm-dd",
                    });
                }


            })
        </script>    
    </body>
</html>
