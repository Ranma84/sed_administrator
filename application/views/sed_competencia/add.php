<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Competencia Add</h3>
            </div>
            <?= form_open('sed_competencia/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_tipo_competencia" class="control-label">Sed Competencia</label>
						<div class="form-group">
							<select name="id_tipo_competencia" class="form-control">
								<option value="">select sed_competencia</option>
								<?php 
								foreach($all_sed_competencias as $sed_competencia)
								{
									$selected = ($sed_competencia['id_competencia'] == $this->input->post('id_tipo_competencia')) ? ' selected="selected"' : "";

									echo '<option value="'.$sed_competencia['id_competencia'].'" '.$selected.'>'.$sed_competencia['id_competencia'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?= form_error('id_tipo_competencia');?></span>
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
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?= $this->input->post('estado'); ?>" class="form-control" id="estado" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="definicion" class="control-label">Definicion</label>
						<div class="form-group">
							<input type="text" name="definicion" value="<?= $this->input->post('definicion'); ?>" class="form-control" id="definicion" />
							<span class="text-danger"><?= form_error('definicion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="inverso" class="control-label">Inverso</label>
						<div class="form-group">
							<input type="text" name="inverso" value="<?= $this->input->post('inverso'); ?>" class="form-control" id="inverso" />
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