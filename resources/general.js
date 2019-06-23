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





