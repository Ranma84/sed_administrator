<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Evaluacion Detalle Edit</h3>
            </div>
			<?= form_open('sed_evaluacion_detalle/edit/'.$sed_evaluacion_detalle['id_empresa']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_escala" class="control-label">Sed Escala</label>
						<div class="form-group">
							<select name="id_escala" class="form-control">
								<option value="">select sed_escala</option>
								<?php 
								foreach($all_sed_escalas as $sed_escala)
								{
									$selected = ($sed_escala['id_escala'] == $sed_evaluacion_detalle['id_escala']) ? ' selected="selected"' : "";

									echo '<option value="'.$sed_escala['id_escala'].'" '.$selected.'>'.$sed_escala['nombre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?= form_error('id_escala');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="logro_real" class="control-label">Logro Real</label>
						<div class="form-group">
							<input type="text" name="logro_real" value="<?= ($this->input->post('logro_real') ? $this->input->post('logro_real') : $sed_evaluacion_detalle['logro_real']); ?>" class="form-control" id="logro_real" />
							<span class="text-danger"><?= form_error('logro_real');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="comentario" class="control-label">Comentario</label>
						<div class="form-group">
							<input type="text" name="comentario" value="<?= ($this->input->post('comentario') ? $this->input->post('comentario') : $sed_evaluacion_detalle['comentario']); ?>" class="form-control" id="comentario" />
							<span class="text-danger"><?= form_error('comentario');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="logro_ponderado" class="control-label">Logro Ponderado</label>
						<div class="form-group">
							<input type="text" name="logro_ponderado" value="<?= ($this->input->post('logro_ponderado') ? $this->input->post('logro_ponderado') : $sed_evaluacion_detalle['logro_ponderado']); ?>" class="form-control" id="logro_ponderado" />
							<span class="text-danger"><?= form_error('logro_ponderado');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="puntaje_ponderado" class="control-label">Puntaje Ponderado</label>
						<div class="form-group">
							<input type="text" name="puntaje_ponderado" value="<?= ($this->input->post('puntaje_ponderado') ? $this->input->post('puntaje_ponderado') : $sed_evaluacion_detalle['puntaje_ponderado']); ?>" class="form-control" id="puntaje_ponderado" />
							<span class="text-danger"><?= form_error('puntaje_ponderado');?></span>
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