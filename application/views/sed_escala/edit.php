<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Escala Edit</h3>
            </div>
			<?= form_open('sed_escala/edit/'.$sed_escala['id_escala']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<input type="text" name="nombre" value="<?= ($this->input->post('nombre') ? $this->input->post('nombre') : $sed_escala['nombre']); ?>" class="form-control" id="nombre" />
							<span class="text-danger"><?= form_error('nombre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="valor" class="control-label">Valor</label>
						<div class="form-group">
							<input type="text" name="valor" value="<?= ($this->input->post('valor') ? $this->input->post('valor') : $sed_escala['valor']); ?>" class="form-control" id="valor" />
							<span class="text-danger"><?= form_error('valor');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<input type="text" name="estado" value="<?= ($this->input->post('estado') ? $this->input->post('estado') : $sed_escala['estado']); ?>" class="form-control" id="estado" />
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