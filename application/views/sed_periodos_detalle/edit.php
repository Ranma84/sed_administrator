<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Sed Periodos Detalle Edit</h3>
            </div>
            <?= form_open('sed_periodos_detalle/edit/' . $sed_periodos_detalle['secuencia']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="fecha_inicio" class="control-label">Fecha Inicio</label>
                        <div class="form-group">
                            <input type="text" name="fecha_inicio" value="<?= ($this->input->post('fecha_inicio') ? $this->input->post('fecha_inicio') : $sed_periodos_detalle['fecha_inicio']); ?>" class="has-datepicker form-control" id="fecha_inicio" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fecha_fin" class="control-label">Fecha Fin</label>
                        <div class="form-group">
                            <input type="text" name="fecha_fin" value="<?= ($this->input->post('fecha_fin') ? $this->input->post('fecha_fin') : $sed_periodos_detalle['fecha_fin']); ?>" class="has-datepicker form-control" id="fecha_fin" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="estado" class="control-label">Estado</label>
                        <div class="form-group">
                            <input type="text" name="estado" value="<?= ($this->input->post('estado') ? $this->input->post('estado') : $sed_periodos_detalle['estado']); ?>" class="form-control" id="estado" />
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