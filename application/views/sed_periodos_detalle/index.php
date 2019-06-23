<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Periodos Detalle Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_periodos_detalle/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Secuencia</th>
						<th>Id Periodo</th>
						<th>Id Empresa</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
						<th>Estado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_periodos_detalle as $s){ ?>
                    <tr>
						<td><?= $s['secuencia']; ?></td>
						<td><?= $s['id_periodo']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['fecha_inicio']; ?></td>
						<td><?= $s['fecha_fin']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td>
                            <a href="<?= site_url('sed_periodos_detalle/edit/'.$s['secuencia']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_periodos_detalle/remove/'.$s['secuencia']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
