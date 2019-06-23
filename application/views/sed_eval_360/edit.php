<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Eval 360 Edit</h3>
            </div>
			<?= form_open('sed_eval_360/edit/'.$sed_eval_360['id_evaluador']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?= ($this->input->post('estado') ? $this->input->post('estado') : $sed_eval_360['estado']); ?>" class="form-control" id="estado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo_evaluado" class="control-label">Tipo Evaluado</label>
						<div class="form-group">
							<input type="text" name="tipo_evaluado" value="<?= ($this->input->post('tipo_evaluado') ? $this->input->post('tipo_evaluado') : $sed_eval_360['tipo_evaluado']); ?>" class="form-control" id="tipo_evaluado" />
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