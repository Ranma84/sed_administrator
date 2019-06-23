<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Empleado Add</h3>
            </div>
            <?= form_open('sed_empleado/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombres" class="control-label">Nombres</label>
						<div class="form-group">
							<input type="text" name="nombres" value="<?= $this->input->post('nombres'); ?>" class="form-control" id="nombres" />
							<span class="text-danger"><?= form_error('nombres');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="apellidos" class="control-label">Apellidos</label>
						<div class="form-group">
							<input type="text" name="apellidos" value="<?= $this->input->post('apellidos'); ?>" class="form-control" id="apellidos" />
							<span class="text-danger"><?= form_error('apellidos');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ruc_ced" class="control-label">Ruc Ced</label>
						<div class="form-group">
							<input type="text" name="ruc_ced" value="<?= $this->input->post('ruc_ced'); ?>" class="form-control" id="ruc_ced" />
							<span class="text-danger"><?= form_error('ruc_ced');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_nacimiento" class="control-label">Fec Nacimiento</label>
						<div class="form-group">
							<input type="text" name="fec_nacimiento" value="<?= $this->input->post('fec_nacimiento'); ?>" class="has-datepicker form-control" id="fec_nacimiento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_ingreso" class="control-label"><span class="text-danger">*</span>Fec Ingreso</label>
						<div class="form-group">
							<input type="text" name="fec_ingreso" value="<?= $this->input->post('fec_ingreso'); ?>" class="has-datetimepicker form-control" id="fec_ingreso" />
							<span class="text-danger"><?= form_error('fec_ingreso');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_baja" class="control-label">Fec Baja</label>
						<div class="form-group">
							<input type="text" name="fec_baja" value="<?= $this->input->post('fec_baja'); ?>" class="has-datepicker form-control" id="fec_baja" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?= $this->input->post('estado'); ?>" class="form-control" id="estado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_jefe" class="control-label">Id Jefe</label>
						<div class="form-group">
							<input type="text" name="id_jefe" value="<?= $this->input->post('id_jefe'); ?>" class="form-control" id="id_jefe" />
							<span class="text-danger"><?= form_error('id_jefe');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_alta" class="control-label">Fec Alta</label>
						<div class="form-group">
							<input type="text" name="fec_alta" value="<?= $this->input->post('fec_alta'); ?>" class="has-datepicker form-control" id="fec_alta" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_modificacion" class="control-label">Fec Modificacion</label>
						<div class="form-group">
							<input type="text" name="fec_modificacion" value="<?= $this->input->post('fec_modificacion'); ?>" class="has-datetimepicker form-control" id="fec_modificacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_modificacion" class="control-label">User Modificacion</label>
						<div class="form-group">
							<input type="text" name="user_modificacion" value="<?= $this->input->post('user_modificacion'); ?>" class="form-control" id="user_modificacion" />
							<span class="text-danger"><?= form_error('user_modificacion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_ingreso" class="control-label">User Ingreso</label>
						<div class="form-group">
							<input type="text" name="user_ingreso" value="<?= $this->input->post('user_ingreso'); ?>" class="form-control" id="user_ingreso" />
							<span class="text-danger"><?= form_error('user_ingreso');?></span>
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