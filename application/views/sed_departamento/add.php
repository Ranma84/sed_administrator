<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Departamento Add</h3>
            </div>
            <?= form_open('sed_departamento/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_area" class="control-label">Sed Area</label>
						<div class="form-group">
							<select name="id_area" class="form-control">
								<option value="">select sed_area</option>
								<?php 
								foreach($all_sed_areas as $sed_area)
								{
									$selected = ($sed_area['id_area'] == $this->input->post('id_area')) ? ' selected="selected"' : "";

									echo '<option value="'.$sed_area['id_area'].'" '.$selected.'>'.$sed_area['nombre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?= form_error('id_area');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?= $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?= form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label"><span class="text-danger">*</span>Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?= $this->input->post('estado'); ?>" class="form-control" id="estado" />
							<span class="text-danger"><?= form_error('estado');?></span>
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
						<label for="user_ingreso" class="control-label"><span class="text-danger">*</span>User Ingreso</label>
						<div class="form-group">
							<input type="text" name="user_ingreso" value="<?= $this->input->post('user_ingreso'); ?>" class="form-control" id="user_ingreso" />
							<span class="text-danger"><?= form_error('user_ingreso');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_modificacion" class="control-label"><span class="text-danger">*</span>Fec Modificacion</label>
						<div class="form-group">
							<input type="text" name="fec_modificacion" value="<?= $this->input->post('fec_modificacion'); ?>" class="has-datetimepicker form-control" id="fec_modificacion" />
							<span class="text-danger"><?= form_error('fec_modificacion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_modificacion" class="control-label">User Modificacion</label>
						<div class="form-group">
							<input type="text" name="user_modificacion" value="<?= $this->input->post('user_modificacion'); ?>" class="form-control" id="user_modificacion" />
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