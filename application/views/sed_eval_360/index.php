<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Eval 360 Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_eval_360/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Evaluador</th>
						<th>Id Empresa</th>
						<th>Id Evaluado</th>
						<th>Id Periodo</th>
						<th>Estado</th>
						<th>Tipo Evaluado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_eval_360 as $s){ ?>
                    <tr>
						<td><?= $s['id_evaluador']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['id_evaluado']; ?></td>
						<td><?= $s['id_periodo']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td><?= $s['tipo_evaluado']; ?></td>
						<td>
                            <a href="<?= site_url('sed_eval_360/edit/'.$s['id_evaluador']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_eval_360/remove/'.$s['id_evaluador']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?= $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
