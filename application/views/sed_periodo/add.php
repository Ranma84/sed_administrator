<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Periodo Add</h3>
            </div>
            <?= form_open('sed_periodo/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="anio" class="control-label">Anio</label>
						<div class="form-group">
							<input type="text" name="anio" value="<?= $this->input->post('anio'); ?>" class="form-control" id="anio" />
							<span class="text-danger"><?= form_error('anio');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion" class="control-label">Descripcion</label>
						<div class="form-group">
							<input type="text" name="descripcion" value="<?= $this->input->post('descripcion'); ?>" class="form-control" id="descripcion" />
							<span class="text-danger"><?= form_error('descripcion');?></span>
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