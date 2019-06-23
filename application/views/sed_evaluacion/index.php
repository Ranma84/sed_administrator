<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Evaluacion Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_evaluacion/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Periodo Detalle</th>
						<th>Id Periodo</th>
						<th>Id Empresa</th>
						<th>Id Evaluado</th>
						<th>Id Evaluador</th>
						<th>Comentario</th>
						<th>Eval 360</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_evaluacion as $s){ ?>
                    <tr>
						<td><?= $s['id_periodo_detalle']; ?></td>
						<td><?= $s['id_periodo']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['id_evaluado']; ?></td>
						<td><?= $s['id_evaluador']; ?></td>
						<td><?= $s['comentario']; ?></td>
						<td><?= $s['eval_360']; ?></td>
						<td>
                            <a href="<?= site_url('sed_evaluacion/edit/'.$s['id_periodo_detalle']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_evaluacion/remove/'.$s['id_periodo_detalle']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
