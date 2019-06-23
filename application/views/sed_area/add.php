<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Area Add</h3>
            </div>
            <?= form_open('sed_area/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label"><span class="text-danger">*</span>Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?= $this->input->post('nombre'); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?= form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label"><span class="text-danger">*</span>Estado</label>
						<div class="form-group">
							<!--input type="text" name="estado" value="<?= $this->input->post('estado'); ?>" class="form-control" id="estado" /-->
							
							 <?php 
							$array_estado = array('A'=>'Activo','I'=>'Inactivo');
                                                        echo form_dropdown('estado',$array_estado,'A','class="form-control select2" style="width: 100%;"');
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