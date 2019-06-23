<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Sed Usuario Add</h3>
            </div>
            <?= form_open('sed_usuario/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="clave" class="control-label">Clave</label>
                        <div class="form-group">
                            <input type="text" name="clave" value="<?= $this->input->post('clave'); ?>" class="form-control" id="clave" />
                            <span class="text-danger"><?= form_error('clave'); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="id_empleado" class="control-label">Id Empleado</label>
                        <div class="form-group">
                            <input type="text" name="id_empleado" value="<?= $this->input->post('id_empleado'); ?>" class="form-control" id="id_empleado" />
                            <span class="text-danger"><?= form_error('id_empleado'); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="estado" class="control-label">Estado</label>
                        <div class="form-group">
                            <input type="text" name="estado" value="<?= $this->input->post('estado'); ?>" class="form-control" id="estado" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Guardar
                </button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>