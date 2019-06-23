<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Area Edit</h3>
            </div>
			<?= form_open('sed_area/edit/'.$sed_area['id_area']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?= ($this->input->post('nombre') ? $this->input->post('nombre') : $sed_area['nombre']); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?= form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label"><span class="text-danger">*</span>Estado</label>
						<div class="form-group">
						<?php
                            $array_estado = array('A'=>'Activo','I'=>'Inactivo');
                            echo form_dropdown('estado', $array_estado, ($this->input->post('estado') ? $this->input->post('estado') : $sed_area['estado']), 'class="form-control select2" style="width: 100%;"');
                            ?>
							<span class="text-danger"><?= form_error('estado');?></span>
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