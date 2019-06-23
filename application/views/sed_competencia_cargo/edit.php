<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Competencia Cargo Edit</h3>
            </div>
			<?= form_open('sed_competencia_cargo/edit/'.$sed_competencia_cargo['id_cargo']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?= ($this->input->post('estado') ? $this->input->post('estado') : $sed_competencia_cargo['estado']); ?>" class="form-control" id="estado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_ingreso" class="control-label"><span class="text-danger">*</span>Fec Ingreso</label>
						<div class="form-group">
							<input type="text" name="fec_ingreso" value="<?= ($this->input->post('fec_ingreso') ? $this->input->post('fec_ingreso') : $sed_competencia_cargo['fec_ingreso']); ?>" class="has-datetimepicker form-control" id="fec_ingreso" />
							<span class="text-danger"><?= form_error('fec_ingreso');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_ingreso" class="control-label">User Ingreso</label>
						<div class="form-group">
							<input type="text" name="user_ingreso" value="<?= ($this->input->post('user_ingreso') ? $this->input->post('user_ingreso') : $sed_competencia_cargo['user_ingreso']); ?>" class="form-control" id="user_ingreso" />
							<span class="text-danger"><?= form_error('user_ingreso');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_modificacion" class="control-label">Fec Modificacion</label>
						<div class="form-group">
							<input type="text" name="fec_modificacion" value="<?= ($this->input->post('fec_modificacion') ? $this->input->post('fec_modificacion') : $sed_competencia_cargo['fec_modificacion']); ?>" class="has-datetimepicker form-control" id="fec_modificacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_modificacion" class="control-label">User Modificacion</label>
						<div class="form-group">
							<input type="text" name="user_modificacion" value="<?= ($this->input->post('user_modificacion') ? $this->input->post('user_modificacion') : $sed_competencia_cargo['user_modificacion']); ?>" class="form-control" id="user_modificacion" />
							<span class="text-danger"><?= form_error('user_modificacion');?></span>
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