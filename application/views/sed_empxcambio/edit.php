<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Empxcambio Edit</h3>
            </div>
			<?= form_open('sed_empxcambio/edit/'.$sed_empxcambio['id_empleado']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fec_modificacion" class="control-label">Fec Modificacion</label>
						<div class="form-group">
							<input type="text" name="fec_modificacion" value="<?= ($this->input->post('fec_modificacion') ? $this->input->post('fec_modificacion') : $sed_empxcambio['fec_modificacion']); ?>" class="has-datetimepicker form-control" id="fec_modificacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_modificacion" class="control-label">User Modificacion</label>
						<div class="form-group">
							<input type="text" name="user_modificacion" value="<?= ($this->input->post('user_modificacion') ? $this->input->post('user_modificacion') : $sed_empxcambio['user_modificacion']); ?>" class="form-control" id="user_modificacion" />
							<span class="text-danger"><?= form_error('user_modificacion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?= ($this->input->post('estado') ? $this->input->post('estado') : $sed_empxcambio['estado']); ?>" class="form-control" id="estado" />
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