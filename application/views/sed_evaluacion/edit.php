<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sed Evaluacion Edit</h3>
            </div>
			<?= form_open('sed_evaluacion/edit/'.$sed_evaluacion['id_periodo_detalle']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="comentario" class="control-label">Comentario</label>
						<div class="form-group">
							<input type="text" name="comentario" value="<?= ($this->input->post('comentario') ? $this->input->post('comentario') : $sed_evaluacion['comentario']); ?>" class="form-control" id="comentario" />
							<span class="text-danger"><?= form_error('comentario');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eval_360" class="control-label"><span class="text-danger">*</span>Eval 360</label>
						<div class="form-group">
							<input type="text" name="eval_360" value="<?= ($this->input->post('eval_360') ? $this->input->post('eval_360') : $sed_evaluacion['eval_360']); ?>" class="form-control" id="eval_360" />
							<span class="text-danger"><?= form_error('eval_360');?></span>
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