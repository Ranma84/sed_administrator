<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Empresa Edit</h3>
            </div>
			<?= form_open('sed_empresa/edit/'.$sed_empresa['id_empresa']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nombre_comercial" class="control-label"><span class="text-danger">*</span>Nombre Comercial</label>
						<div class="form-group">
							<input type="text" name="nombre_comercial" value="<?= ($this->input->post('nombre_comercial') ? $this->input->post('nombre_comercial') : $sed_empresa['nombre_comercial']); ?>" class="form-control" id="nombre_comercial" />
							<span class="text-danger"><?= form_error('nombre_comercial');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="descripcion" class="control-label">Descripcion</label>
						<div class="form-group">
							<input type="text" name="descripcion" value="<?= ($this->input->post('descripcion') ? $this->input->post('descripcion') : $sed_empresa['descripcion']); ?>" class="form-control" id="descripcion" />
							<span class="text-danger"><?= form_error('descripcion');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ced_ruc" class="control-label">Ced Ruc</label>
						<div class="form-group">
							<input type="text" name="ced_ruc" value="<?= ($this->input->post('ced_ruc') ? $this->input->post('ced_ruc') : $sed_empresa['ced_ruc']); ?>" class="form-control" id="ced_ruc" />
							<span class="text-danger"><?= form_error('ced_ruc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion" class="control-label">Direccion</label>
						<div class="form-group">
							<input type="text" name="direccion" value="<?= ($this->input->post('direccion') ? $this->input->post('direccion') : $sed_empresa['direccion']); ?>" class="form-control" id="direccion" />
							<span class="text-danger"><?= form_error('direccion');?></span>
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