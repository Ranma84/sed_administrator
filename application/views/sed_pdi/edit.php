<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Pdi Edit</h3>
            </div>
			<?= form_open('sed_pdi/edit/'.$sed_pdi['id_pdi']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_periodo" class="control-label">Sed Periodo</label>
						<div class="form-group">
							<select name="id_periodo" class="form-control">
								<option value="">select sed_periodo</option>
								<?php 
								foreach($all_sed_periodos as $sed_periodo)
								{
									$selected = ($sed_periodo['id_periodo'] == $sed_pdi['id_periodo']) ? ' selected="selected"' : "";

									echo '<option value="'.$sed_periodo['id_periodo'].'" '.$selected.'>'.$sed_periodo['descripcion'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?= form_error('id_periodo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="periocidad" class="control-label">Periocidad</label>
						<div class="form-group">
							<input type="text" name="periocidad" value="<?= ($this->input->post('periocidad') ? $this->input->post('periocidad') : $sed_pdi['periocidad']); ?>" class="form-control" id="periocidad" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mejora" class="control-label">Mejora</label>
						<div class="form-group">
							<input type="text" name="mejora" value="<?= ($this->input->post('mejora') ? $this->input->post('mejora') : $sed_pdi['mejora']); ?>" class="form-control" id="mejora" />
							<span class="text-danger"><?= form_error('mejora');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="accion" class="control-label">Accion</label>
						<div class="form-group">
							<input type="text" name="accion" value="<?= ($this->input->post('accion') ? $this->input->post('accion') : $sed_pdi['accion']); ?>" class="form-control" id="accion" />
							<span class="text-danger"><?= form_error('accion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipo" class="control-label">Tipo</label>
						<div class="form-group">
							<input type="text" name="tipo" value="<?= ($this->input->post('tipo') ? $this->input->post('tipo') : $sed_pdi['tipo']); ?>" class="form-control" id="tipo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_inicio" class="control-label">Fec Inicio</label>
						<div class="form-group">
							<input type="text" name="fec_inicio" value="<?= ($this->input->post('fec_inicio') ? $this->input->post('fec_inicio') : $sed_pdi['fec_inicio']); ?>" class="has-datepicker form-control" id="fec_inicio" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_fin" class="control-label">Fec Fin</label>
						<div class="form-group">
							<input type="text" name="fec_fin" value="<?= ($this->input->post('fec_fin') ? $this->input->post('fec_fin') : $sed_pdi['fec_fin']); ?>" class="has-datepicker form-control" id="fec_fin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="presupuesto" class="control-label">Presupuesto</label>
						<div class="form-group">
							<input type="text" name="presupuesto" value="<?= ($this->input->post('presupuesto') ? $this->input->post('presupuesto') : $sed_pdi['presupuesto']); ?>" class="form-control" id="presupuesto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="resultado" class="control-label">Resultado</label>
						<div class="form-group">
							<input type="text" name="resultado" value="<?= ($this->input->post('resultado') ? $this->input->post('resultado') : $sed_pdi['resultado']); ?>" class="form-control" id="resultado" />
							<span class="text-danger"><?= form_error('resultado');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="observaciones" class="control-label">Observaciones</label>
						<div class="form-group">
							<input type="text" name="observaciones" value="<?= ($this->input->post('observaciones') ? $this->input->post('observaciones') : $sed_pdi['observaciones']); ?>" class="form-control" id="observaciones" />
							<span class="text-danger"><?= form_error('observaciones');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="avance" class="control-label">Avance</label>
						<div class="form-group">
							<input type="text" name="avance" value="<?= ($this->input->post('avance') ? $this->input->post('avance') : $sed_pdi['avance']); ?>" class="form-control" id="avance" />
							<span class="text-danger"><?= form_error('avance');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_ingreso" class="control-label"><span class="text-danger">*</span>Fec Ingreso</label>
						<div class="form-group">
							<input type="text" name="fec_ingreso" value="<?= ($this->input->post('fec_ingreso') ? $this->input->post('fec_ingreso') : $sed_pdi['fec_ingreso']); ?>" class="has-datepicker form-control" id="fec_ingreso" />
							<span class="text-danger"><?= form_error('fec_ingreso');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_ingreso" class="control-label"><span class="text-danger">*</span>User Ingreso</label>
						<div class="form-group">
							<input type="text" name="user_ingreso" value="<?= ($this->input->post('user_ingreso') ? $this->input->post('user_ingreso') : $sed_pdi['user_ingreso']); ?>" class="form-control" id="user_ingreso" />
							<span class="text-danger"><?= form_error('user_ingreso');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fec_modificacion" class="control-label">Fec Modificacion</label>
						<div class="form-group">
							<input type="text" name="fec_modificacion" value="<?= ($this->input->post('fec_modificacion') ? $this->input->post('fec_modificacion') : $sed_pdi['fec_modificacion']); ?>" class="has-datetimepicker form-control" id="fec_modificacion" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_modificacion" class="control-label">User Modificacion</label>
						<div class="form-group">
							<input type="text" name="user_modificacion" value="<?= ($this->input->post('user_modificacion') ? $this->input->post('user_modificacion') : $sed_pdi['user_modificacion']); ?>" class="form-control" id="user_modificacion" />
							<span class="text-danger"><?= form_error('user_modificacion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_periodo_detalle" class="control-label">Id Periodo Detalle</label>
						<div class="form-group">
							<input type="text" name="id_periodo_detalle" value="<?= ($this->input->post('id_periodo_detalle') ? $this->input->post('id_periodo_detalle') : $sed_pdi['id_periodo_detalle']); ?>" class="form-control" id="id_periodo_detalle" />
							<span class="text-danger"><?= form_error('id_periodo_detalle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_evaluado" class="control-label">Id Evaluado</label>
						<div class="form-group">
							<input type="text" name="id_evaluado" value="<?= ($this->input->post('id_evaluado') ? $this->input->post('id_evaluado') : $sed_pdi['id_evaluado']); ?>" class="form-control" id="id_evaluado" />
							<span class="text-danger"><?= form_error('id_evaluado');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_competencia" class="control-label">Id Competencia</label>
						<div class="form-group">
							<input type="text" name="id_competencia" value="<?= ($this->input->post('id_competencia') ? $this->input->post('id_competencia') : $sed_pdi['id_competencia']); ?>" class="form-control" id="id_competencia" />
							<span class="text-danger"><?= form_error('id_competencia');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_evaluador" class="control-label">Id Evaluador</label>
						<div class="form-group">
							<input type="text" name="id_evaluador" value="<?= ($this->input->post('id_evaluador') ? $this->input->post('id_evaluador') : $sed_pdi['id_evaluador']); ?>" class="form-control" id="id_evaluador" />
							<span class="text-danger"><?= form_error('id_evaluador');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="id_mentor" class="control-label">Id Mentor</label>
						<div class="form-group">
							<input type="text" name="id_mentor" value="<?= ($this->input->post('id_mentor') ? $this->input->post('id_mentor') : $sed_pdi['id_mentor']); ?>" class="form-control" id="id_mentor" />
							<span class="text-danger"><?= form_error('id_mentor');?></span>
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