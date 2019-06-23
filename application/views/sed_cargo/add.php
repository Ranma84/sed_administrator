<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Cargo Add</h3>
            </div>
            <?= form_open('sed_cargo/add'); ?>
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
						<label for="id_dpto" class="control-label">Sed Departamento</label>
						<div class="form-group">
							<select name="id_dpto" class="form-control">
								<option value="">select sed_departamento</option>
								<?php 
								foreach($all_sed_departamentos as $sed_departamento)
								{
									$selected = ($sed_departamento['id_dpto'] == $this->input->post('id_dpto')) ? ' selected="selected"' : "";

									echo '<option value="'.$sed_departamento['id_dpto'].'" '.$selected.'>'.$sed_departamento['nombre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?= form_error('id_dpto');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_nivel" class="control-label">Sed Nivele</label>
						<div class="form-group">
							<select name="id_nivel" class="form-control">
								<option value="">select sed_nivele</option>
								<?php 
								foreach($all_sed_niveles as $sed_nivele)
								{
									$selected = ($sed_nivele['id_nivel'] == $this->input->post('id_nivel')) ? ' selected="selected"' : "";

									echo '<option value="'.$sed_nivele['id_nivel'].'" '.$selected.'>'.$sed_nivele['nombre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?= form_error('id_nivel');?></span>
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
						<label for="plazas" class="control-label">Plazas</label>
						<div class="form-group">
							<input type="text" name="plazas" value="<?= $this->input->post('plazas'); ?>" class="form-control" id="plazas" />
							<span class="text-danger"><?= form_error('plazas');?></span>
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